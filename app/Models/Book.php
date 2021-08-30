<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['type_id', 'title', 'author', 'publisher'];
    
    public function typeBook()
    {
        return $this->belongsTo(TypeBook::class, 'type_id');
    }
}
