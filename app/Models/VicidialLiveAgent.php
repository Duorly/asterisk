<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLiveAgent
 * 
 * @property int $live_agent_id
 * @property string|null $user
 * @property string $server_ip
 * @property string|null $conf_exten
 * @property string|null $extension
 * @property string|null $status
 * @property int $lead_id
 * @property string|null $campaign_id
 * @property string|null $uniqueid
 * @property string|null $callerid
 * @property string|null $channel
 * @property int|null $random_id
 * @property Carbon|null $last_call_time
 * @property Carbon $last_update_time
 * @property Carbon|null $last_call_finish
 * @property string|null $closer_campaigns
 * @property string|null $call_server_ip
 * @property int|null $user_level
 * @property string|null $comments
 * @property bool|null $campaign_weight
 * @property int|null $calls_today
 * @property string|null $external_hangup
 * @property string|null $external_status
 * @property string|null $external_pause
 * @property string|null $external_dial
 * @property string|null $external_ingroups
 * @property string|null $external_blended
 * @property string|null $external_igb_set_user
 * @property string|null $external_update_fields
 * @property string|null $external_update_fields_data
 * @property string|null $external_timer_action
 * @property string|null $external_timer_action_message
 * @property int|null $external_timer_action_seconds
 * @property int|null $agent_log_id
 * @property Carbon|null $last_state_change
 * @property string|null $agent_territories
 * @property string|null $outbound_autodial
 * @property string|null $manager_ingroup_set
 * @property string|null $ra_user
 * @property string|null $ra_extension
 * @property string|null $external_dtmf
 * @property string|null $external_transferconf
 * @property string|null $external_park
 * @property string|null $external_timer_action_destination
 * @property string|null $on_hook_agent
 * @property int|null $on_hook_ring_time
 * @property string|null $ring_callerid
 * @property Carbon|null $last_inbound_call_time
 * @property Carbon|null $last_inbound_call_finish
 * @property int|null $campaign_grade
 * @property string|null $external_recording
 * @property string|null $external_pause_code
 * @property string|null $pause_code
 * @property int|null $preview_lead_id
 * @property int|null $external_lead_id
 * @property Carbon|null $last_inbound_call_time_filtered
 * @property Carbon|null $last_inbound_call_finish_filtered
 * @property string|null $dial_campaign_id
 *
 * @package App\Models
 */
class VicidialLiveAgent extends Model
{
	protected $table = 'vicidial_live_agents';
	protected $primaryKey = 'live_agent_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'random_id' => 'int',
		'user_level' => 'int',
		'campaign_weight' => 'bool',
		'calls_today' => 'int',
		'external_timer_action_seconds' => 'int',
		'agent_log_id' => 'int',
		'on_hook_ring_time' => 'int',
		'campaign_grade' => 'int',
		'preview_lead_id' => 'int',
		'external_lead_id' => 'int'
	];

	protected $dates = [
		'last_call_time',
		'last_update_time',
		'last_call_finish',
		'last_state_change',
		'last_inbound_call_time',
		'last_inbound_call_finish',
		'last_inbound_call_time_filtered',
		'last_inbound_call_finish_filtered'
	];

	protected $fillable = [
		'user',
		'server_ip',
		'conf_exten',
		'extension',
		'status',
		'lead_id',
		'campaign_id',
		'uniqueid',
		'callerid',
		'channel',
		'random_id',
		'last_call_time',
		'last_update_time',
		'last_call_finish',
		'closer_campaigns',
		'call_server_ip',
		'user_level',
		'comments',
		'campaign_weight',
		'calls_today',
		'external_hangup',
		'external_status',
		'external_pause',
		'external_dial',
		'external_ingroups',
		'external_blended',
		'external_igb_set_user',
		'external_update_fields',
		'external_update_fields_data',
		'external_timer_action',
		'external_timer_action_message',
		'external_timer_action_seconds',
		'agent_log_id',
		'last_state_change',
		'agent_territories',
		'outbound_autodial',
		'manager_ingroup_set',
		'ra_user',
		'ra_extension',
		'external_dtmf',
		'external_transferconf',
		'external_park',
		'external_timer_action_destination',
		'on_hook_agent',
		'on_hook_ring_time',
		'ring_callerid',
		'last_inbound_call_time',
		'last_inbound_call_finish',
		'campaign_grade',
		'external_recording',
		'external_pause_code',
		'pause_code',
		'preview_lead_id',
		'external_lead_id',
		'last_inbound_call_time_filtered',
		'last_inbound_call_finish_filtered',
		'dial_campaign_id'
	];
}
