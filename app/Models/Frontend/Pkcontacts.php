<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkcontacts extends Model
{
    use HasFactory;
    protected $table = 'pkcontacts';
	protected $fillable = ['name', 'email', 'phone', 'message'];
}
