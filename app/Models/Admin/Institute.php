<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institute extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'logo',
        'name_en',
        'name_bn',
        'eiin',
        'email',
        'address',
        'contact',
        'facebook',
        'youtube',
        'status',
        'created_by',
        'updated_by'
    ];
}
