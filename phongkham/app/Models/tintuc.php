<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    use HasFactory;
    protected $primaryKey = 'idtintuc';
     protected $table = 'tbl_tintuc';
    protected $fillable = [
        'tentintuc', 'motatintuc','noidungtintuc','hinhanhtintuc'
    ];
    // protected $guarded = [];
}
