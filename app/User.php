<?php
namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Zizaco\Entrust\Traits\EntrustUserTrait;
class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword,EntrustUserTrait {
        EntrustUserTrait::can as may;
        Authorizable::can insteadof EntrustUserTrait;
    }
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    #date in timestamps
    protected $dates = ['created_at', 'updated_at'];
    //protected $with = ['profile','roles'];
    /**
     * One to Many Relation with Album
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function album(){
        return $this->hasMany('App\Album','user_id','id');
    }
    /**
     * One to Many Relation with Department
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dept()
    {
        return $this->belongsTo('App\Department','dept_id','id');
    }
    /**
     * One to Many Relation with CommitteeMemberList
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function committeMemberlist(){
        return $this->hasMany('App\CommitteeMemberList','committee_member_list','id');
    }
    /**
     * One to One Relation with Profile
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile(){
        return $this->hasOne('App\Profile','user_id','id');
    }
    /**
     * One to Many Relation with Event
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function registration()
    {
        return $this->hasMany('App\Registration','user_id','id');
    }
}