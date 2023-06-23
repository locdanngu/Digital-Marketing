<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Servicechange extends Authenticatable
{
    protected $table = 'servicechange'; // Tên bảng trong CSDL
    protected $primaryKey = 'idchange'; // Tên trường khóa chính
    protected $fillable = ['reason','idads']; // Các trường trong bảng có thể được gán giá trị
    
    public function reasonchange(){
        return $this->belongsTo(Serviceads::class, 'idads');
    }
}
   

