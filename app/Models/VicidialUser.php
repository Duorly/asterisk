<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class VicidialUser
 *
 * @property int $user_id
 * @property string $user
 * @property string $pass
 * @property string|null $full_name
 * @property int|null $user_level
 * @property string|null $user_group
 * @property string|null $phone_login
 * @property string|null $phone_pass
 * @property string|null $delete_users
 * @property string|null $delete_user_groups
 * @property string|null $delete_lists
 * @property string|null $delete_campaigns
 * @property string|null $delete_ingroups
 * @property string|null $delete_remote_agents
 * @property string|null $load_leads
 * @property string|null $campaign_detail
 * @property string|null $ast_admin_access
 * @property string|null $ast_delete_phones
 * @property string|null $delete_scripts
 * @property string|null $modify_leads
 * @property string|null $hotkeys_active
 * @property string|null $change_agent_campaign
 * @property string|null $agent_choose_ingroups
 * @property string|null $closer_campaigns
 * @property string|null $scheduled_callbacks
 * @property string|null $agentonly_callbacks
 * @property string|null $agentcall_manual
 * @property string|null $vicidial_recording
 * @property string|null $vicidial_transfers
 * @property string|null $delete_filters
 * @property string|null $alter_agent_interface_options
 * @property string|null $closer_default_blended
 * @property string|null $delete_call_times
 * @property string|null $modify_call_times
 * @property string|null $modify_users
 * @property string|null $modify_campaigns
 * @property string|null $modify_lists
 * @property string|null $modify_scripts
 * @property string|null $modify_filters
 * @property string|null $modify_ingroups
 * @property string|null $modify_usergroups
 * @property string|null $modify_remoteagents
 * @property string|null $modify_servers
 * @property string|null $view_reports
 * @property string|null $vicidial_recording_override
 * @property string|null $alter_custdata_override
 * @property string|null $qc_enabled
 * @property int|null $qc_user_level
 * @property string|null $qc_pass
 * @property string|null $qc_finish
 * @property string|null $qc_commit
 * @property string|null $add_timeclock_log
 * @property string|null $modify_timeclock_log
 * @property string|null $delete_timeclock_log
 * @property string|null $alter_custphone_override
 * @property string|null $vdc_agent_api_access
 * @property string|null $modify_inbound_dids
 * @property string|null $delete_inbound_dids
 * @property string|null $active
 * @property string|null $alert_enabled
 * @property string|null $download_lists
 * @property string|null $agent_shift_enforcement_override
 * @property string|null $manager_shift_enforcement_override
 * @property string|null $shift_override_flag
 * @property string|null $export_reports
 * @property string|null $delete_from_dnc
 * @property string|null $email
 * @property string|null $user_code
 * @property string|null $territory
 * @property string|null $allow_alerts
 * @property string|null $agent_choose_territories
 * @property string|null $custom_one
 * @property string|null $custom_two
 * @property string|null $custom_three
 * @property string|null $custom_four
 * @property string|null $custom_five
 * @property string|null $voicemail_id
 * @property string|null $agent_call_log_view_override
 * @property string|null $callcard_admin
 * @property string|null $agent_choose_blended
 * @property string|null $realtime_block_user_info
 * @property string|null $custom_fields_modify
 * @property string|null $force_change_password
 * @property string|null $agent_lead_search_override
 * @property string|null $modify_shifts
 * @property string|null $modify_phones
 * @property string|null $modify_carriers
 * @property string|null $modify_labels
 * @property string|null $modify_statuses
 * @property string|null $modify_voicemail
 * @property string|null $modify_audiostore
 * @property string|null $modify_moh
 * @property string|null $modify_tts
 * @property string|null $preset_contact_search
 * @property string|null $modify_contacts
 * @property string|null $modify_same_user_level
 * @property string|null $admin_hide_lead_data
 * @property string|null $admin_hide_phone_data
 * @property string|null $agentcall_email
 * @property string|null $modify_email_accounts
 * @property int|null $failed_login_count
 * @property Carbon|null $last_login_date
 * @property string|null $last_ip
 * @property string|null $pass_hash
 * @property string|null $alter_admin_interface_options
 * @property int|null $max_inbound_calls
 * @property string|null $modify_custom_dialplans
 * @property int|null $wrapup_seconds_override
 * @property string|null $modify_languages
 * @property string|null $selected_language
 * @property string|null $user_choose_language
 * @property string|null $ignore_group_on_search
 * @property string|null $api_list_restrict
 * @property string|null $api_allowed_functions
 * @property string|null $lead_filter_id
 * @property string|null $admin_cf_show_hidden
 * @property string|null $agentcall_chat
 * @property string|null $user_hide_realtime
 * @property string|null $access_recordings
 * @property string|null $modify_colors
 * @property string|null $user_nickname
 * @property int|null $user_new_lead_limit
 * @property string|null $api_only_user
 * @property string|null $modify_auto_reports
 * @property string|null $modify_ip_lists
 * @property string|null $ignore_ip_list
 * @property int|null $ready_max_logout
 * @property string|null $export_gdpr_leads
 * @property string|null $pause_code_approval
 * @property int|null $max_hopper_calls
 * @property int|null $max_hopper_calls_hour
 * @property string|null $mute_recordings
 * @property string|null $hide_call_log_info
 * @property string|null $next_dial_my_callbacks
 * @property string|null $user_admin_redirect_url
 * @property string|null $max_inbound_filter_enabled
 * @property string|null $max_inbound_filter_statuses
 * @property string|null $max_inbound_filter_ingroups
 * @property int|null $max_inbound_filter_min_sec
 * @property string|null $status_group_id
 * @property string|null $mobile_number
 * @property string|null $two_factor_override
 * @property string|null $manual_dial_filter
 *
 * @package App\Models
 */
class VicidialUser extends Model
{

    use HasApiTokens, HasFactory, Notifiable;

	protected $table = 'vicidial_users';
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	protected $casts = [
		'user_level' => 'int',
		'qc_user_level' => 'int',
		'failed_login_count' => 'int',
		'max_inbound_calls' => 'int',
		'wrapup_seconds_override' => 'int',
		'user_new_lead_limit' => 'int',
		'ready_max_logout' => 'int',
		'max_hopper_calls' => 'int',
		'max_hopper_calls_hour' => 'int',
		'max_inbound_filter_min_sec' => 'int'
	];

	protected $dates = [
		'last_login_date'
	];

	protected $hidden = [
		'force_change_password'
	];

	protected $fillable = [
		'user',
		'pass',
		'full_name',
		'user_level',
		'user_group',
		'phone_login',
		'phone_pass',
		'delete_users',
		'delete_user_groups',
		'delete_lists',
		'delete_campaigns',
		'delete_ingroups',
		'delete_remote_agents',
		'load_leads',
		'campaign_detail',
		'ast_admin_access',
		'ast_delete_phones',
		'delete_scripts',
		'modify_leads',
		'hotkeys_active',
		'change_agent_campaign',
		'agent_choose_ingroups',
		'closer_campaigns',
		'scheduled_callbacks',
		'agentonly_callbacks',
		'agentcall_manual',
		'vicidial_recording',
		'vicidial_transfers',
		'delete_filters',
		'alter_agent_interface_options',
		'closer_default_blended',
		'delete_call_times',
		'modify_call_times',
		'modify_users',
		'modify_campaigns',
		'modify_lists',
		'modify_scripts',
		'modify_filters',
		'modify_ingroups',
		'modify_usergroups',
		'modify_remoteagents',
		'modify_servers',
		'view_reports',
		'vicidial_recording_override',
		'alter_custdata_override',
		'qc_enabled',
		'qc_user_level',
		'qc_pass',
		'qc_finish',
		'qc_commit',
		'add_timeclock_log',
		'modify_timeclock_log',
		'delete_timeclock_log',
		'alter_custphone_override',
		'vdc_agent_api_access',
		'modify_inbound_dids',
		'delete_inbound_dids',
		'active',
		'alert_enabled',
		'download_lists',
		'agent_shift_enforcement_override',
		'manager_shift_enforcement_override',
		'shift_override_flag',
		'export_reports',
		'delete_from_dnc',
		'email',
		'user_code',
		'territory',
		'allow_alerts',
		'agent_choose_territories',
		'custom_one',
		'custom_two',
		'custom_three',
		'custom_four',
		'custom_five',
		'voicemail_id',
		'agent_call_log_view_override',
		'callcard_admin',
		'agent_choose_blended',
		'realtime_block_user_info',
		'custom_fields_modify',
		'force_change_password',
		'agent_lead_search_override',
		'modify_shifts',
		'modify_phones',
		'modify_carriers',
		'modify_labels',
		'modify_statuses',
		'modify_voicemail',
		'modify_audiostore',
		'modify_moh',
		'modify_tts',
		'preset_contact_search',
		'modify_contacts',
		'modify_same_user_level',
		'admin_hide_lead_data',
		'admin_hide_phone_data',
		'agentcall_email',
		'modify_email_accounts',
		'failed_login_count',
		'last_login_date',
		'last_ip',
		'pass_hash',
		'alter_admin_interface_options',
		'max_inbound_calls',
		'modify_custom_dialplans',
		'wrapup_seconds_override',
		'modify_languages',
		'selected_language',
		'user_choose_language',
		'ignore_group_on_search',
		'api_list_restrict',
		'api_allowed_functions',
		'lead_filter_id',
		'admin_cf_show_hidden',
		'agentcall_chat',
		'user_hide_realtime',
		'access_recordings',
		'modify_colors',
		'user_nickname',
		'user_new_lead_limit',
		'api_only_user',
		'modify_auto_reports',
		'modify_ip_lists',
		'ignore_ip_list',
		'ready_max_logout',
		'export_gdpr_leads',
		'pause_code_approval',
		'max_hopper_calls',
		'max_hopper_calls_hour',
		'mute_recordings',
		'hide_call_log_info',
		'next_dial_my_callbacks',
		'user_admin_redirect_url',
		'max_inbound_filter_enabled',
		'max_inbound_filter_statuses',
		'max_inbound_filter_ingroups',
		'max_inbound_filter_min_sec',
		'status_group_id',
		'mobile_number',
		'two_factor_override',
		'manual_dial_filter'
	];
}
