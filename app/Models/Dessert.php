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
 * @property int $ID_PERSON
 * @property string $IMAGE_URL
 * 
 * @property Category $category
 * @property Person $person
 * @property Collection|Ingredient[] $ingredients
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
		'DATE_ADDED' => 'datetime',
		'ID_PERSON' => 'int'
	];

	protected $fillable = [
		'ID_CATEGORY',
		'NAME',
		'DESCRIPTION',
		'DATE_ADDED',
		'ID_PERSON',
		'IMAGE_URL'
	];

	public function category()
	{
		return $this->belongsTo(Category::class, 'ID_CATEGORY');
	}

	public function person()
	{
		return $this->belongsTo(Person::class, 'ID_PERSON');
	}

	public function ingredients()
	{
		return $this->belongsToMany(Ingredient::class, 'dessert_ingredient', 'ID_DESSERT', 'ID_INGREDIENT')
					->withPivot('ID', 'QUANTITY', 'UNIT_OF_MEASURE');
	}
}
