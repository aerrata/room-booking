<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    // protected $fillable = ['name', 'capacity', 'room_category_id'];

    protected $guarded = [];

    public function room_category()
    {
        return $this->belongsTo(RoomCategory::class);
    }
}
