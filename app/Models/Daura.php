<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Daura extends Authenticatable
{
    protected $table = 'daura'; // Tên bảng trong CSDL
    protected $primaryKey = 'iddaura'; // Tên trường khóa chính
    protected $fillable = ['namedaura','totalcost','note']; // Các trường trong bảng có thể được gán giá trị
    
    
}
   

