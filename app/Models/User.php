<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array

     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array

     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array

     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Interact with the user's first name.
     *
    //  * @param  string  $value
    //  * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    // protected function type(): Attribute
    // {
    //     return new Attribute(
    //         get: fn ($value) =>  ["user", "admin", "manager"][$value],
    //     );
    // }

    public function profile()
    {
        return $this->hasOne(profile::class);
    }
    public function profileProfessionalSummary()
    {
        return $this->hasOne(profile::class);
    }
    public function ContactData()
    {
        return $this->hasOne(profile::class);
    }
    public function BlogPost()
    {
        return $this->hasOne(profile::class);
    }
    public function skill(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class);
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    public function education()
    {
        return $this->hasOne(Education::class);
    }

    public function experience()
    {
        return $this->hasOne(Experience::class);
    }

    public function project()
    {
        return $this->hasOne(Project::class);
    }






}
