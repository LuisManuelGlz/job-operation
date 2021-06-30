<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'experience';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position',
        'current_job',
        'company',
        'description',
        'location',
        'from_date',
        'to_date'
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
