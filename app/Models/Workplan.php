<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workplan extends Model
{
    use HasFactory;
    public $table = "workplan";

    protected $fillable = [
        'division', 'name', 'description', 'image'
    ];
}