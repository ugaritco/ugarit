<?php

namespace App\Models;

// use Heritage\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Heritage\Database\Eloquent\Attributes\Fillable;
use Heritage\Database\Eloquent\Attributes\Hidden;
use Heritage\Database\Eloquent\Factories\HasFactory;
use Heritage\Foundation\Auth\User as Authenticatable;
use Heritage\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

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
}
