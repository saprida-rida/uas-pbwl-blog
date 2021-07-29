<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "tb_category";

    protected $primaryKey = "cat_id";

    protected $fillable = ['cat_nama', 'cat_text'];
}
