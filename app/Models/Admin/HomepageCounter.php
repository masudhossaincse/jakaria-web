<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HomepageCounter extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'students',
        'teachers',
        'staff',
        'educational_level',
        'status',
        'created_by',
        'updated_by'
    ];
}
