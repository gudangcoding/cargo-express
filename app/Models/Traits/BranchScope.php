<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class BranchScope implements Scope
{
    public function apply(Builder $builder, Model $model)
    {
        if (auth()->check() && auth()->user()->branch_id) {
            $builder->where($model->getTable() . '.branch_id', auth()->user()->branch_id);
        }
    }
}

trait BranchScopeTrait
{
    protected static function bootBranchScopeTrait()
    {
        static::addGlobalScope(new BranchScope);
    }
} 