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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['profile_id', 'created_at', 'updated_at'];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    /**
     * Set the user's school.
     *
     * @param  string  $value
     * @return void
     */
    public function setSchoolAttribute($value)
    {
        $this->attributes['school'] = ucfirst($value);
    }

    /**
     * Set the user's degree.
     *
     * @param  string  $value
     * @return void
     */
    public function setDegreeAttribute($value)
    {
        $this->attributes['degree'] = ucfirst($value);
    }
}
