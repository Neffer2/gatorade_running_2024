<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corredor extends Model
{
    use HasFactory;
    protected $table = 'corredores';
    protected $fillable = ['name', 'document', 'phone', 'email', 'picture'];
}
