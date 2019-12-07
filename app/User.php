<?php namespace App;

use App\Traits\UserAccess;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\HasDatabaseNotifications;
use Orchid\Screen\AsSource;


class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable, CanResetPassword, UserAccess, AsSource, HasDatabaseNotifications;

    /**
     * @var
     */
    protected static $rolesModel = Roles::class;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * @var array
     */
    protected $fillable = [
        'email',
        'permissions',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Display name.
     *
     * @return string
     */
    public function getNameTitle(): string
    {
        return $this->name;
    }

    /**
     *
     * @return string
     */
    public function getAvatar(): string
    {
        $hash = md5(strtolower(trim($this->email)));

        return "https://www.gravatar.com/avatar/$hash";
    }

    /**
     * Display sub.
     *
     * @return string
     */
    public function getSubTitle(): string
    {
        return 'Administrator';
    }
}
