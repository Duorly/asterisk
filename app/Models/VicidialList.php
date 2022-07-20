<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialList
 *
 * @property int $list_id
 * @property string|null $list_name
 * @property string|null $campaign_id
 * @property string|null $active
 * @property string|null $list_description
 * @property Carbon|null $list_changedate
 * @property Carbon|null $list_lastcalldate
 * @property string|null $reset_time
 * @property string|null $agent_script_override
 * @property string|null $campaign_cid_override
 * @property string|null $am_message_exten_override
 * @property string|null $drop_inbound_group_override
 * @property string|null $xferconf_a_number
 * @property string|null $xferconf_b_number
 * @property string|null $xferconf_c_number
 * @property string|null $xferconf_d_number
 * @property string|null $xferconf_e_number
 * @property string|null $web_form_address
 * @property string|null $web_form_address_two
 * @property string|null $time_zone_setting
 * @property string|null $inventory_report
 * @property Carbon|null $expiration_date
 * @property string|null $na_call_url
 * @property string $local_call_time
 * @property string|null $web_form_address_three
 * @property string|null $status_group_id
 * @property int|null $user_new_lead_limit
 * @property string|null $inbound_list_script_override
 * @property string|null $default_xfer_group
 * @property int|null $daily_reset_limit
 * @property int|null $resets_today
 * @property int|null $auto_active_list_rank
 * @property int|null $cache_count
 * @property int|null $cache_count_new
 * @property int|null $cache_count_dialable_new
 * @property Carbon|null $cache_date
 * @property string|null $inbound_drop_voicemail
 * @property string|null $inbound_after_hours_voicemail
 * @property string|null $qc_scorecard_id
 * @property string|null $qc_statuses_id
 * @property string|null $qc_web_form_address
 *
 * @package App\Models
 */
class VicidialList extends Model
{
	protected $table = 'vicidial_list';
	protected $primaryKey = 'list_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'list_id' => 'int',
		'user_new_lead_limit' => 'int',
		'daily_reset_limit' => 'int',
		'resets_today' => 'int',
		'auto_active_list_rank' => 'int',
		'cache_count' => 'int',
		'cache_count_new' => 'int',
		'cache_count_dialable_new' => 'int'
	];

	protected $dates = [
		'list_changedate',
		'list_lastcalldate',
		'expiration_date',
		'cache_date'
	];

	protected $fillable = [
		'list_name',
		'campaign_id',
		'active',
		'list_description',
		'list_changedate',
		'list_lastcalldate',
		'reset_time',
		'agent_script_override',
		'campaign_cid_override',
		'am_message_exten_override',
		'drop_inbound_group_override',
		'xferconf_a_number',
		'xferconf_b_number',
		'xferconf_c_number',
		'xferconf_d_number',
		'xferconf_e_number',
		'web_form_address',
		'web_form_address_two',
		'time_zone_setting',
		'inventory_report',
		'expiration_date',
		'na_call_url',
		'local_call_time',
		'web_form_address_three',
		'status_group_id',
		'user_new_lead_limit',
		'inbound_list_script_override',
		'default_xfer_group',
		'daily_reset_limit',
		'resets_today',
		'auto_active_list_rank',
		'cache_count',
		'cache_count_new',
		'cache_count_dialable_new',
		'cache_date',
		'inbound_drop_voicemail',
		'inbound_after_hours_voicemail',
		'qc_scorecard_id',
		'qc_statuses_id',
		'qc_web_form_address'
	];
}
