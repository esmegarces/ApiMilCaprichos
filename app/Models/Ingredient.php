<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Ingredient
 * 
 * @property int $ID
 * @property string $NAME
 * 
 * @property Collection|Dessert[] $desserts
 *
 * @package App\Models
 */
class Ingredient extends Model
{
	protected $table = 'ingredient';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'NAME'
	];

	public function desserts()
	{
		return $this->belongsToMany(Dessert::class, 'dessert_ingredient', 'ID_DESSERT', 'ID_INGREDIENT')
					->withPivot('ID', 'QUANTITY', 'UNIT_OF_MEASURE');
	}
}
