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
        'expiration_date',
        'credential_id',
        'url',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}
