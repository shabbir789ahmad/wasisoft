<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukcontacts extends Model
{
    use HasFactory;
    protected $table = 'ukcontacts';
	protected $fillable = ['name', 'email', 'phone', 'message'];
}
