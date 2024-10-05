<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'owner_id',
        'last_message_id',
    ];

    // define relation to Users
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // define relation to Messages
    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    // define relation to Owner
    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
