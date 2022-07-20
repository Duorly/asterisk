<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialConfiguration
 * 
 * @property int $id
 * @property string $name
 * @property string $value
 *
 * @package App\Models
 */
class VicidialConfiguration extends Model
{
	protected $table = 'vicidial_configuration';
	public $timestamps = false;

	protected $fillable = [
		'name',
		'value'
	];
}
