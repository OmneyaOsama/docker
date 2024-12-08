<?php
// app/Models/Session.php

namespace App\Models;
use App\Models\Feature;
use App\Models\Chat;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $connection = 'mysql_database1'; 
    protected $fillable = ['name', 'description', 'feature_id'];

    // A session belongs to a feature
    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }

    // A session has one chat
    public function chat()
    {
        return $this->hasOne(Chat::class);
    }
}
