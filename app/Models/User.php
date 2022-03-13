<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasFactory, Notifiable, InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'username',
        'middle_names',
        'last_name',
        'tel_no',
        'active',
        'email',
        'password',
        'agree_terms',
        'agree_notification',
        'agree_contact_review',
        'review_interests'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles() {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function assignRole($role){
        if(is_string($role)){
            $role = Role::whereName($role)->firstOrFail();
        }
        $this->roles()->sync($role, false);
    }

    public function hasRole($role){
        return $this->roles->pluck('name')->contains($role);
    }

    public function abilities() {
        return $this->roles->map->abilities->flatten()->pluck('name')->unique();
    }

    public function getAvatarAttribute()
    {
        return $this->getFirstMediaURL('avatar') ?? '';
    }

    public function getIsAdminAttribute()
    {
        return $this->roles()->whereName('admin')->count() > 0 ? true : false;
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatar')->singleFile();
    }
}
