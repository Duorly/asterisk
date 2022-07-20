<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialShift
 * 
 * @property string $shift_id
 * @property string|null $shift_name
 * @property string|null $shift_start_time
 * @property string|null $shift_length
 * @property string|null $shift_weekdays
 * @property string|null $report_option
 * @property string|null $user_group
 * @property int|null $report_rank
 *
 * @package App\Models
 */
class VicidialShift extends Model
{
	protected $table = 'vicidial_shifts';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'report_rank' => 'int'
	];

	protected $fillable = [
		'shift_id',
		'shift_name',
		'shift_start_time',
		'shift_length',
		'shift_weekdays',
		'report_option',
		'user_group',
		'report_rank'
	];
}
