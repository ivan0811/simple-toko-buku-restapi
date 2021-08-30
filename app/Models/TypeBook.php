<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeBook extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    
    public function book()
    {
        return $this->hasMany(Book::class, 'type_id');
    }
}
