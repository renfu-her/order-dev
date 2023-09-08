<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';

    protected $fillable = [
        'account',
        'password',
        'verify_code',
        'name',
        'email',
        'phone',
        'address',
        'remark',
        'status',
    ];
}
