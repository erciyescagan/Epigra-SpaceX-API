<?php

namespace App\Models;

use App\Events\SyncCompleted;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capsule extends Model
{
    use HasFactory;

    protected $fillable = [
        'capsule_serial', 'capsule_id', 'status', 'original_launch', 'original_launch_unix', 'missions',
        'landings', 'type', 'details', 'reuse_count'
    ];

    protected $dispatchesEvents = [
        'updated' => SyncCompleted::class,
        'created' => SyncCompleted::class
    ];

    protected $casts = [
        'missions' => 'json',
    ];
}
