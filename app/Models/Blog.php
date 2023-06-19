<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Blog extends Authenticatable
{
    protected $table = 'blog'; // Tên bảng trong CSDL
    protected $primaryKey = 'idblog'; // Tên trường khóa chính
    protected $fillable = ['title', 'content','timeread','imageblog','id']; // Các trường trong bảng có thể được gán giá trị
    
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
   

