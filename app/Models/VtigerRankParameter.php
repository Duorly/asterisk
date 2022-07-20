<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VtigerRankParameter
 * 
 * @property int $parameter_id
 * @property string $parameter
 * @property string $lower_range
 * @property string $upper_range
 * @property int $points
 *
 * @package App\Models
 */
class VtigerRankParameter extends Model
{
	protected $table = 'vtiger_rank_parameters';
	protected $primaryKey = 'parameter_id';
	public $timestamps = false;

	protected $casts = [
		'points' => 'int'
	];

	protected $fillable = [
		'parameter',
		'lower_range',
		'upper_range',
		'points'
	];
}
