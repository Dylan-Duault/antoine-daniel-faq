<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FaqItem extends Model
{
    use HasFactory;

    protected $table = 'FaqItem';

    protected $guarded = [];

    protected $fillable = ['question', 'answer'];
}
