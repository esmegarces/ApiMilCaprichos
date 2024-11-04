<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetallesPostre
 * 
 * @property int $ID
 * @property string $NAME_DESSERT
 * @property string $NAME_CATEGORY
 * @property array|null $INGREDIENTS
 * @property string $DESCRIPTION
 * @property Carbon|null $DATE_ADDED
 * @property string $NAME_PERSON
 *
 * @package App\Models
 */
class DetallesPostre extends Model
{
	protected $table = 'detalles_postres';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'INGREDIENTS' => 'json',
		'DATE_ADDED' => 'datetime'
	];

	protected $fillable = [
		'ID',
		'NAME_DESSERT',
		'NAME_CATEGORY',
		'INGREDIENTS',
		'DESCRIPTION',
		'DATE_ADDED',
		'NAME_PERSON'
	];
}
