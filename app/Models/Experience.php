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
     * Set the user's position.
     *
     * @param  string  $value
     * @return void
     */
    public function setPositionAttribute($value)
    {
        $this->attributes['position'] = ucfirst($value);
    }

    /**
     * Set the user's company.
     *
     * @param  string  $value
     * @return void
     */
    public function setCompanyAttribute($value)
    {
        $this->attributes['company'] = ucfirst($value);
    }

    /**
     * Set the user's description.
     *
     * @param  string  $value
     * @return void
     */
    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] = ucfirst($value);
    }

    /**
     * Set the user's location.
     *
     * @param  string  $value
     * @return void
     */
    public function setLocationAttribute($value)
    {
        $this->attributes['location'] = ucfirst($value);
    }
}
