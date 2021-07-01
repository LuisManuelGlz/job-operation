<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'issuing_company',
        'month_of_issue',
        'has_an_expiration_date',
        'expiration_date', // no expiration date
        'credential_id',
        'url',
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
     * Set the user's certification name.
     *
     * @param  string  $value
     * @return void
     */
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucfirst($value);
    }

    /**
     * Set the user's issuing company.
     *
     * @param  string  $value
     * @return void
     */
    public function setIssuingCompanyAttribute($value)
    {
        $this->attributes['issuing_company'] = ucfirst($value);
    }
}
