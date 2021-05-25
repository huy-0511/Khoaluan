<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lichhen extends Model
{
    use HasFactory;
    protected $table = 'lichhen';
    protected $primaryKey = 'id';
    protected $fillable = [
       'mota','iddichvu','ngay','gio','trangthai','idtaikhoan','code','idbacsi'
    ];
}
