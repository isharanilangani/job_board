<?php

namespace App\Models;
use App\Enums\JobType;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'title',
        'description',
        'location',
        'type',
        'user_id',
    ];

    protected $casts = [
        'type' => JobType::class,
    ];

    public function applications()
{
    return $this->hasMany(Application::class);
}
public function user()
    {
        return $this->belongsTo(User::class);
    }

}
