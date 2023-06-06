<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Consol extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'brand',
        'logo',
        'description',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function games(){
        return $this->belongsToMany(Game::class);
    }
}
