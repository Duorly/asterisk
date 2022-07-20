<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAreacodeFilter
 * 
 * @property string $group_id
 * @property string $areacode
 *
 * @package App\Models
 */
class VicidialAreacodeFilter extends Model
{
	protected $table = 'vicidial_areacode_filters';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'group_id',
		'areacode'
	];
}
