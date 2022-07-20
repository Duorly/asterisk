<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Phone
 * 
 * @property string|null $extension
 * @property string|null $dialplan_number
 * @property string|null $voicemail_id
 * @property string|null $phone_ip
 * @property string|null $computer_ip
 * @property string|null $server_ip
 * @property string|null $login
 * @property string|null $pass
 * @property string|null $status
 * @property string|null $active
 * @property string|null $phone_type
 * @property string|null $fullname
 * @property string|null $company
 * @property string|null $picture
 * @property int|null $messages
 * @property int|null $old_messages
 * @property string|null $protocol
 * @property string|null $local_gmt
 * @property string|null $ASTmgrUSERNAME
 * @property string|null $ASTmgrSECRET
 * @property string|null $login_user
 * @property string|null $login_pass
 * @property string|null $login_campaign
 * @property string|null $park_on_extension
 * @property string|null $conf_on_extension
 * @property string|null $VICIDIAL_park_on_extension
 * @property string|null $VICIDIAL_park_on_filename
 * @property string|null $monitor_prefix
 * @property string|null $recording_exten
 * @property string|null $voicemail_exten
 * @property string|null $voicemail_dump_exten
 * @property string|null $ext_context
 * @property string|null $dtmf_send_extension
 * @property string|null $call_out_number_group
 * @property string|null $client_browser
 * @property string|null $install_directory
 * @property string|null $local_web_callerID_URL
 * @property string|null $VICIDIAL_web_URL
 * @property string|null $AGI_call_logging_enabled
 * @property string|null $user_switching_enabled
 * @property string|null $conferencing_enabled
 * @property string|null $admin_hangup_enabled
 * @property string|null $admin_hijack_enabled
 * @property string|null $admin_monitor_enabled
 * @property string|null $call_parking_enabled
 * @property string|null $updater_check_enabled
 * @property string|null $AFLogging_enabled
 * @property string|null $QUEUE_ACTION_enabled
 * @property string|null $CallerID_popup_enabled
 * @property string|null $voicemail_button_enabled
 * @property string|null $enable_fast_refresh
 * @property int|null $fast_refresh_rate
 * @property string|null $enable_persistant_mysql
 * @property string|null $auto_dial_next_number
 * @property string|null $VDstop_rec_after_each_call
 * @property string|null $DBX_server
 * @property string|null $DBX_database
 * @property string|null $DBX_user
 * @property string|null $DBX_pass
 * @property int|null $DBX_port
 * @property string|null $DBY_server
 * @property string|null $DBY_database
 * @property string|null $DBY_user
 * @property string|null $DBY_pass
 * @property int|null $DBY_port
 * @property string|null $outbound_cid
 * @property string|null $enable_sipsak_messages
 * @property string|null $email
 * @property string $template_id
 * @property string|null $conf_override
 * @property string|null $phone_context
 * @property int|null $phone_ring_timeout
 * @property string|null $conf_secret
 * @property string|null $delete_vm_after_email
 * @property string|null $is_webphone
 * @property string|null $use_external_server_ip
 * @property string|null $codecs_list
 * @property string|null $codecs_with_template
 * @property string|null $webphone_dialpad
 * @property string|null $on_hook_agent
 * @property string|null $webphone_auto_answer
 * @property string|null $voicemail_timezone
 * @property string|null $voicemail_options
 * @property string|null $user_group
 * @property string|null $voicemail_greeting
 * @property string|null $voicemail_dump_exten_no_inst
 * @property string|null $voicemail_instructions
 * @property string $on_login_report
 * @property string|null $unavail_dialplan_fwd_exten
 * @property string|null $unavail_dialplan_fwd_context
 * @property string|null $nva_call_url
 * @property string|null $nva_search_method
 * @property string|null $nva_error_filename
 * @property int|null $nva_new_list_id
 * @property string|null $nva_new_phone_code
 * @property string|null $nva_new_status
 * @property string|null $webphone_dialbox
 * @property string|null $webphone_mute
 * @property string|null $webphone_volume
 * @property string|null $webphone_debug
 * @property string|null $outbound_alt_cid
 * @property string|null $conf_qualify
 * @property string|null $webphone_layout
 * @property string|null $mohsuggest
 * @property string $peer_status
 * @property int|null $ping_time
 *
 * @package App\Models
 */
class Phone extends Model
{
	protected $table = 'phones';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'messages' => 'int',
		'old_messages' => 'int',
		'fast_refresh_rate' => 'int',
		'DBX_port' => 'int',
		'DBY_port' => 'int',
		'phone_ring_timeout' => 'int',
		'nva_new_list_id' => 'int',
		'ping_time' => 'int'
	];

	protected $hidden = [
		'conf_secret'
	];

	protected $fillable = [
		'dialplan_number',
		'voicemail_id',
		'phone_ip',
		'computer_ip',
		'login',
		'pass',
		'status',
		'active',
		'phone_type',
		'fullname',
		'company',
		'picture',
		'messages',
		'old_messages',
		'protocol',
		'local_gmt',
		'ASTmgrUSERNAME',
		'ASTmgrSECRET',
		'login_user',
		'login_pass',
		'login_campaign',
		'park_on_extension',
		'conf_on_extension',
		'VICIDIAL_park_on_extension',
		'VICIDIAL_park_on_filename',
		'monitor_prefix',
		'recording_exten',
		'voicemail_exten',
		'voicemail_dump_exten',
		'ext_context',
		'dtmf_send_extension',
		'call_out_number_group',
		'client_browser',
		'install_directory',
		'local_web_callerID_URL',
		'VICIDIAL_web_URL',
		'AGI_call_logging_enabled',
		'user_switching_enabled',
		'conferencing_enabled',
		'admin_hangup_enabled',
		'admin_hijack_enabled',
		'admin_monitor_enabled',
		'call_parking_enabled',
		'updater_check_enabled',
		'AFLogging_enabled',
		'QUEUE_ACTION_enabled',
		'CallerID_popup_enabled',
		'voicemail_button_enabled',
		'enable_fast_refresh',
		'fast_refresh_rate',
		'enable_persistant_mysql',
		'auto_dial_next_number',
		'VDstop_rec_after_each_call',
		'DBX_server',
		'DBX_database',
		'DBX_user',
		'DBX_pass',
		'DBX_port',
		'DBY_server',
		'DBY_database',
		'DBY_user',
		'DBY_pass',
		'DBY_port',
		'outbound_cid',
		'enable_sipsak_messages',
		'email',
		'template_id',
		'conf_override',
		'phone_context',
		'phone_ring_timeout',
		'conf_secret',
		'delete_vm_after_email',
		'is_webphone',
		'use_external_server_ip',
		'codecs_list',
		'codecs_with_template',
		'webphone_dialpad',
		'on_hook_agent',
		'webphone_auto_answer',
		'voicemail_timezone',
		'voicemail_options',
		'user_group',
		'voicemail_greeting',
		'voicemail_dump_exten_no_inst',
		'voicemail_instructions',
		'on_login_report',
		'unavail_dialplan_fwd_exten',
		'unavail_dialplan_fwd_context',
		'nva_call_url',
		'nva_search_method',
		'nva_error_filename',
		'nva_new_list_id',
		'nva_new_phone_code',
		'nva_new_status',
		'webphone_dialbox',
		'webphone_mute',
		'webphone_volume',
		'webphone_debug',
		'outbound_alt_cid',
		'conf_qualify',
		'webphone_layout',
		'mohsuggest',
		'peer_status',
		'ping_time'
	];
}
