<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Brief extends Authenticatable
{
    protected $table = 'brief'; // Tên bảng trong CSDL
    protected $primaryKey = 'idbrief'; // Tên trường khóa chính
    protected $fillable = ['namebrief', 'contentbrief','titlebrief']; // Các trường trong bảng có thể được gán giá trị
    
}
   

