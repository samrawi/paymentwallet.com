<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginLogs extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function merchant()
    {
        return $this->belongsTo(Merchant::class)->withDefault();
    }
}
