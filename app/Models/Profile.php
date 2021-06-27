<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position',
        'bio',
        'location',
        'company',
        'skills',
        'website',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
