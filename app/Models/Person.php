<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Person
 * 
 * @property int $ID
 * @property string $NAME
 * @property string $LASTNAME
 * @property string $SECOND_LASTNAME
 * @property Carbon $BIRTHDATE
 * @property string $GENDER
 * @property string $EMAIL
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Dessert[] $desserts
 *
 * @package App\Models
 */


class Person extends Authenticatable
{
	use HasApiTokens, HasFactory, Notifiable;

	protected $table = 'person';
	protected $primaryKey = 'ID';

	protected $casts = [
		'BIRTHDATE' => 'datetime'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'NAME',
		'LASTNAME',
		'SECOND_LASTNAME',
		'BIRTHDATE',
		'GENDER',
		'EMAIL',
		'password',
		'remember_token'
	];

	protected function casts(): array
	{
		return [
			'password' => 'hashed',
		];
	}

	public function desserts()
	{
		return $this->hasMany(Dessert::class, 'ID_PERSON');
	}
}
