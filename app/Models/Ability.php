<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Ability extends Model
{
    protected $table = 'abilities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'label',
    ];
    public function roles() {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function scopeFormattedGlobalAbilities()
    {
        return cache()->rememberForever('formatted_global_abilities', function () {
            return $this->select(['id','name', 'label'])
                ->get()
                ->groupBy(function($item, $key){
//                    return Str::of($item['name'])->after('_')->__toString();
                    return __('permissions.global.' . Str::of($item['name'])->after('_')->__toString());
                })
                ->sortBy(function($item){
                    return $item;
                })
                ->each(function($item, $key){
                    $item->transform(function($it){
                        return $d = collect([
                            'id' => $it['id'],
                            'name' =>__('permissions.global.' . Str::of($it['name'])->before('_')->__toString()),
                            'label' => $it['label']
                        ]);
                    });

                })
                ->toArray();
        });

    }

    public static function defaultData()
    {
        return [
            [
                'name' => 'view_buildings',
                'label' => ''
            ],
            [
                'name' => 'add_buildings',
                'label' => ''
            ]

        ];
    }
}
