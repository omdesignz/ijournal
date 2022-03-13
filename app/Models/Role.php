<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Role extends Model
{
    use SoftDeletes;
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'label',
    ];

    public function abilities() {
        return $this->belongsToMany(Ability::class)->withTimestamps();
    }

    public function users() {
        return $this->belongsToMany(User::class)->withTimestamps();
    }

    public function allowTo($ability){
        if(is_string($ability)){
            $ability = Ability::whereName($ability)->firstOrFail();
        }

        $this->abilities()->sync($ability, false);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? null, function ($query, $search) {
            $query->where(function ($query) use ($search) {
                $query->where('name', 'like', '%'.$search.'%')
                    ->orWhere('label', 'like', '%'.$search.'%');
            });
        })->when($filters['trashed'] ?? null, function ($query, $trashed) {
            if ($trashed === 'with') {
                $query->withTrashed();
            } elseif ($trashed === 'only') {
                $query->onlyTrashed();
            }
        })->when($filters['range'] ?? null, function ($query) {
            $query->whereBetween(
                'created_at',
                [
                    Carbon::parse(collect(explode(',', request('range')))->first())->startOfDay(),
                    Carbon::parse(collect(explode(',', request('range')))->last())->endOfDay()
                ]);
        });
    }


    public static function defaultData()
    {
        return [
                    [
                        'name' => 'Admin',
                        'label' => 'Admin'
                    ],
                    [
                        'name' => 'Author',
                        'label' => 'Author'
                    ],
                    [
                        'name' => 'Reviewer',
                        'label' => 'Reviewer'
                    ],
                    [
                        'name' => 'Editor',
                        'label' => 'Editor'
                    ],
                    [
                        'name' => 'Writer',
                        'label' => 'Writer'
                    ]
                ];
    }
}
