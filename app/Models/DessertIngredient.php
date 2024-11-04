<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class DessertIngredient
 * 
 * @property int $ID
 * @property int $ID_INGREDIENT
 * @property int $ID_DESSERT
 * @property float|null $QUANTITY
 * @property string|null $UNIT_OF_MEASURE
 * 
 * @property Dessert $dessert
 * @property Ingredient $ingredient
 *
 * @package App\Models
 */
class DessertIngredient extends Model
{
	protected $table = 'dessert_ingredient';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ID_INGREDIENT' => 'int',
		'ID_DESSERT' => 'int',
		'QUANTITY' => 'float'
	];

	protected $fillable = [
		'ID_INGREDIENT',
		'ID_DESSERT',
		'QUANTITY',
		'UNIT_OF_MEASURE'
	];

	public function dessert()
	{
		return $this->belongsTo(Dessert::class, 'ID_DESSERT');
	}

	public function ingredient()
	{
		return $this->belongsTo(Ingredient::class, 'ID_INGREDIENT');
	}
}
