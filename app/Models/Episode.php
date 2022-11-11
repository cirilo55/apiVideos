<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['number'];
    protected $casts = [
        'watched' => 'boolean'
    ];
    // protected function watched(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($watched) => (bool) $watched,
    //         set: fn ($watched) => (bool) $watched

    //     );
    // }

    public function season()
    {
        return $this->belongsTo(Season::class);
    }


}
