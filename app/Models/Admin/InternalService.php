<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class InternalService extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'link',
        'status',
        'created_by',
        'updated_by'
    ];
}
