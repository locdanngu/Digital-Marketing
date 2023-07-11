<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Kol extends Authenticatable
{
    protected $table = 'kol'; // Tên bảng trong CSDL
    protected $primaryKey = 'idkol'; // Tên trường khóa chính
    protected $fillable = ['namekol', 'imgkol']; // Các trường trong bảng có thể được gán giá trị
    
}
   

