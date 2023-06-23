<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Googleads extends Authenticatable
{
    protected $table = 'googleads'; // Tên bảng trong CSDL
    protected $primaryKey = 'idggads'; // Tên trường khóa chính
    protected $fillable = ['name','email','phone','cost']; // Các trường trong bảng có thể được gán giá trị
    
    
}
   

