<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Article extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'title',
        'abstract',
        'references',
        'keywords',
        'cite_instructions',
        'authors',
        'link',
        'published_at',
        'status',
        'agree_privacy_policy',
        'agree_terms',
        'user_id',
        'journal_id',
    ];
    protected $table = 'articles';

    protected $casts = [
        'status' => 'boolean',
        'agree_terms' => 'boolean',
        'agree_privacy_policy' => 'boolean',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id')->withDefault();
    }

    public function journal() {
        return $this->belongsTo(Journal::class, 'journal_id')->withDefault();
    }

    public function reviews() {
        return $this->hasMany(Review::class, 'article_id');
    }

    public function getDeclarationAttribute()
    {
        return $this->getFirstMediaURL('declaration') ?? '';
    }

    public function getFullPaperAttribute()
    {
        return $this->getFirstMediaURL('full_paper') ?? '';
    }

    public function getFilteredPaperAttribute()
    {
        return $this->getFirstMediaURL('filtered_paper') ?? '';
    }

    public function getFinalPaperAttribute()
    {
        return $this->getFirstMediaURL('final_paper') ?? '';
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('declaration')->singleFile();
        $this->addMediaCollection('full_paper')->singleFile();
        $this->addMediaCollection('filtered_paper')->singleFile();
        $this->addMediaCollection('final_paper')->singleFile();
    }
}
