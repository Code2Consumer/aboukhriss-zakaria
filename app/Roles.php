<?php namespace App;

use App\Traits\RoleAccess;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{

    use RoleAccess;

    /**
     * @var string
     */
    protected static $usersModel = User::class;

    /**
     * @var string
     */
    protected $table = 'roles';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'slug',
        'permissions',
    ];

}
