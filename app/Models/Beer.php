<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Beer extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'regions', 'img', 'user_id'
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
}
