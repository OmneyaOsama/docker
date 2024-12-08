<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $connection = 'mysql_database1'; 
    protected $fillable = ['send_msg','receive_msg', 'session_id'];

    // A chat belongs to a session
    public function session()
    {
        return $this->belongsTo(Session::class);
    }
    public function getMessagesForSession($sessionId)
    {
        return self::where('session_id', $sessionId)
                   ->orderBy('created_at', 'asc')
                   ->get();
    }
}
