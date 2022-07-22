<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conversa extends Model
{
    use HasFactory;
    protected $fillable = ['idUser1', 'idUser2','mensagem'];
}
