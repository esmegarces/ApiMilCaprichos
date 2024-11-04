<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Dessert
 * 
 * @property int $ID
 * @property int $ID_CATEGORY
 * @property string $NAME
 * @property string $DESCRIPTION
 * @property Carbon|null $DATE_ADDED
 * 
 * @property Category $category
 * @property Collection|Ingredient[] $ingredients
 * @property Collection|Person[] $people
 *
 * @package App\Models
 */
class Dessert extends Model
{
	protected $table = 'dessert';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $casts = [
		'ID_CATEGORY' => 'int',
		'DATE_ADDED' => 'datetime'
	];

	protected $fillable = [
		'ID_CATEGORY',
		'NAME',
		'DESCRIPTION',
		'DATE_ADDED'
	];

	public function category()
	{
		return $this->belongsTo(Category::class, 'ID_CATEGORY');
	}

	public function ingredients()
	{
		return $this->belongsToMany(Ingredient::class, 'dessert_ingredient', 'ID_INGREDIENT', 'ID_DESSERT')
					->withPivot('ID', 'QUANTITY', 'UNIT_OF_MEASURE');
	}

	public function people()
	{
		return $this->belongsToMany(Person::class, 'person_dessert', 'ID_DESSERT', 'ID_PERSON')
					->withPivot('ID_VARIANT');
	}
}
