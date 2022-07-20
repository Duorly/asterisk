<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCampaign
 * 
 * @property string $campaign_id
 * @property string|null $campaign_name
 * @property string|null $active
 * @property string|null $dial_status_a
 * @property string|null $dial_status_b
 * @property string|null $dial_status_c
 * @property string|null $dial_status_d
 * @property string|null $dial_status_e
 * @property string|null $lead_order
 * @property string|null $park_ext
 * @property string|null $park_file_name
 * @property string|null $web_form_address
 * @property string|null $allow_closers
 * @property int|null $hopper_level
 * @property string|null $auto_dial_level
 * @property string|null $next_agent_call
 * @property string|null $local_call_time
 * @property string|null $voicemail_ext
 * @property int|null $dial_timeout
 * @property string|null $dial_prefix
 * @property string|null $campaign_cid
 * @property string|null $campaign_vdad_exten
 * @property string|null $campaign_rec_exten
 * @property string|null $campaign_recording
 * @property string|null $campaign_rec_filename
 * @property string|null $campaign_script
 * @property string|null $get_call_launch
 * @property string|null $am_message_exten
 * @property string|null $amd_send_to_vmx
 * @property string|null $xferconf_a_dtmf
 * @property string|null $xferconf_a_number
 * @property string|null $xferconf_b_dtmf
 * @property string|null $xferconf_b_number
 * @property string|null $alt_number_dialing
 * @property string|null $scheduled_callbacks
 * @property string|null $lead_filter_id
 * @property int|null $drop_call_seconds
 * @property string|null $drop_action
 * @property string|null $safe_harbor_exten
 * @property string|null $display_dialable_count
 * @property int|null $wrapup_seconds
 * @property string|null $wrapup_message
 * @property string|null $closer_campaigns
 * @property string|null $use_internal_dnc
 * @property int|null $allcalls_delay
 * @property string|null $omit_phone_code
 * @property string|null $dial_method
 * @property string|null $available_only_ratio_tally
 * @property string|null $adaptive_dropped_percentage
 * @property string|null $adaptive_maximum_level
 * @property string|null $adaptive_latest_server_time
 * @property string|null $adaptive_intensity
 * @property int|null $adaptive_dl_diff_target
 * @property string|null $concurrent_transfers
 * @property string|null $auto_alt_dial
 * @property string|null $auto_alt_dial_statuses
 * @property string|null $agent_pause_codes_active
 * @property string|null $campaign_description
 * @property Carbon|null $campaign_changedate
 * @property string|null $campaign_stats_refresh
 * @property Carbon|null $campaign_logindate
 * @property string|null $dial_statuses
 * @property string|null $disable_alter_custdata
 * @property string|null $no_hopper_leads_logins
 * @property string|null $list_order_mix
 * @property string|null $campaign_allow_inbound
 * @property int|null $manual_dial_list_id
 * @property string|null $default_xfer_group
 * @property string|null $xfer_groups
 * @property int|null $queue_priority
 * @property string|null $drop_inbound_group
 * @property string|null $qc_enabled
 * @property string|null $qc_statuses
 * @property string|null $qc_lists
 * @property string|null $qc_shift_id
 * @property string|null $qc_get_record_launch
 * @property string|null $qc_show_recording
 * @property string|null $qc_web_form_address
 * @property string|null $qc_script
 * @property string|null $survey_first_audio_file
 * @property string|null $survey_dtmf_digits
 * @property string|null $survey_ni_digit
 * @property string|null $survey_opt_in_audio_file
 * @property string|null $survey_ni_audio_file
 * @property string|null $survey_method
 * @property string|null $survey_no_response_action
 * @property string|null $survey_ni_status
 * @property string|null $survey_response_digit_map
 * @property string|null $survey_xfer_exten
 * @property string|null $survey_camp_record_dir
 * @property string|null $disable_alter_custphone
 * @property string|null $display_queue_count
 * @property string|null $manual_dial_filter
 * @property string|null $agent_clipboard_copy
 * @property string|null $agent_extended_alt_dial
 * @property string|null $use_campaign_dnc
 * @property string|null $three_way_call_cid
 * @property string|null $three_way_dial_prefix
 * @property string $web_form_target
 * @property string|null $vtiger_search_category
 * @property string|null $vtiger_create_call_record
 * @property string|null $vtiger_create_lead_record
 * @property string|null $vtiger_screen_login
 * @property string|null $cpd_amd_action
 * @property string|null $agent_allow_group_alias
 * @property string|null $default_group_alias
 * @property string|null $vtiger_search_dead
 * @property string|null $vtiger_status_call
 * @property string|null $survey_third_digit
 * @property string|null $survey_third_audio_file
 * @property string|null $survey_third_status
 * @property string|null $survey_third_exten
 * @property string|null $survey_fourth_digit
 * @property string|null $survey_fourth_audio_file
 * @property string|null $survey_fourth_status
 * @property string|null $survey_fourth_exten
 * @property string|null $drop_lockout_time
 * @property string|null $quick_transfer_button
 * @property string|null $prepopulate_transfer_preset
 * @property string|null $drop_rate_group
 * @property string|null $view_calls_in_queue
 * @property string|null $view_calls_in_queue_launch
 * @property string|null $grab_calls_in_queue
 * @property string|null $call_requeue_button
 * @property string|null $pause_after_each_call
 * @property string|null $no_hopper_dialing
 * @property string|null $agent_dial_owner_only
 * @property string|null $agent_display_dialable_leads
 * @property string|null $web_form_address_two
 * @property string|null $waitforsilence_options
 * @property string|null $agent_select_territories
 * @property Carbon|null $campaign_calldate
 * @property string|null $crm_popup_login
 * @property string|null $crm_login_address
 * @property string|null $timer_action
 * @property string|null $timer_action_message
 * @property int|null $timer_action_seconds
 * @property string|null $start_call_url
 * @property string|null $dispo_call_url
 * @property string|null $xferconf_c_number
 * @property string|null $xferconf_d_number
 * @property string|null $xferconf_e_number
 * @property string|null $use_custom_cid
 * @property string|null $scheduled_callbacks_alert
 * @property string|null $queuemetrics_callstatus_override
 * @property string|null $extension_appended_cidname
 * @property string|null $scheduled_callbacks_count
 * @property string|null $manual_dial_override
 * @property string|null $blind_monitor_warning
 * @property string|null $blind_monitor_message
 * @property string|null $blind_monitor_filename
 * @property string|null $inbound_queue_no_dial
 * @property string|null $timer_action_destination
 * @property string|null $enable_xfer_presets
 * @property string|null $hide_xfer_number_to_dial
 * @property string|null $manual_dial_prefix
 * @property string|null $customer_3way_hangup_logging
 * @property int|null $customer_3way_hangup_seconds
 * @property string|null $customer_3way_hangup_action
 * @property string|null $ivr_park_call
 * @property string|null $ivr_park_call_agi
 * @property string|null $manual_preview_dial
 * @property string|null $realtime_agent_time_stats
 * @property string|null $use_auto_hopper
 * @property string|null $auto_hopper_multi
 * @property int|null $auto_hopper_level
 * @property string|null $auto_trim_hopper
 * @property string|null $api_manual_dial
 * @property string|null $manual_dial_call_time_check
 * @property string|null $display_leads_count
 * @property string|null $lead_order_randomize
 * @property string|null $lead_order_secondary
 * @property string|null $per_call_notes
 * @property string|null $my_callback_option
 * @property string|null $agent_lead_search
 * @property string|null $agent_lead_search_method
 * @property string|null $queuemetrics_phone_environment
 * @property string|null $auto_pause_precall
 * @property string|null $auto_pause_precall_code
 * @property string|null $auto_resume_precall
 * @property string|null $manual_dial_cid
 * @property string|null $post_phone_time_diff_alert
 * @property string|null $custom_3way_button_transfer
 * @property string|null $available_only_tally_threshold
 * @property int|null $available_only_tally_threshold_agents
 * @property string|null $dial_level_threshold
 * @property int|null $dial_level_threshold_agents
 * @property string|null $safe_harbor_audio
 * @property string|null $safe_harbor_menu_id
 * @property string|null $survey_menu_id
 * @property int|null $callback_days_limit
 * @property string|null $dl_diff_target_method
 * @property string|null $disable_dispo_screen
 * @property string|null $disable_dispo_status
 * @property string|null $screen_labels
 * @property string|null $status_display_fields
 * @property string|null $na_call_url
 * @property string|null $survey_recording
 * @property string|null $pllb_grouping
 * @property int|null $pllb_grouping_limit
 * @property int|null $call_count_limit
 * @property int|null $call_count_target
 * @property int|null $callback_hours_block
 * @property string|null $callback_list_calltime
 * @property string|null $user_group
 * @property string|null $hopper_vlc_dup_check
 * @property string|null $in_group_dial
 * @property string|null $in_group_dial_select
 * @property string|null $safe_harbor_audio_field
 * @property string|null $pause_after_next_call
 * @property string|null $owner_populate
 * @property string|null $use_other_campaign_dnc
 * @property string|null $allow_emails
 * @property string|null $amd_inbound_group
 * @property string|null $amd_callmenu
 * @property int|null $survey_wait_sec
 * @property string|null $manual_dial_lead_id
 * @property int|null $dead_max
 * @property string|null $dead_max_dispo
 * @property int|null $dispo_max
 * @property string|null $dispo_max_dispo
 * @property int|null $pause_max
 * @property int|null $max_inbound_calls
 * @property string|null $manual_dial_search_checkbox
 * @property string|null $hide_call_log_info
 * @property int|null $timer_alt_seconds
 * @property string|null $wrapup_bypass
 * @property string|null $wrapup_after_hotkey
 * @property int|null $callback_active_limit
 * @property string|null $callback_active_limit_override
 * @property string|null $allow_chats
 * @property string|null $comments_all_tabs
 * @property string|null $comments_dispo_screen
 * @property string|null $comments_callback_screen
 * @property string|null $qc_comment_history
 * @property string|null $show_previous_callback
 * @property string|null $clear_script
 * @property string|null $cpd_unknown_action
 * @property string|null $manual_dial_search_filter
 * @property string|null $web_form_address_three
 * @property string|null $manual_dial_override_field
 * @property string|null $status_display_ingroup
 * @property int|null $customer_gone_seconds
 * @property string|null $agent_display_fields
 * @property string|null $am_message_wildcards
 * @property string|null $manual_dial_timeout
 * @property string|null $routing_initiated_recordings
 * @property string|null $manual_dial_hopper_check
 * @property int|null $callback_useronly_move_minutes
 * @property string|null $ofcom_uk_drop_calc
 * @property int|null $manual_auto_next
 * @property string|null $manual_auto_show
 * @property string|null $allow_required_fields
 * @property string|null $dead_to_dispo
 * @property string|null $agent_xfer_validation
 * @property int|null $ready_max_logout
 * @property int|null $callback_display_days
 * @property string|null $three_way_record_stop
 * @property string|null $hangup_xfer_record_start
 * @property string|null $scheduled_callbacks_email_alert
 * @property string|null $max_inbound_calls_outcome
 * @property string|null $manual_auto_next_options
 * @property string|null $agent_screen_time_display
 * @property string|null $next_dial_my_callbacks
 * @property string|null $inbound_no_agents_no_dial_container
 * @property int|null $inbound_no_agents_no_dial_threshold
 * @property string|null $cid_group_id
 * @property string|null $pause_max_dispo
 * @property string|null $script_top_dispo
 * @property int|null $dead_trigger_seconds
 * @property string|null $dead_trigger_action
 * @property string|null $dead_trigger_repeat
 * @property string|null $dead_trigger_filename
 * @property string|null $dead_trigger_url
 * @property string|null $scheduled_callbacks_force_dial
 * @property string|null $scheduled_callbacks_auto_reschedule
 * @property string|null $scheduled_callbacks_timezones_container
 * @property string|null $three_way_volume_buttons
 * @property string|null $callback_dnc
 * @property string|null $manual_dial_validation
 * @property string|null $mute_recordings
 * @property string|null $auto_active_list_new
 * @property string|null $call_quota_lead_ranking
 * @property int|null $call_quota_process_running
 * @property Carbon|null $call_quota_last_run_date
 * @property string|null $sip_event_logging
 * @property string|null $campaign_script_two
 * @property string|null $leave_vm_no_dispo
 * @property string|null $leave_vm_message_group_id
 * @property string|null $dial_timeout_lead_container
 * @property string|null $amd_type
 * @property int|null $vmm_daily_limit
 * @property string|null $opensips_cid_name
 * @property string|null $amd_agent_route_options
 * @property string|null $browser_alert_sound
 * @property int|null $browser_alert_volume
 * @property string|null $three_way_record_stop_exception
 * @property string|null $pause_max_exceptions
 * @property string|null $hopper_drop_run_trigger
 * @property int|null $daily_call_count_limit
 * @property string|null $daily_limit_manual
 * @property string|null $transfer_button_launch
 * @property int|null $shared_dial_rank
 * @property string|null $agent_search_method
 * @property string|null $qc_scorecard_id
 * @property string|null $qc_statuses_id
 * @property string|null $clear_form
 * @property string|null $leave_3way_start_recording
 * @property string|null $leave_3way_start_recording_exception
 * @property string|null $calls_waiting_vl_one
 * @property string|null $calls_waiting_vl_two
 * @property string|null $calls_inqueue_count_one
 * @property string|null $calls_inqueue_count_two
 * @property int|null $in_man_dial_next_ready_seconds
 * @property string|null $in_man_dial_next_ready_seconds_override
 * @property string|null $transfer_no_dispo
 * @property string|null $call_limit_24hour_method
 * @property string|null $call_limit_24hour_scope
 * @property int|null $call_limit_24hour
 * @property string|null $call_limit_24hour_override
 * @property string|null $cid_group_id_two
 * @property int|null $incall_tally_threshold_seconds
 *
 * @package App\Models
 */
class VicidialCampaign extends Model
{
	protected $table = 'vicidial_campaigns';
	protected $primaryKey = 'campaign_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'hopper_level' => 'int',
		'dial_timeout' => 'int',
		'drop_call_seconds' => 'int',
		'wrapup_seconds' => 'int',
		'allcalls_delay' => 'int',
		'adaptive_dl_diff_target' => 'int',
		'manual_dial_list_id' => 'int',
		'queue_priority' => 'int',
		'timer_action_seconds' => 'int',
		'customer_3way_hangup_seconds' => 'int',
		'auto_hopper_level' => 'int',
		'available_only_tally_threshold_agents' => 'int',
		'dial_level_threshold_agents' => 'int',
		'callback_days_limit' => 'int',
		'pllb_grouping_limit' => 'int',
		'call_count_limit' => 'int',
		'call_count_target' => 'int',
		'callback_hours_block' => 'int',
		'survey_wait_sec' => 'int',
		'dead_max' => 'int',
		'dispo_max' => 'int',
		'pause_max' => 'int',
		'max_inbound_calls' => 'int',
		'timer_alt_seconds' => 'int',
		'callback_active_limit' => 'int',
		'customer_gone_seconds' => 'int',
		'callback_useronly_move_minutes' => 'int',
		'manual_auto_next' => 'int',
		'ready_max_logout' => 'int',
		'callback_display_days' => 'int',
		'inbound_no_agents_no_dial_threshold' => 'int',
		'dead_trigger_seconds' => 'int',
		'call_quota_process_running' => 'int',
		'vmm_daily_limit' => 'int',
		'browser_alert_volume' => 'int',
		'daily_call_count_limit' => 'int',
		'shared_dial_rank' => 'int',
		'in_man_dial_next_ready_seconds' => 'int',
		'call_limit_24hour' => 'int',
		'incall_tally_threshold_seconds' => 'int'
	];

	protected $dates = [
		'campaign_changedate',
		'campaign_logindate',
		'campaign_calldate',
		'call_quota_last_run_date'
	];

	protected $fillable = [
		'campaign_name',
		'active',
		'dial_status_a',
		'dial_status_b',
		'dial_status_c',
		'dial_status_d',
		'dial_status_e',
		'lead_order',
		'park_ext',
		'park_file_name',
		'web_form_address',
		'allow_closers',
		'hopper_level',
		'auto_dial_level',
		'next_agent_call',
		'local_call_time',
		'voicemail_ext',
		'dial_timeout',
		'dial_prefix',
		'campaign_cid',
		'campaign_vdad_exten',
		'campaign_rec_exten',
		'campaign_recording',
		'campaign_rec_filename',
		'campaign_script',
		'get_call_launch',
		'am_message_exten',
		'amd_send_to_vmx',
		'xferconf_a_dtmf',
		'xferconf_a_number',
		'xferconf_b_dtmf',
		'xferconf_b_number',
		'alt_number_dialing',
		'scheduled_callbacks',
		'lead_filter_id',
		'drop_call_seconds',
		'drop_action',
		'safe_harbor_exten',
		'display_dialable_count',
		'wrapup_seconds',
		'wrapup_message',
		'closer_campaigns',
		'use_internal_dnc',
		'allcalls_delay',
		'omit_phone_code',
		'dial_method',
		'available_only_ratio_tally',
		'adaptive_dropped_percentage',
		'adaptive_maximum_level',
		'adaptive_latest_server_time',
		'adaptive_intensity',
		'adaptive_dl_diff_target',
		'concurrent_transfers',
		'auto_alt_dial',
		'auto_alt_dial_statuses',
		'agent_pause_codes_active',
		'campaign_description',
		'campaign_changedate',
		'campaign_stats_refresh',
		'campaign_logindate',
		'dial_statuses',
		'disable_alter_custdata',
		'no_hopper_leads_logins',
		'list_order_mix',
		'campaign_allow_inbound',
		'manual_dial_list_id',
		'default_xfer_group',
		'xfer_groups',
		'queue_priority',
		'drop_inbound_group',
		'qc_enabled',
		'qc_statuses',
		'qc_lists',
		'qc_shift_id',
		'qc_get_record_launch',
		'qc_show_recording',
		'qc_web_form_address',
		'qc_script',
		'survey_first_audio_file',
		'survey_dtmf_digits',
		'survey_ni_digit',
		'survey_opt_in_audio_file',
		'survey_ni_audio_file',
		'survey_method',
		'survey_no_response_action',
		'survey_ni_status',
		'survey_response_digit_map',
		'survey_xfer_exten',
		'survey_camp_record_dir',
		'disable_alter_custphone',
		'display_queue_count',
		'manual_dial_filter',
		'agent_clipboard_copy',
		'agent_extended_alt_dial',
		'use_campaign_dnc',
		'three_way_call_cid',
		'three_way_dial_prefix',
		'web_form_target',
		'vtiger_search_category',
		'vtiger_create_call_record',
		'vtiger_create_lead_record',
		'vtiger_screen_login',
		'cpd_amd_action',
		'agent_allow_group_alias',
		'default_group_alias',
		'vtiger_search_dead',
		'vtiger_status_call',
		'survey_third_digit',
		'survey_third_audio_file',
		'survey_third_status',
		'survey_third_exten',
		'survey_fourth_digit',
		'survey_fourth_audio_file',
		'survey_fourth_status',
		'survey_fourth_exten',
		'drop_lockout_time',
		'quick_transfer_button',
		'prepopulate_transfer_preset',
		'drop_rate_group',
		'view_calls_in_queue',
		'view_calls_in_queue_launch',
		'grab_calls_in_queue',
		'call_requeue_button',
		'pause_after_each_call',
		'no_hopper_dialing',
		'agent_dial_owner_only',
		'agent_display_dialable_leads',
		'web_form_address_two',
		'waitforsilence_options',
		'agent_select_territories',
		'campaign_calldate',
		'crm_popup_login',
		'crm_login_address',
		'timer_action',
		'timer_action_message',
		'timer_action_seconds',
		'start_call_url',
		'dispo_call_url',
		'xferconf_c_number',
		'xferconf_d_number',
		'xferconf_e_number',
		'use_custom_cid',
		'scheduled_callbacks_alert',
		'queuemetrics_callstatus_override',
		'extension_appended_cidname',
		'scheduled_callbacks_count',
		'manual_dial_override',
		'blind_monitor_warning',
		'blind_monitor_message',
		'blind_monitor_filename',
		'inbound_queue_no_dial',
		'timer_action_destination',
		'enable_xfer_presets',
		'hide_xfer_number_to_dial',
		'manual_dial_prefix',
		'customer_3way_hangup_logging',
		'customer_3way_hangup_seconds',
		'customer_3way_hangup_action',
		'ivr_park_call',
		'ivr_park_call_agi',
		'manual_preview_dial',
		'realtime_agent_time_stats',
		'use_auto_hopper',
		'auto_hopper_multi',
		'auto_hopper_level',
		'auto_trim_hopper',
		'api_manual_dial',
		'manual_dial_call_time_check',
		'display_leads_count',
		'lead_order_randomize',
		'lead_order_secondary',
		'per_call_notes',
		'my_callback_option',
		'agent_lead_search',
		'agent_lead_search_method',
		'queuemetrics_phone_environment',
		'auto_pause_precall',
		'auto_pause_precall_code',
		'auto_resume_precall',
		'manual_dial_cid',
		'post_phone_time_diff_alert',
		'custom_3way_button_transfer',
		'available_only_tally_threshold',
		'available_only_tally_threshold_agents',
		'dial_level_threshold',
		'dial_level_threshold_agents',
		'safe_harbor_audio',
		'safe_harbor_menu_id',
		'survey_menu_id',
		'callback_days_limit',
		'dl_diff_target_method',
		'disable_dispo_screen',
		'disable_dispo_status',
		'screen_labels',
		'status_display_fields',
		'na_call_url',
		'survey_recording',
		'pllb_grouping',
		'pllb_grouping_limit',
		'call_count_limit',
		'call_count_target',
		'callback_hours_block',
		'callback_list_calltime',
		'user_group',
		'hopper_vlc_dup_check',
		'in_group_dial',
		'in_group_dial_select',
		'safe_harbor_audio_field',
		'pause_after_next_call',
		'owner_populate',
		'use_other_campaign_dnc',
		'allow_emails',
		'amd_inbound_group',
		'amd_callmenu',
		'survey_wait_sec',
		'manual_dial_lead_id',
		'dead_max',
		'dead_max_dispo',
		'dispo_max',
		'dispo_max_dispo',
		'pause_max',
		'max_inbound_calls',
		'manual_dial_search_checkbox',
		'hide_call_log_info',
		'timer_alt_seconds',
		'wrapup_bypass',
		'wrapup_after_hotkey',
		'callback_active_limit',
		'callback_active_limit_override',
		'allow_chats',
		'comments_all_tabs',
		'comments_dispo_screen',
		'comments_callback_screen',
		'qc_comment_history',
		'show_previous_callback',
		'clear_script',
		'cpd_unknown_action',
		'manual_dial_search_filter',
		'web_form_address_three',
		'manual_dial_override_field',
		'status_display_ingroup',
		'customer_gone_seconds',
		'agent_display_fields',
		'am_message_wildcards',
		'manual_dial_timeout',
		'routing_initiated_recordings',
		'manual_dial_hopper_check',
		'callback_useronly_move_minutes',
		'ofcom_uk_drop_calc',
		'manual_auto_next',
		'manual_auto_show',
		'allow_required_fields',
		'dead_to_dispo',
		'agent_xfer_validation',
		'ready_max_logout',
		'callback_display_days',
		'three_way_record_stop',
		'hangup_xfer_record_start',
		'scheduled_callbacks_email_alert',
		'max_inbound_calls_outcome',
		'manual_auto_next_options',
		'agent_screen_time_display',
		'next_dial_my_callbacks',
		'inbound_no_agents_no_dial_container',
		'inbound_no_agents_no_dial_threshold',
		'cid_group_id',
		'pause_max_dispo',
		'script_top_dispo',
		'dead_trigger_seconds',
		'dead_trigger_action',
		'dead_trigger_repeat',
		'dead_trigger_filename',
		'dead_trigger_url',
		'scheduled_callbacks_force_dial',
		'scheduled_callbacks_auto_reschedule',
		'scheduled_callbacks_timezones_container',
		'three_way_volume_buttons',
		'callback_dnc',
		'manual_dial_validation',
		'mute_recordings',
		'auto_active_list_new',
		'call_quota_lead_ranking',
		'call_quota_process_running',
		'call_quota_last_run_date',
		'sip_event_logging',
		'campaign_script_two',
		'leave_vm_no_dispo',
		'leave_vm_message_group_id',
		'dial_timeout_lead_container',
		'amd_type',
		'vmm_daily_limit',
		'opensips_cid_name',
		'amd_agent_route_options',
		'browser_alert_sound',
		'browser_alert_volume',
		'three_way_record_stop_exception',
		'pause_max_exceptions',
		'hopper_drop_run_trigger',
		'daily_call_count_limit',
		'daily_limit_manual',
		'transfer_button_launch',
		'shared_dial_rank',
		'agent_search_method',
		'qc_scorecard_id',
		'qc_statuses_id',
		'clear_form',
		'leave_3way_start_recording',
		'leave_3way_start_recording_exception',
		'calls_waiting_vl_one',
		'calls_waiting_vl_two',
		'calls_inqueue_count_one',
		'calls_inqueue_count_two',
		'in_man_dial_next_ready_seconds',
		'in_man_dial_next_ready_seconds_override',
		'transfer_no_dispo',
		'call_limit_24hour_method',
		'call_limit_24hour_scope',
		'call_limit_24hour',
		'call_limit_24hour_override',
		'cid_group_id_two',
		'incall_tally_threshold_seconds'
	];
}
