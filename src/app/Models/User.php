<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use SammyK\LaravelFacebookSdk\SyncableGraphNodeTrait;
use App\Helper\Src\Traits\Uuids;

class User extends Model implements AuthenticatableContract, AuthorizableContract, CanResetPasswordContract
{

    use Authenticatable,
        Authorizable,
        SyncableGraphNodeTrait,
        Uuids,
        CanResetPassword;

    protected $table = 'c_users';
    protected $primaryKey = 'id';
    protected static $graph_node_field_aliases = [
        'id' => 'facebook_id'
    ];
    protected $fillable = [
        'name',
        'email',
        'password',
        'facebook_id',
        'user_name'
    ];
    protected $hidden = [
        'password',
        'remember_token'
    ];

}
