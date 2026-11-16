<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
    'category_id', 'title', 'client_name', 'image',
    'project_url', 'description', 'completed_date',
];
}
