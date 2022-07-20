<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialQcAgentLog
 * 
 * @property int $qc_agent_log_id
 * @property string $qc_user
 * @property string $qc_user_group
 * @property string $qc_user_ip
 * @property string $lead_user
 * @property string $web_server_ip
 * @property Carbon $view_datetime
 * @property Carbon|null $save_datetime
 * @property int $view_epoch
 * @property int|null $save_epoch
 * @property int|null $elapsed_seconds
 * @property int $lead_id
 * @property int $list_id
 * @property string $campaign_id
 * @property string|null $old_status
 * @property string|null $new_status
 * @property string|null $details
 * @property string $processed
 *
 * @package App\Models
 */
class VicidialQcAgentLog extends Model
{
	protected $table = 'vicidial_qc_agent_log';
	protected $primaryKey = 'qc_agent_log_id';
	public $timestamps = false;

	protected $casts = [
		'view_epoch' => 'int',
		'save_epoch' => 'int',
		'elapsed_seconds' => 'int',
		'lead_id' => 'int',
		'list_id' => 'int'
	];

	protected $dates = [
		'view_datetime',
		'save_datetime'
	];

	protected $fillable = [
		'qc_user',
		'qc_user_group',
		'qc_user_ip',
		'lead_user',
		'web_server_ip',
		'view_datetime',
		'save_datetime',
		'view_epoch',
		'save_epoch',
		'elapsed_seconds',
		'lead_id',
		'list_id',
		'campaign_id',
		'old_status',
		'new_status',
		'details',
		'processed'
	];
}
