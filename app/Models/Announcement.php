<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Announcement extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'description',
        'published_at',
        'user_id'
    ];
    protected $table = 'announcements';

    public function user() {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function getCoverAttribute()
    {
        return $this->getFirstMediaURL('cover') ?? '';
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover')->singleFile();
    }
}
