<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dichvu extends Model
{
    use HasFactory;
    protected $primaryKey = 'iddichvu';
     protected $table = 'tbl_dichvu';
    protected $fillable = [
        'tendichvu', 'motadichvu','noidungdichvu','hinhanhdichvu'
    ];
}
