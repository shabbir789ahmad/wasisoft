<?php

namespace App\Models\Frontend\About;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Focus extends Model
{
    use HasFactory;
    protected $table = 'focus_card';
    protected $fillable = [
        'heading',
        'description',
        'image'
    ];
}
