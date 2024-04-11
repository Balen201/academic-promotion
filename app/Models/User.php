<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


    /// bo andam table
public function andams(): HasMany
{

return $this->hasMany(andam::class);

}

public function blawkrawas(): HasMany
{

return $this->hasMany(blawkrawa::class);

}

public function chalakidws(): HasMany
{

return $this->hasMany(chalakidw::class);

}



public function chalakises(): HasMany
{

return $this->hasMany(chalakise::class);

}


public function chalakiyaks(): HasMany
{

return $this->hasMany(chalakiyak::class);

}


public function dllnyajors(): HasMany
{

return $this->hasMany(dllnyaJor::class);

}


public function feedbacks(): HasMany
{

return $this->hasMany(feedback::class);

}



public function personaldws(): HasMany
{

return $this->hasMany(personaldw::class);

}



public function rezlenans(): HasMany
{

return $this->hasMany(rezlenan::class);

}


public function twezhinawayaks(): HasMany
{

return $this->hasMany(TwezhinawaYak::class);

}

public function twezhinawadws(): HasMany
{

return $this->hasMany(TwezhinawDw::class);

}

public function xwendnchars(): HasMany
{

return $this->hasMany(Xwendnchar::class);

}


public function xwendndws(): HasMany
{

return $this->hasMany(Xwendndw::class);

}

public function xwendnones(): HasMany
{

return $this->hasMany(XwendnOne::class);

}

public function xwendnses(): HasMany
{

return $this->hasMany(XwendnSe::class);

}

public function personal_detailfs(): HasMany
{

return $this->hasMany(PersonDetailf::class);

}





}
