<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone_id',
        'name',
        'phone',
        'address',
    ];

    public function phone()
    {
        return $this->belongsTo(Phone::class);
    }
}
