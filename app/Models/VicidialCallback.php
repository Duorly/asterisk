<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCallback
 * 
 * @property int $callback_id
 * @property int|null $lead_id
 * @property int|null $list_id
 * @property string|null $campaign_id
 * @property string|null $status
 * @property Carbon|null $entry_time
 * @property Carbon|null $callback_time
 * @property Carbon $modify_date
 * @property string|null $user
 * @property string|null $recipient
 * @property string|null $comments
 * @property string|null $user_group
 * @property string|null $lead_status
 * @property Carbon|null $email_alert
 * @property string|null $email_result
 * @property string|null $customer_timezone
 * @property string|null $customer_timezone_diff
 * @property Carbon|null $customer_time
 *
 * @package App\Models
 */
class VicidialCallback extends Model
{
	protected $table = 'vicidial_callbacks';
	protected $primaryKey = 'callback_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'list_id' => 'int'
	];

	protected $dates = [
		'entry_time',
		'callback_time',
		'modify_date',
		'email_alert',
		'customer_time'
	];

	protected $fillable = [
		'lead_id',
		'list_id',
		'campaign_id',
		'status',
		'entry_time',
		'callback_time',
		'modify_date',
		'user',
		'recipient',
		'comments',
		'user_group',
		'lead_status',
		'email_alert',
		'email_result',
		'customer_timezone',
		'customer_timezone_diff',
		'customer_time'
	];
}
