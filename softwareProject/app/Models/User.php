<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'description',
        'profile_img',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // this function will returns all users with that role
    public function roles()
    {
        return $this->belongsToMany('App\Models\Role', 'user_role');
    }

    // many-to-many
    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'user_skills')->withPivot('rating');
    }

    // one-to-many
    public function forumPost(){
        return $this->hasMany(ForumPost::class);
    }
    public function authorizeRoles($roles)
    {
        if(is_array($roles)){
            return $this->hasAnyRole($roles) ||
            abort (401, 'This action is unauthorzed');
        }
        return $this->hasRole($roles) ||
        abort(401, 'This action is unauthorized');
    }

    public function hasRole($role)
    {
        return null !== $this->roles()->where('name', $role)->first();
    }

    public function hasAnyRole($roles)
    {
        return null !== $this->roles()->whereIn('name', $roles)->first();
    }

}
