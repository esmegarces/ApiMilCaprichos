<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 * 
 * @property int $ID
 * @property string $NAME
 * 
 * @property Collection|Dessert[] $desserts
 *
 * @package App\Models
 */
class Category extends Model
{
	protected $table = 'category';
	protected $primaryKey = 'ID';
	public $timestamps = false;

	protected $fillable = [
		'NAME'
	];

	public function desserts()
	{
		return $this->hasMany(Dessert::class, 'ID_CATEGORY');
	}
}
