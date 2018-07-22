<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function hasRole($roles)
    {
        $this->have_role = $this->getUserRole();

        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->checkUserRole($role)) {
                    return true;
                }
            }
        } else {
            return $this->checkUserRole($roles);
        }
        return false;
    }

    private function getUserRole()
    {
        return $this->role()->getResults();
    }

    private function checkUserRole($role)
    {
        return (strtolower($role)==strtolower($this->have_role->nama)) ? true : false;
    }
}
