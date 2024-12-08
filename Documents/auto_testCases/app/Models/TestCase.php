<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestCase extends Model
{
    use HasFactory;

    protected $connection = 'mysql_database1';

    protected $fillable = ['project_id', 'feature_id', 'received_message', 'type'];

    protected static function booted()
    {
        static::created(function ($testCase) {
            \App\Models\TestCase::on('mysql_database2')->create([
                'project_id' => $testCase->project_id,
                'feature_id' => $testCase->feature_id,
                'received_message' => $testCase->received_message,
                'type' => $testCase->type,
            ]);
        });
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function feature()
    {
        return $this->belongsTo(Feature::class);
    }
}
