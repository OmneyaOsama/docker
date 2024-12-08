<?php
// app/Models/Project.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $connection = 'mysql_database1'; 
    protected $fillable = ['name', 'description', 'user_id'];

    // A project belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // A project has many features
    public function features()
    {
        return $this->hasMany(Feature::class);
    }

    public function testCases()
    {
        return $this->hasMany(TestCase::class);
    }
}
