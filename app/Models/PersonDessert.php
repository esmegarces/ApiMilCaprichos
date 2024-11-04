<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonDessert
 * 
 * @property int $ID_VARIANT
 * @property int $ID_PERSON
 * @property int $ID_DESSERT
 * 
 * @property Person $person
 * @property Dessert $dessert
 *
 * @package App\Models
 */
class PersonDessert extends Model
{
	protected $table = 'person_dessert';
	protected $primaryKey = 'ID_VARIANT';
	public $timestamps = false;

	protected $casts = [
		'ID_PERSON' => 'int',
		'ID_DESSERT' => 'int'
	];

	protected $fillable = [
		'ID_PERSON',
		'ID_DESSERT'
	];

	public function person()
	{
		return $this->belongsTo(Person::class, 'ID_PERSON');
	}

	public function dessert()
	{
		return $this->belongsTo(Dessert::class, 'ID_DESSERT');
	}
}
