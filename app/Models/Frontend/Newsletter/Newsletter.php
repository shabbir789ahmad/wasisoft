<?php

namespace App\Models\Frontend\Newsletter;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
    protected $table = 'newsletter';
    protected $fillable = ['email'];
}
