<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialTerritory
 * 
 * @property int $territory_id
 * @property string|null $territory
 * @property string|null $territory_description
 *
 * @package App\Models
 */
class VicidialTerritory extends Model
{
	protected $table = 'vicidial_territories';
	protected $primaryKey = 'territory_id';
	public $timestamps = false;

	protected $fillable = [
		'territory',
		'territory_description'
	];
}
