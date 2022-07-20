<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TwodayVicidialLog
 * 
 * @property string $uniqueid
 * @property int $lead_id
 * @property int|null $list_id
 * @property string|null $campaign_id
 * @property Carbon|null $call_date
 * @property int|null $start_epoch
 * @property int|null $end_epoch
 * @property int|null $length_in_sec
 * @property string|null $status
 * @property string|null $phone_code
 * @property string|null $phone_number
 * @property string|null $user
 * @property string|null $comments
 * @property string|null $processed
 * @property string|null $user_group
 * @property string|null $term_reason
 * @property string|null $alt_dial
 *
 * @package App\Models
 */
class TwodayVicidialLog extends Model
{
	protected $table = 'twoday_vicidial_log';
	protected $primaryKey = 'uniqueid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'list_id' => 'int',
		'start_epoch' => 'int',
		'end_epoch' => 'int',
		'length_in_sec' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'lead_id',
		'list_id',
		'campaign_id',
		'call_date',
		'start_epoch',
		'end_epoch',
		'length_in_sec',
		'status',
		'phone_code',
		'phone_number',
		'user',
		'comments',
		'processed',
		'user_group',
		'term_reason',
		'alt_dial'
	];
}
