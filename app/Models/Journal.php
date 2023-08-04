<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'abstract',
      'file',
      'page_no',
      'authors',
      'email',
      'phone',
    ];
}
