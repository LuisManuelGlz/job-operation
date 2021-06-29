<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school',
        'degree',
        'starting_year',
        'ending_year',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
