<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    // use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'albums';
    protected $fillable = [
        'title',
        'description',
        'img',
        'date',
        'featured',
        'photographer_id'
    ];

    public function photographer(){
        return $this->belongsTo(Photographer::class, 'photographer_id');
    }
}
