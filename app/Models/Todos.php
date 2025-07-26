<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    protected $fillable = ['name', 'description', 'due_date', 'completed']; //for mass assignment of column values
    //to update multiple columns at once
    
    /** @use HasFactory<\Database\Factories\TodosFactory> */
    use HasFactory;
}
