<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDropList
 * 
 * @property string $dl_id
 * @property string|null $dl_name
 * @property Carbon|null $last_run
 * @property string|null $dl_server
 * @property string|null $dl_times
 * @property string|null $dl_weekdays
 * @property string|null $dl_monthdays
 * @property string|null $drop_statuses
 * @property int|null $list_id
 * @property string|null $duplicate_check
 * @property string|null $run_now_trigger
 * @property string|null $active
 * @property string|null $user_group
 * @property string|null $closer_campaigns
 * @property int|null $dl_minutes
 *
 * @package App\Models
 */
class VicidialDropList extends Model
{
	protected $table = 'vicidial_drop_lists';
	protected $primaryKey = 'dl_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'list_id' => 'int',
		'dl_minutes' => 'int'
	];

	protected $dates = [
		'last_run'
	];

	protected $fillable = [
		'dl_name',
		'last_run',
		'dl_server',
		'dl_times',
		'dl_weekdays',
		'dl_monthdays',
		'drop_statuses',
		'list_id',
		'duplicate_check',
		'run_now_trigger',
		'active',
		'user_group',
		'closer_campaigns',
		'dl_minutes'
	];
}
