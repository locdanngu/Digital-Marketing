<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Service extends Authenticatable
{
    protected $table = 'service'; // Tên bảng trong CSDL
    protected $primaryKey = 'idservice'; // Tên trường khóa chính
    protected $fillable = ['namservice']; // Các trường trong bảng có thể được gán giá trị
    
}
   

