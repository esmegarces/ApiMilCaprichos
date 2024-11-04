<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
class Person extends Model
{
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

	public function desserts()
	{
		return $this->belongsToMany(Dessert::class, 'person_dessert', 'ID_PERSON', 'ID_DESSERT')
					->withPivot('ID_VARIANT');
	}
}
