<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PowerbiUser extends Model
{
    use HasFactory;
    protected $fillable=['username','password','client_id','isActive'];
}
