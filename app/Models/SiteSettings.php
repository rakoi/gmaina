<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{

    protected $fillable=['sitename','email','telephone','aboutus','aboutimage'];
    use HasFactory;
}
