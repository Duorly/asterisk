<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class UserCallLogArchive
 * 
 * @property int $user_call_log_id
 * @property string|null $user
 * @property Carbon|null $call_date
 * @property string|null $call_type
 * @property string $server_ip
 * @property string|null $phone_number
 * @property string|null $number_dialed
 * @property int|null $lead_id
 * @property string|null $callerid
 * @property string|null $group_alias_id
 * @property string|null $preset_name
 * @property string|null $campaign_id
 * @property string|null $customer_hungup
 * @property int|null $customer_hungup_seconds
 * @property string|null $xfer_hungup
 * @property Carbon|null $xfer_hungup_datetime
 *
 * @package App\Models
 */
class UserCallLogArchive extends Model
{
	protected $table = 'user_call_log_archive';
	protected $primaryKey = 'user_call_log_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_call_log_id' => 'int',
		'lead_id' => 'int',
		'customer_hungup_seconds' => 'int'
	];

	protected $dates = [
		'call_date',
		'xfer_hungup_datetime'
	];

	protected $fillable = [
		'user',
		'call_date',
		'call_type',
		'server_ip',
		'phone_number',
		'number_dialed',
		'lead_id',
		'callerid',
		'group_alias_id',
		'preset_name',
		'campaign_id',
		'customer_hungup',
		'customer_hungup_seconds',
		'xfer_hungup',
		'xfer_hungup_datetime'
	];
}
