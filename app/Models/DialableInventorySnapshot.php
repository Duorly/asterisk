<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DialableInventorySnapshot
 * 
 * @property int $snapshot_id
 * @property Carbon|null $snapshot_time
 * @property int|null $list_id
 * @property string|null $list_name
 * @property string|null $list_description
 * @property string|null $campaign_id
 * @property string|null $list_lastcalldate
 * @property int|null $list_start_inv
 * @property int|null $dialable_count
 * @property int|null $dialable_count_nofilter
 * @property int|null $dialable_count_oneoff
 * @property int|null $dialable_count_inactive
 * @property float|null $average_call_count
 * @property float|null $penetration
 * @property string|null $shift_data
 * @property string|null $time_setting
 *
 * @package App\Models
 */
class DialableInventorySnapshot extends Model
{
	protected $table = 'dialable_inventory_snapshots';
	protected $primaryKey = 'snapshot_id';
	public $timestamps = false;

	protected $casts = [
		'list_id' => 'int',
		'list_start_inv' => 'int',
		'dialable_count' => 'int',
		'dialable_count_nofilter' => 'int',
		'dialable_count_oneoff' => 'int',
		'dialable_count_inactive' => 'int',
		'average_call_count' => 'float',
		'penetration' => 'float'
	];

	protected $dates = [
		'snapshot_time'
	];

	protected $fillable = [
		'snapshot_time',
		'list_id',
		'list_name',
		'list_description',
		'campaign_id',
		'list_lastcalldate',
		'list_start_inv',
		'dialable_count',
		'dialable_count_nofilter',
		'dialable_count_oneoff',
		'dialable_count_inactive',
		'average_call_count',
		'penetration',
		'shift_data',
		'time_setting'
	];
}
