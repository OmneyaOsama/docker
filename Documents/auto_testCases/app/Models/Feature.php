<?php
// app/Models/Feature.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $connection = 'mysql_database1'; 
    protected $fillable = ['name', 'description', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }        

    public function sessions()
    {
        return $this->hasMany(Session::class);
    }
    public function testCases()
    {
        return $this->hasMany(TestCase::class);
    }
}
