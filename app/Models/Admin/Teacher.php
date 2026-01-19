<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'image',
        'serial',
        'name',
        'contact',
        'mpo_code',
        'gender',
        'designation',
        'date_of_joining',
        'date_of_mpo',
        'date_of_birth',
        'ssc',
        'hsc',
        'ba',
        'honours',
        'masters',
        'b_ed',
        'm_ed',
        'm_phil',
        'phd',
        'status',
        'created_by',
        'updated_by'
    ];
}
