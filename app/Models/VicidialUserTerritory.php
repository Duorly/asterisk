<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialUserTerritory
 * 
 * @property string $user
 * @property string|null $territory
 * @property string|null $level
 *
 * @package App\Models
 */
class VicidialUserTerritory extends Model
{
	protected $table = 'vicidial_user_territories';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'level'
	];
}
