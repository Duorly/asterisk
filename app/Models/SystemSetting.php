<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SystemSetting
 * 
 * @property string|null $version
 * @property string|null $install_date
 * @property string|null $use_non_latin
 * @property string|null $webroot_writable
 * @property string|null $enable_queuemetrics_logging
 * @property string|null $queuemetrics_server_ip
 * @property string|null $queuemetrics_dbname
 * @property string|null $queuemetrics_login
 * @property string|null $queuemetrics_pass
 * @property string|null $queuemetrics_url
 * @property string|null $queuemetrics_log_id
 * @property string|null $queuemetrics_eq_prepend
 * @property string|null $vicidial_agent_disable
 * @property string|null $allow_sipsak_messages
 * @property string|null $admin_home_url
 * @property string|null $enable_agc_xfer_log
 * @property int|null $db_schema_version
 * @property int|null $auto_user_add_value
 * @property string|null $timeclock_end_of_day
 * @property Carbon|null $timeclock_last_reset_date
 * @property string|null $vdc_header_date_format
 * @property string|null $vdc_customer_date_format
 * @property string|null $vdc_header_phone_format
 * @property string|null $vdc_agent_api_active
 * @property Carbon|null $qc_last_pull_time
 * @property string|null $enable_vtiger_integration
 * @property string|null $vtiger_server_ip
 * @property string|null $vtiger_dbname
 * @property string|null $vtiger_login
 * @property string|null $vtiger_pass
 * @property string|null $vtiger_url
 * @property string|null $qc_features_active
 * @property string|null $outbound_autodial_active
 * @property int|null $outbound_calls_per_second
 * @property string|null $enable_tts_integration
 * @property string|null $agentonly_callback_campaign_lock
 * @property string|null $sounds_central_control_active
 * @property string|null $sounds_web_server
 * @property string|null $sounds_web_directory
 * @property string|null $active_voicemail_server
 * @property string|null $auto_dial_limit
 * @property string|null $user_territories_active
 * @property string|null $allow_custom_dialplan
 * @property Carbon|null $db_schema_update_date
 * @property string|null $enable_second_webform
 * @property string|null $default_webphone
 * @property string|null $default_external_server_ip
 * @property string|null $webphone_url
 * @property string|null $static_agent_url
 * @property string|null $default_phone_code
 * @property string|null $enable_agc_dispo_log
 * @property string|null $custom_dialplan_entry
 * @property string|null $queuemetrics_loginout
 * @property string|null $callcard_enabled
 * @property string|null $queuemetrics_callstatus
 * @property string|null $default_codecs
 * @property string|null $custom_fields_enabled
 * @property string|null $admin_web_directory
 * @property string|null $label_title
 * @property string|null $label_first_name
 * @property string|null $label_middle_initial
 * @property string|null $label_last_name
 * @property string|null $label_address1
 * @property string|null $label_address2
 * @property string|null $label_address3
 * @property string|null $label_city
 * @property string|null $label_state
 * @property string|null $label_province
 * @property string|null $label_postal_code
 * @property string|null $label_vendor_lead_code
 * @property string|null $label_gender
 * @property string|null $label_phone_number
 * @property string|null $label_phone_code
 * @property string|null $label_alt_phone
 * @property string|null $label_security_phrase
 * @property string|null $label_email
 * @property string|null $label_comments
 * @property string|null $slave_db_server
 * @property string|null $reports_use_slave_db
 * @property string|null $webphone_systemkey
 * @property string|null $first_login_trigger
 * @property string|null $hosted_settings
 * @property string|null $default_phone_registration_password
 * @property string|null $default_phone_login_password
 * @property string|null $default_server_password
 * @property int|null $admin_modify_refresh
 * @property string|null $nocache_admin
 * @property string|null $generate_cross_server_exten
 * @property string|null $queuemetrics_addmember_enabled
 * @property string|null $queuemetrics_dispo_pause
 * @property string|null $label_hide_field_logs
 * @property string|null $queuemetrics_pe_phone_append
 * @property string|null $test_campaign_calls
 * @property string|null $agents_calls_reset
 * @property string|null $voicemail_timezones
 * @property string|null $default_voicemail_timezone
 * @property string|null $default_local_gmt
 * @property string|null $noanswer_log
 * @property string|null $alt_log_server_ip
 * @property string|null $alt_log_dbname
 * @property string|null $alt_log_login
 * @property string|null $alt_log_pass
 * @property string|null $tables_use_alt_log_db
 * @property string|null $did_agent_log
 * @property string|null $campaign_cid_areacodes_enabled
 * @property int|null $pllb_grouping_limit
 * @property string|null $did_ra_extensions_enabled
 * @property string|null $expanded_list_stats
 * @property string|null $contacts_enabled
 * @property string|null $svn_version
 * @property string|null $call_menu_qualify_enabled
 * @property string|null $admin_list_counts
 * @property string|null $allow_voicemail_greeting
 * @property string|null $audio_store_purge
 * @property int|null $svn_revision
 * @property string|null $queuemetrics_socket
 * @property string|null $queuemetrics_socket_url
 * @property string|null $enhanced_disconnect_logging
 * @property string|null $allow_emails
 * @property string|null $level_8_disable_add
 * @property string|null $pass_hash_enabled
 * @property string|null $pass_key
 * @property int|null $pass_cost
 * @property string|null $disable_auto_dial
 * @property string|null $queuemetrics_record_hold
 * @property string|null $country_code_list_stats
 * @property Carbon|null $reload_timestamp
 * @property string|null $queuemetrics_pause_type
 * @property string|null $frozen_server_call_clear
 * @property string|null $callback_time_24hour
 * @property string|null $active_modules
 * @property string|null $allow_chats
 * @property string|null $enable_languages
 * @property string|null $language_method
 * @property string|null $meetme_enter_login_filename
 * @property string|null $meetme_enter_leave3way_filename
 * @property string|null $enable_did_entry_list_id
 * @property string|null $enable_third_webform
 * @property string|null $chat_url
 * @property int|null $chat_timeout
 * @property string|null $agent_debug_logging
 * @property string|null $default_language
 * @property string|null $agent_whisper_enabled
 * @property string|null $user_hide_realtime_enabled
 * @property string|null $custom_reports_use_slave_db
 * @property string|null $usacan_phone_dialcode_fix
 * @property string|null $cache_carrier_stats_realtime
 * @property Carbon|null $oldest_logs_date
 * @property string|null $log_recording_access
 * @property string|null $report_default_format
 * @property string|null $alt_ivr_logging
 * @property string|null $admin_row_click
 * @property string|null $admin_screen_colors
 * @property string|null $ofcom_uk_drop_calc
 * @property string|null $agent_screen_colors
 * @property string|null $script_remove_js
 * @property string|null $manual_auto_next
 * @property string|null $user_new_lead_limit
 * @property string|null $agent_xfer_park_3way
 * @property int|null $rec_prompt_count
 * @property string|null $agent_soundboards
 * @property string|null $web_loader_phone_length
 * @property string|null $agent_script
 * @property string|null $vdad_debug_logging
 * @property string|null $agent_chat_screen_colors
 * @property string|null $enable_auto_reports
 * @property string|null $enable_pause_code_limits
 * @property string|null $enable_drop_lists
 * @property string|null $allow_ip_lists
 * @property string|null $system_ip_blacklist
 * @property string|null $agent_push_events
 * @property string|null $agent_push_url
 * @property string|null $hide_inactive_lists
 * @property string|null $allow_manage_active_lists
 * @property string|null $expired_lists_inactive
 * @property string|null $did_system_filter
 * @property string|null $anyone_callback_inactive_lists
 * @property string|null $enable_gdpr_download_deletion
 * @property string|null $source_id_display
 * @property string|null $help_modification_date
 * @property string|null $agent_logout_link
 * @property string|null $manual_dial_validation
 * @property string|null $mute_recordings
 * @property string|null $user_admin_redirect
 * @property string|null $list_status_modification_confirmation
 * @property string|null $sip_event_logging
 * @property string|null $call_quota_lead_ranking
 * @property string|null $enable_second_script
 * @property string|null $enable_first_webform
 * @property string|null $recording_buttons
 * @property string|null $opensips_cid_name
 * @property int|null $require_password_length
 * @property string|null $user_account_emails
 * @property string|null $outbound_cid_any
 * @property int|null $entries_per_page
 * @property string|null $browser_call_alerts
 * @property string|null $queuemetrics_pausereason
 * @property string|null $inbound_answer_config
 * @property string|null $enable_international_dncs
 * @property string|null $web_loader_phone_strip
 * @property string|null $manual_dial_phone_strip
 * @property string|null $daily_call_count_limit
 * @property string|null $allow_shared_dial
 * @property string|null $agent_search_method
 * @property string|null $phone_defaults_container
 * @property int|null $qc_claim_limit
 * @property int|null $qc_expire_days
 * @property int|null $two_factor_auth_hours
 * @property string|null $two_factor_container
 * @property string|null $agent_hidden_sound
 * @property int|null $agent_hidden_sound_volume
 * @property int|null $agent_hidden_sound_seconds
 * @property string|null $agent_screen_timer
 * @property string|null $label_lead_id
 * @property string|null $label_list_id
 * @property string|null $label_entry_date
 * @property string|null $label_gmt_offset_now
 * @property string|null $label_source_id
 * @property string|null $label_called_since_last_reset
 * @property string|null $label_status
 * @property string|null $label_user
 * @property string|null $label_date_of_birth
 * @property string|null $label_country_code
 * @property string|null $label_last_local_call_time
 * @property string|null $label_called_count
 * @property string|null $label_rank
 * @property string|null $label_owner
 * @property string|null $label_entry_list_id
 * @property string|null $call_limit_24hour
 * @property Carbon|null $call_limit_24hour_reset
 * @property string|null $allowed_sip_stacks
 *
 * @package App\Models
 */
class SystemSetting extends Model
{
	protected $table = 'system_settings';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'db_schema_version' => 'int',
		'auto_user_add_value' => 'int',
		'outbound_calls_per_second' => 'int',
		'admin_modify_refresh' => 'int',
		'pllb_grouping_limit' => 'int',
		'svn_revision' => 'int',
		'pass_cost' => 'int',
		'chat_timeout' => 'int',
		'rec_prompt_count' => 'int',
		'require_password_length' => 'int',
		'entries_per_page' => 'int',
		'qc_claim_limit' => 'int',
		'qc_expire_days' => 'int',
		'two_factor_auth_hours' => 'int',
		'agent_hidden_sound_volume' => 'int',
		'agent_hidden_sound_seconds' => 'int'
	];

	protected $dates = [
		'timeclock_last_reset_date',
		'qc_last_pull_time',
		'db_schema_update_date',
		'reload_timestamp',
		'oldest_logs_date',
		'call_limit_24hour_reset'
	];

	protected $hidden = [
		'default_phone_registration_password',
		'default_phone_login_password',
		'default_server_password'
	];

	protected $fillable = [
		'version',
		'install_date',
		'use_non_latin',
		'webroot_writable',
		'enable_queuemetrics_logging',
		'queuemetrics_server_ip',
		'queuemetrics_dbname',
		'queuemetrics_login',
		'queuemetrics_pass',
		'queuemetrics_url',
		'queuemetrics_log_id',
		'queuemetrics_eq_prepend',
		'vicidial_agent_disable',
		'allow_sipsak_messages',
		'admin_home_url',
		'enable_agc_xfer_log',
		'db_schema_version',
		'auto_user_add_value',
		'timeclock_end_of_day',
		'timeclock_last_reset_date',
		'vdc_header_date_format',
		'vdc_customer_date_format',
		'vdc_header_phone_format',
		'vdc_agent_api_active',
		'qc_last_pull_time',
		'enable_vtiger_integration',
		'vtiger_server_ip',
		'vtiger_dbname',
		'vtiger_login',
		'vtiger_pass',
		'vtiger_url',
		'qc_features_active',
		'outbound_autodial_active',
		'outbound_calls_per_second',
		'enable_tts_integration',
		'agentonly_callback_campaign_lock',
		'sounds_central_control_active',
		'sounds_web_server',
		'sounds_web_directory',
		'active_voicemail_server',
		'auto_dial_limit',
		'user_territories_active',
		'allow_custom_dialplan',
		'db_schema_update_date',
		'enable_second_webform',
		'default_webphone',
		'default_external_server_ip',
		'webphone_url',
		'static_agent_url',
		'default_phone_code',
		'enable_agc_dispo_log',
		'custom_dialplan_entry',
		'queuemetrics_loginout',
		'callcard_enabled',
		'queuemetrics_callstatus',
		'default_codecs',
		'custom_fields_enabled',
		'admin_web_directory',
		'label_title',
		'label_first_name',
		'label_middle_initial',
		'label_last_name',
		'label_address1',
		'label_address2',
		'label_address3',
		'label_city',
		'label_state',
		'label_province',
		'label_postal_code',
		'label_vendor_lead_code',
		'label_gender',
		'label_phone_number',
		'label_phone_code',
		'label_alt_phone',
		'label_security_phrase',
		'label_email',
		'label_comments',
		'slave_db_server',
		'reports_use_slave_db',
		'webphone_systemkey',
		'first_login_trigger',
		'hosted_settings',
		'default_phone_registration_password',
		'default_phone_login_password',
		'default_server_password',
		'admin_modify_refresh',
		'nocache_admin',
		'generate_cross_server_exten',
		'queuemetrics_addmember_enabled',
		'queuemetrics_dispo_pause',
		'label_hide_field_logs',
		'queuemetrics_pe_phone_append',
		'test_campaign_calls',
		'agents_calls_reset',
		'voicemail_timezones',
		'default_voicemail_timezone',
		'default_local_gmt',
		'noanswer_log',
		'alt_log_server_ip',
		'alt_log_dbname',
		'alt_log_login',
		'alt_log_pass',
		'tables_use_alt_log_db',
		'did_agent_log',
		'campaign_cid_areacodes_enabled',
		'pllb_grouping_limit',
		'did_ra_extensions_enabled',
		'expanded_list_stats',
		'contacts_enabled',
		'svn_version',
		'call_menu_qualify_enabled',
		'admin_list_counts',
		'allow_voicemail_greeting',
		'audio_store_purge',
		'svn_revision',
		'queuemetrics_socket',
		'queuemetrics_socket_url',
		'enhanced_disconnect_logging',
		'allow_emails',
		'level_8_disable_add',
		'pass_hash_enabled',
		'pass_key',
		'pass_cost',
		'disable_auto_dial',
		'queuemetrics_record_hold',
		'country_code_list_stats',
		'reload_timestamp',
		'queuemetrics_pause_type',
		'frozen_server_call_clear',
		'callback_time_24hour',
		'active_modules',
		'allow_chats',
		'enable_languages',
		'language_method',
		'meetme_enter_login_filename',
		'meetme_enter_leave3way_filename',
		'enable_did_entry_list_id',
		'enable_third_webform',
		'chat_url',
		'chat_timeout',
		'agent_debug_logging',
		'default_language',
		'agent_whisper_enabled',
		'user_hide_realtime_enabled',
		'custom_reports_use_slave_db',
		'usacan_phone_dialcode_fix',
		'cache_carrier_stats_realtime',
		'oldest_logs_date',
		'log_recording_access',
		'report_default_format',
		'alt_ivr_logging',
		'admin_row_click',
		'admin_screen_colors',
		'ofcom_uk_drop_calc',
		'agent_screen_colors',
		'script_remove_js',
		'manual_auto_next',
		'user_new_lead_limit',
		'agent_xfer_park_3way',
		'rec_prompt_count',
		'agent_soundboards',
		'web_loader_phone_length',
		'agent_script',
		'vdad_debug_logging',
		'agent_chat_screen_colors',
		'enable_auto_reports',
		'enable_pause_code_limits',
		'enable_drop_lists',
		'allow_ip_lists',
		'system_ip_blacklist',
		'agent_push_events',
		'agent_push_url',
		'hide_inactive_lists',
		'allow_manage_active_lists',
		'expired_lists_inactive',
		'did_system_filter',
		'anyone_callback_inactive_lists',
		'enable_gdpr_download_deletion',
		'source_id_display',
		'help_modification_date',
		'agent_logout_link',
		'manual_dial_validation',
		'mute_recordings',
		'user_admin_redirect',
		'list_status_modification_confirmation',
		'sip_event_logging',
		'call_quota_lead_ranking',
		'enable_second_script',
		'enable_first_webform',
		'recording_buttons',
		'opensips_cid_name',
		'require_password_length',
		'user_account_emails',
		'outbound_cid_any',
		'entries_per_page',
		'browser_call_alerts',
		'queuemetrics_pausereason',
		'inbound_answer_config',
		'enable_international_dncs',
		'web_loader_phone_strip',
		'manual_dial_phone_strip',
		'daily_call_count_limit',
		'allow_shared_dial',
		'agent_search_method',
		'phone_defaults_container',
		'qc_claim_limit',
		'qc_expire_days',
		'two_factor_auth_hours',
		'two_factor_container',
		'agent_hidden_sound',
		'agent_hidden_sound_volume',
		'agent_hidden_sound_seconds',
		'agent_screen_timer',
		'label_lead_id',
		'label_list_id',
		'label_entry_date',
		'label_gmt_offset_now',
		'label_source_id',
		'label_called_since_last_reset',
		'label_status',
		'label_user',
		'label_date_of_birth',
		'label_country_code',
		'label_last_local_call_time',
		'label_called_count',
		'label_rank',
		'label_owner',
		'label_entry_list_id',
		'call_limit_24hour',
		'call_limit_24hour_reset',
		'allowed_sip_stacks'
	];
}
