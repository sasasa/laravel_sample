<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

class SkillCollection extends Collection
{
    public function skillsGroupByTypeForSelect()
    {
        $ret = [];
        $this->each(function($skill) use(&$ret) {
            $ret[$skill->typeName][$skill->id] = $skill->name;
        });
        return $ret;
    }
}


class Skill extends Model
{
    public function newCollection(array $models = [])
    {
        return new SkillCollection($models);
    }
    
    public static $rulesCreate = [
        'name'    => 'required|string|unique:skills|max:10',
        'type'    => 'required|integer|in:0,1,2'
    ];
    public static $rulesUpdate = [
        'name'    => 'required|string|max:10',
        'type'    => 'required|integer|in:0,1,2',
    ];


    protected $fillable = ['type', 'name'];

    const TYPES = ['プログラム', 'デザイン', 'オフィス', ];

    public function users()
    {
        return $this
        ->belongsToMany('App\User', 'skill_user')
        ->using(SkillUser::class)->withPivot(['proficiency']);
    }

    public function getTypeNameAttribute()
    {
        return self::TYPES[$this->attributes['type']];
    }

}
