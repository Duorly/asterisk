<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialInboundGroup
 * 
 * @property string $group_id
 * @property string|null $group_name
 * @property string|null $group_color
 * @property string|null $active
 * @property string|null $web_form_address
 * @property string|null $voicemail_ext
 * @property string|null $next_agent_call
 * @property string|null $fronter_display
 * @property string|null $ingroup_script
 * @property string|null $get_call_launch
 * @property string|null $xferconf_a_dtmf
 * @property string|null $xferconf_a_number
 * @property string|null $xferconf_b_dtmf
 * @property string|null $xferconf_b_number
 * @property int|null $drop_call_seconds
 * @property string|null $drop_action
 * @property string|null $drop_exten
 * @property string|null $call_time_id
 * @property string|null $after_hours_action
 * @property string|null $after_hours_message_filename
 * @property string|null $after_hours_exten
 * @property string|null $after_hours_voicemail
 * @property string|null $welcome_message_filename
 * @property string|null $moh_context
 * @property string|null $onhold_prompt_filename
 * @property int|null $prompt_interval
 * @property string|null $agent_alert_exten
 * @property int|null $agent_alert_delay
 * @property string|null $default_xfer_group
 * @property int|null $queue_priority
 * @property string|null $drop_inbound_group
 * @property string|null $ingroup_recording_override
 * @property string|null $ingroup_rec_filename
 * @property string|null $afterhours_xfer_group
 * @property string|null $qc_enabled
 * @property string|null $qc_statuses
 * @property string|null $qc_shift_id
 * @property string|null $qc_get_record_launch
 * @property string|null $qc_show_recording
 * @property string|null $qc_web_form_address
 * @property string|null $qc_script
 * @property string|null $play_place_in_line
 * @property string|null $play_estimate_hold_time
 * @property string|null $hold_time_option
 * @property int|null $hold_time_option_seconds
 * @property string|null $hold_time_option_exten
 * @property string|null $hold_time_option_voicemail
 * @property string|null $hold_time_option_xfer_group
 * @property string|null $hold_time_option_callback_filename
 * @property int|null $hold_time_option_callback_list_id
 * @property string|null $hold_recall_xfer_group
 * @property string|null $no_delay_call_route
 * @property string|null $play_welcome_message
 * @property int|null $answer_sec_pct_rt_stat_one
 * @property int|null $answer_sec_pct_rt_stat_two
 * @property string|null $default_group_alias
 * @property string|null $no_agent_no_queue
 * @property string|null $no_agent_action
 * @property string|null $no_agent_action_value
 * @property string|null $web_form_address_two
 * @property string|null $timer_action
 * @property string|null $timer_action_message
 * @property int|null $timer_action_seconds
 * @property string|null $start_call_url
 * @property string|null $dispo_call_url
 * @property string|null $xferconf_c_number
 * @property string|null $xferconf_d_number
 * @property string|null $xferconf_e_number
 * @property string|null $ignore_list_script_override
 * @property string|null $extension_appended_cidname
 * @property string|null $uniqueid_status_display
 * @property string|null $uniqueid_status_prefix
 * @property int|null $hold_time_option_minimum
 * @property string|null $hold_time_option_press_filename
 * @property string|null $hold_time_option_callmenu
 * @property string|null $hold_time_option_no_block
 * @property int|null $hold_time_option_prompt_seconds
 * @property string|null $onhold_prompt_no_block
 * @property int|null $onhold_prompt_seconds
 * @property string|null $hold_time_second_option
 * @property string|null $hold_time_third_option
 * @property string|null $wait_hold_option_priority
 * @property string|null $wait_time_option
 * @property string|null $wait_time_second_option
 * @property string|null $wait_time_third_option
 * @property int|null $wait_time_option_seconds
 * @property string|null $wait_time_option_exten
 * @property string|null $wait_time_option_voicemail
 * @property string|null $wait_time_option_xfer_group
 * @property string|null $wait_time_option_callmenu
 * @property string|null $wait_time_option_callback_filename
 * @property int|null $wait_time_option_callback_list_id
 * @property string|null $wait_time_option_press_filename
 * @property string|null $wait_time_option_no_block
 * @property int|null $wait_time_option_prompt_seconds
 * @property string|null $timer_action_destination
 * @property int|null $calculate_estimated_hold_seconds
 * @property string|null $add_lead_url
 * @property string|null $eht_minimum_prompt_filename
 * @property string|null $eht_minimum_prompt_no_block
 * @property int|null $eht_minimum_prompt_seconds
 * @property int|null $on_hook_ring_time
 * @property string|null $na_call_url
 * @property string|null $on_hook_cid
 * @property Carbon|null $group_calldate
 * @property string|null $action_xfer_cid
 * @property string|null $drop_callmenu
 * @property string|null $after_hours_callmenu
 * @property string|null $user_group
 * @property string|null $max_calls_method
 * @property int|null $max_calls_count
 * @property string|null $max_calls_action
 * @property string|null $dial_ingroup_cid
 * @property string|null $group_handling
 * @property string|null $web_form_address_three
 * @property string|null $populate_lead_ingroup
 * @property string|null $drop_lead_reset
 * @property string|null $after_hours_lead_reset
 * @property string|null $nanq_lead_reset
 * @property string|null $wait_time_lead_reset
 * @property string|null $hold_time_lead_reset
 * @property string|null $status_group_id
 * @property string|null $routing_initiated_recordings
 * @property string|null $on_hook_cid_number
 * @property string|null $customer_chat_screen_colors
 * @property string|null $customer_chat_survey_link
 * @property string|null $customer_chat_survey_text
 * @property string|null $populate_lead_province
 * @property string|null $areacode_filter
 * @property int|null $areacode_filter_seconds
 * @property string|null $areacode_filter_action
 * @property string|null $areacode_filter_action_value
 * @property string|null $populate_state_areacode
 * @property string|null $inbound_survey
 * @property string|null $inbound_survey_filename
 * @property string|null $inbound_survey_accept_digit
 * @property string|null $inbound_survey_question_filename
 * @property string|null $inbound_survey_callmenu
 * @property int|null $icbq_expiration_hours
 * @property string|null $closing_time_action
 * @property string|null $closing_time_now_trigger
 * @property string|null $closing_time_filename
 * @property string|null $closing_time_end_filename
 * @property string|null $closing_time_lead_reset
 * @property string|null $closing_time_option_exten
 * @property string|null $closing_time_option_callmenu
 * @property string|null $closing_time_option_voicemail
 * @property string|null $closing_time_option_xfer_group
 * @property int|null $closing_time_option_callback_list_id
 * @property string|null $add_lead_timezone
 * @property string|null $icbq_call_time_id
 * @property string|null $icbq_dial_filter
 * @property string|null $populate_lead_source
 * @property string|null $populate_lead_vendor
 * @property string|null $park_file_name
 * @property string|null $waiting_call_url_on
 * @property string|null $waiting_call_url_off
 * @property int|null $waiting_call_count
 * @property string|null $enter_ingroup_url
 * @property string|null $cid_cb_confirm_number
 * @property string|null $cid_cb_invalid_filter_phone_group
 * @property string|null $cid_cb_valid_length
 * @property string|null $cid_cb_valid_filename
 * @property string|null $cid_cb_confirmed_filename
 * @property string|null $cid_cb_enter_filename
 * @property string|null $cid_cb_you_entered_filename
 * @property string|null $cid_cb_press_to_confirm_filename
 * @property string|null $cid_cb_invalid_filename
 * @property string|null $cid_cb_reenter_filename
 * @property string|null $cid_cb_error_filename
 * @property string|null $place_in_line_caller_number_filename
 * @property string|null $place_in_line_you_next_filename
 * @property string|null $ingroup_script_two
 * @property string|null $browser_alert_sound
 * @property int|null $browser_alert_volume
 * @property string|null $answer_signal
 * @property int|null $no_agent_delay
 * @property string|null $agent_search_method
 * @property string|null $qc_scorecard_id
 * @property string|null $qc_statuses_id
 * @property string|null $populate_lead_comments
 * @property string|null $drop_call_seconds_override
 * @property string|null $populate_lead_owner
 * @property string|null $in_queue_nanque
 * @property string|null $in_queue_nanque_exceptions
 *
 * @package App\Models
 */
class VicidialInboundGroup extends Model
{
	protected $table = 'vicidial_inbound_groups';
	protected $primaryKey = 'group_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'drop_call_seconds' => 'int',
		'prompt_interval' => 'int',
		'agent_alert_delay' => 'int',
		'queue_priority' => 'int',
		'hold_time_option_seconds' => 'int',
		'hold_time_option_callback_list_id' => 'int',
		'answer_sec_pct_rt_stat_one' => 'int',
		'answer_sec_pct_rt_stat_two' => 'int',
		'timer_action_seconds' => 'int',
		'hold_time_option_minimum' => 'int',
		'hold_time_option_prompt_seconds' => 'int',
		'onhold_prompt_seconds' => 'int',
		'wait_time_option_seconds' => 'int',
		'wait_time_option_callback_list_id' => 'int',
		'wait_time_option_prompt_seconds' => 'int',
		'calculate_estimated_hold_seconds' => 'int',
		'eht_minimum_prompt_seconds' => 'int',
		'on_hook_ring_time' => 'int',
		'max_calls_count' => 'int',
		'areacode_filter_seconds' => 'int',
		'icbq_expiration_hours' => 'int',
		'closing_time_option_callback_list_id' => 'int',
		'waiting_call_count' => 'int',
		'browser_alert_volume' => 'int',
		'no_agent_delay' => 'int'
	];

	protected $dates = [
		'group_calldate'
	];

	protected $fillable = [
		'group_name',
		'group_color',
		'active',
		'web_form_address',
		'voicemail_ext',
		'next_agent_call',
		'fronter_display',
		'ingroup_script',
		'get_call_launch',
		'xferconf_a_dtmf',
		'xferconf_a_number',
		'xferconf_b_dtmf',
		'xferconf_b_number',
		'drop_call_seconds',
		'drop_action',
		'drop_exten',
		'call_time_id',
		'after_hours_action',
		'after_hours_message_filename',
		'after_hours_exten',
		'after_hours_voicemail',
		'welcome_message_filename',
		'moh_context',
		'onhold_prompt_filename',
		'prompt_interval',
		'agent_alert_exten',
		'agent_alert_delay',
		'default_xfer_group',
		'queue_priority',
		'drop_inbound_group',
		'ingroup_recording_override',
		'ingroup_rec_filename',
		'afterhours_xfer_group',
		'qc_enabled',
		'qc_statuses',
		'qc_shift_id',
		'qc_get_record_launch',
		'qc_show_recording',
		'qc_web_form_address',
		'qc_script',
		'play_place_in_line',
		'play_estimate_hold_time',
		'hold_time_option',
		'hold_time_option_seconds',
		'hold_time_option_exten',
		'hold_time_option_voicemail',
		'hold_time_option_xfer_group',
		'hold_time_option_callback_filename',
		'hold_time_option_callback_list_id',
		'hold_recall_xfer_group',
		'no_delay_call_route',
		'play_welcome_message',
		'answer_sec_pct_rt_stat_one',
		'answer_sec_pct_rt_stat_two',
		'default_group_alias',
		'no_agent_no_queue',
		'no_agent_action',
		'no_agent_action_value',
		'web_form_address_two',
		'timer_action',
		'timer_action_message',
		'timer_action_seconds',
		'start_call_url',
		'dispo_call_url',
		'xferconf_c_number',
		'xferconf_d_number',
		'xferconf_e_number',
		'ignore_list_script_override',
		'extension_appended_cidname',
		'uniqueid_status_display',
		'uniqueid_status_prefix',
		'hold_time_option_minimum',
		'hold_time_option_press_filename',
		'hold_time_option_callmenu',
		'hold_time_option_no_block',
		'hold_time_option_prompt_seconds',
		'onhold_prompt_no_block',
		'onhold_prompt_seconds',
		'hold_time_second_option',
		'hold_time_third_option',
		'wait_hold_option_priority',
		'wait_time_option',
		'wait_time_second_option',
		'wait_time_third_option',
		'wait_time_option_seconds',
		'wait_time_option_exten',
		'wait_time_option_voicemail',
		'wait_time_option_xfer_group',
		'wait_time_option_callmenu',
		'wait_time_option_callback_filename',
		'wait_time_option_callback_list_id',
		'wait_time_option_press_filename',
		'wait_time_option_no_block',
		'wait_time_option_prompt_seconds',
		'timer_action_destination',
		'calculate_estimated_hold_seconds',
		'add_lead_url',
		'eht_minimum_prompt_filename',
		'eht_minimum_prompt_no_block',
		'eht_minimum_prompt_seconds',
		'on_hook_ring_time',
		'na_call_url',
		'on_hook_cid',
		'group_calldate',
		'action_xfer_cid',
		'drop_callmenu',
		'after_hours_callmenu',
		'user_group',
		'max_calls_method',
		'max_calls_count',
		'max_calls_action',
		'dial_ingroup_cid',
		'group_handling',
		'web_form_address_three',
		'populate_lead_ingroup',
		'drop_lead_reset',
		'after_hours_lead_reset',
		'nanq_lead_reset',
		'wait_time_lead_reset',
		'hold_time_lead_reset',
		'status_group_id',
		'routing_initiated_recordings',
		'on_hook_cid_number',
		'customer_chat_screen_colors',
		'customer_chat_survey_link',
		'customer_chat_survey_text',
		'populate_lead_province',
		'areacode_filter',
		'areacode_filter_seconds',
		'areacode_filter_action',
		'areacode_filter_action_value',
		'populate_state_areacode',
		'inbound_survey',
		'inbound_survey_filename',
		'inbound_survey_accept_digit',
		'inbound_survey_question_filename',
		'inbound_survey_callmenu',
		'icbq_expiration_hours',
		'closing_time_action',
		'closing_time_now_trigger',
		'closing_time_filename',
		'closing_time_end_filename',
		'closing_time_lead_reset',
		'closing_time_option_exten',
		'closing_time_option_callmenu',
		'closing_time_option_voicemail',
		'closing_time_option_xfer_group',
		'closing_time_option_callback_list_id',
		'add_lead_timezone',
		'icbq_call_time_id',
		'icbq_dial_filter',
		'populate_lead_source',
		'populate_lead_vendor',
		'park_file_name',
		'waiting_call_url_on',
		'waiting_call_url_off',
		'waiting_call_count',
		'enter_ingroup_url',
		'cid_cb_confirm_number',
		'cid_cb_invalid_filter_phone_group',
		'cid_cb_valid_length',
		'cid_cb_valid_filename',
		'cid_cb_confirmed_filename',
		'cid_cb_enter_filename',
		'cid_cb_you_entered_filename',
		'cid_cb_press_to_confirm_filename',
		'cid_cb_invalid_filename',
		'cid_cb_reenter_filename',
		'cid_cb_error_filename',
		'place_in_line_caller_number_filename',
		'place_in_line_you_next_filename',
		'ingroup_script_two',
		'browser_alert_sound',
		'browser_alert_volume',
		'answer_signal',
		'no_agent_delay',
		'agent_search_method',
		'qc_scorecard_id',
		'qc_statuses_id',
		'populate_lead_comments',
		'drop_call_seconds_override',
		'populate_lead_owner',
		'in_queue_nanque',
		'in_queue_nanque_exceptions'
	];
}
