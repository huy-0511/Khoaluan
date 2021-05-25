<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banggia extends Model
{
    use HasFactory;
    protected $primaryKey = 'idbanggia';
    protected $table = 'tbl_banggia';
    protected $fillable = [
        'donvi','dongia','iddichvu','tendichvu'
    ];
}
