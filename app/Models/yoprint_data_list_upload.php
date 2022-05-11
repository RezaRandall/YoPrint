<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class yoprint_data_list_upload extends Model
{
    use HasFactory;

    protected $table = "yoprint_data_list_upload";

    protected $fillable = ['file','status'];
}
