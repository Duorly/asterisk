<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialUserGroup
 * 
 * @property string $user_group
 * @property string $group_name
 * @property string|null $allowed_campaigns
 * @property string|null $qc_allowed_campaigns
 * @property string|null $qc_allowed_inbound_groups
 * @property string|null $group_shifts
 * @property string|null $forced_timeclock_login
 * @property string|null $shift_enforcement
 * @property string|null $agent_status_viewable_groups
 * @property string|null $agent_status_view_time
 * @property string|null $agent_call_log_view
 * @property string|null $agent_xfer_consultative
 * @property string|null $agent_xfer_dial_override
 * @property string|null $agent_xfer_vm_transfer
 * @property string|null $agent_xfer_blind_transfer
 * @property string|null $agent_xfer_dial_with_customer
 * @property string|null $agent_xfer_park_customer_dial
 * @property string|null $agent_fullscreen
 * @property string|null $allowed_reports
 * @property string|null $webphone_url_override
 * @property string|null $webphone_systemkey_override
 * @property string|null $webphone_dialpad_override
 * @property string|null $admin_viewable_groups
 * @property string|null $admin_viewable_call_times
 * @property string|null $allowed_custom_reports
 * @property string|null $agent_allowed_chat_groups
 * @property string|null $agent_xfer_park_3way
 * @property string|null $admin_ip_list
 * @property string|null $agent_ip_list
 * @property string|null $api_ip_list
 * @property string|null $webphone_layout
 *
 * @package App\Models
 */
class VicidialUserGroup extends Model
{
	protected $table = 'vicidial_user_groups';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'user_group',
		'group_name',
		'allowed_campaigns',
		'qc_allowed_campaigns',
		'qc_allowed_inbound_groups',
		'group_shifts',
		'forced_timeclock_login',
		'shift_enforcement',
		'agent_status_viewable_groups',
		'agent_status_view_time',
		'agent_call_log_view',
		'agent_xfer_consultative',
		'agent_xfer_dial_override',
		'agent_xfer_vm_transfer',
		'agent_xfer_blind_transfer',
		'agent_xfer_dial_with_customer',
		'agent_xfer_park_customer_dial',
		'agent_fullscreen',
		'allowed_reports',
		'webphone_url_override',
		'webphone_systemkey_override',
		'webphone_dialpad_override',
		'admin_viewable_groups',
		'admin_viewable_call_times',
		'allowed_custom_reports',
		'agent_allowed_chat_groups',
		'agent_xfer_park_3way',
		'admin_ip_list',
		'agent_ip_list',
		'api_ip_list',
		'webphone_layout'
	];
}
