<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Emailthongbao extends Authenticatable
{
    protected $table = 'emailthongbao'; // Tên bảng trong CSDL
    protected $primaryKey = 'idemailthongbao'; // Tên trường khóa chính
    protected $fillable = ['email']; // Các trường trong bảng có thể được gán giá trị
    
    
}
   

