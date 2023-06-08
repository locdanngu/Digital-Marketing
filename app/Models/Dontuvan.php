<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Dontuvan extends Authenticatable
{
    protected $table = 'dontuvan'; // Tên bảng trong CSDL
    protected $primaryKey = 'idtuvan'; // Tên trường khóa chính
    protected $fillable = ['name','email','phone','review']; // Các trường trong bảng có thể được gán giá trị
    
    
}
   

