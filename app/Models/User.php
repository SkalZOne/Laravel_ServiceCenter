<?php

namespace App\Models;

use Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticated;

class User extends Authenticated
{
    use HasFactory, SoftDeletes;

    protected $fillable = [];
    protected $guarded = [];
}
