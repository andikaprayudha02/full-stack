<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Message;
use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PublicController extends Controller
{
    // 1. Halaman utama dengan data dinamis dari MySQL
    public function index(): View
    {
        $categories = Category::all();

        $services = Service::with('category')
            ->latest()
            ->get();

        $portfolios = Portfolio::with('category')
            ->latest('completed_date')
            ->take(6)
            ->get();

        return view('home', compact('categories', 'services', 'portfolios'));
    }

    // 2. Validasi dan simpan pesan dari form Hubungi Kami
    public function storeMessage(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'sender_name'  => 'required|string|max:100',
            'sender_email' => 'required|email|max:100',
            'subject'      => 'required|string|max:150',
            'message_body' => 'required|string|min:10',
        ], [
            'sender_name.required'  => 'Nama lengkap wajib diisi.',
            'sender_email.required' => 'Alamat email wajib diisi.',
            'sender_email.email'    => 'Format alamat email tidak valid.',
            'subject.required'      => 'Subjek pesan wajib diisi.',
            'message_body.required' => 'Isi pesan tidak boleh kosong.',
            'message_body.min'      => 'Isi pesan minimal harus 10 karakter.',
        ]);

        Message::create($validated);

        return redirect()->to(route('home') . '#contact')
            ->with('success', 'Terima kasih! Pesan Anda telah kami terima dan akan segera ditindaklanjuti.');
    }
}