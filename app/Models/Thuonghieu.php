<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Thuonghieu extends Authenticatable
{
    protected $table = 'thuonghieu'; // Tên bảng trong CSDL
    protected $primaryKey = 'idth'; // Tên trường khóa chính
    protected $fillable = ['tenthuonghieu', 'anhthuonghieu']; // Các trường trong bảng có thể được gán giá trị
    
}
   

