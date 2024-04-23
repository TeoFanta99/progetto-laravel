<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id'
    ];

    public function event()
    {
        return $this -> belongsTo(Event :: class);
    }
}
