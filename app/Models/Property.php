<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'address',
        'property_type',
        'city',
        'country',
        'img_logo',
        'base_color',
        'property_email',
        'phone_number', 
        'latitude',
        'longitude', 
        'province', 
        'zip_code',  
        'terms_conditions'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
