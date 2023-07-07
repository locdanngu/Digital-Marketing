<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Video extends Authenticatable
{
    protected $table = 'video'; // Tên bảng trong CSDL
    protected $primaryKey = 'idvd'; // Tên trường khóa chính
    protected $fillable = ['namevideo', 'contentvideo','like','comment','share','imgvideo']; // Các trường trong bảng có thể được gán giá trị
    
}
   

