<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Review extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'description',
        'accepted',
        'rejected',
        'user_id',
        'article_id',
        'status',
        'rejection_description',
    ];
    protected $table = 'article_review';

    protected $casts = [
        'status' => 'boolean',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function article() {
        return $this->belongsTo(Article::class, 'article_id')->withDefault();
    }

    public function getRevisedPaperAttribute()
    {
        return $this->getFirstMediaURL('revised_paper') ?? '';
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('revised_paper')->singleFile();
    }
}
