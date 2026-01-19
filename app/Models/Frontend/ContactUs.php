<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'email',
        'mobile',
        'title',
        'description',
        'status',
        'created_by',
        'updated_by'
    ];
}
