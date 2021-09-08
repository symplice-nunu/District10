<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District10 extends Model
{
    use HasFactory;
    protected $fillable = [
        'companyname', 'emailaddress', 'chapter', 'position', 'address', 'state', 'city', 'zipcode', 'contact', 'phone', 'fax', 'website', 'image'
    ];
    
    protected $table="district10";
}
