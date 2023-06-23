<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Serviceads extends Authenticatable
{
    protected $table = 'serviceads'; // Tên bảng trong CSDL
    protected $primaryKey = 'idads'; // Tên trường khóa chính
    protected $fillable = ['name','email','phone','idservice','cost']; // Các trường trong bảng có thể được gán giá trị
    
    public function service(){
        return $this->belongsTo(Service::class, 'idservice');
    }
}

   

