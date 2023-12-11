<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class mahasiswa extends Model
{
    use HasFactory;
    protected $fillable = ['nim','nama','jurusan','password','type'];
    protected $table = 'mahasiswa';
    public $timestamps = false;
}
