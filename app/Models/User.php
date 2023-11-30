<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
	use HasFactory;
	
	const USER_CONTENT = 1;
	const USER_CS = 2;
	const USER_ADMIN = 3;
	const USER_SUPER_ADMIN = 9;
	const ADMIN_GROUP = [self::USER_ADMIN, self::USER_SUPER_ADMIN];
	
	protected $table = 'user';
	
	protected $guarded = [];
}
