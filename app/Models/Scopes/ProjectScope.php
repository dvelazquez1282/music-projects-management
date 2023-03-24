<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Scope;
use LaravelApiFactory\Traits\QueryScopeTrait;
use LaravelApiFactory\Traits\ScopeTrait;

class ProjectScope implements Scope
{
    use ScopeTrait, QueryScopeTrait;

}
