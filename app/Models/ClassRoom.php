<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassRoom extends Model
{
    use HasFactory;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    public function teacher()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
