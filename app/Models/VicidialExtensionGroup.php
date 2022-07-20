<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialExtensionGroup
 * 
 * @property int $extension_id
 * @property string $extension_group_id
 * @property string|null $extension
 * @property int|null $rank
 * @property string|null $campaign_groups
 * @property int|null $call_count_today
 * @property Carbon|null $last_call_time
 * @property string|null $last_callerid
 *
 * @package App\Models
 */
class VicidialExtensionGroup extends Model
{
	protected $table = 'vicidial_extension_groups';
	protected $primaryKey = 'extension_id';
	public $timestamps = false;

	protected $casts = [
		'rank' => 'int',
		'call_count_today' => 'int'
	];

	protected $dates = [
		'last_call_time'
	];

	protected $fillable = [
		'extension_group_id',
		'extension',
		'rank',
		'campaign_groups',
		'call_count_today',
		'last_call_time',
		'last_callerid'
	];
}
