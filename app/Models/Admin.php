<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'tbl_admin'; // agar jadval nomi boshqacha bo'lsa

    protected $fillable = [
        'admin_name',
        'admin_username',
        'admin_password',
        'admin_profile',
        'user_type',
    ];

    protected $hidden = [
        'admin_password',
    ];

    // agar siz 'admin_password' maydonini parol sifatida ishlatmoqchi bo'lsangiz
    // accessor/mutator yozishingiz mumkin
}
