<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manuscript extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'publish_status', 'editors_pick'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
