<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    use HasFactory;

    // use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'photographers';
    protected $fillable = [
        'name',
        'phone',
        'email',
        'bio',
        'profile_picture'
    ];

    public function album(){
        return $this->hasMany(Album::class, 'photographer_id');
    }
}
