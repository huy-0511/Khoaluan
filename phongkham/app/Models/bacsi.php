<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bacsi extends Model
{
    use HasFactory;
     protected $primaryKey = 'idbacsi';
    protected $table = 'tbl_doctor';
    protected $fillable = [
        'hoten','hinhanh','hocvan','cacchungchidacbiet',
    ];
}
