<?php

namespace App\Models;

use App\App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'user_id'];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
