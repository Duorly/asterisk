<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Server
 * 
 * @property string $server_id
 * @property string|null $server_description
 * @property string $server_ip
 * @property string|null $active
 * @property string|null $asterisk_version
 * @property int|null $max_vicidial_trunks
 * @property string $telnet_host
 * @property int $telnet_port
 * @property string $ASTmgrUSERNAME
 * @property string $ASTmgrSECRET
 * @property string $ASTmgrUSERNAMEupdate
 * @property string $ASTmgrUSERNAMElisten
 * @property string $ASTmgrUSERNAMEsend
 * @property string|null $local_gmt
 * @property string $voicemail_dump_exten
 * @property string $answer_transfer_agent
 * @property string $ext_context
 * @property string|null $sys_perf_log
 * @property string|null $vd_server_logs
 * @property string|null $agi_output
 * @property string|null $vicidial_balance_active
 * @property int|null $balance_trunks_offlimits
 * @property string|null $recording_web_link
 * @property string|null $alt_server_ip
 * @property string|null $active_asterisk_server
 * @property string|null $generate_vicidial_conf
 * @property string|null $rebuild_conf_files
 * @property int|null $outbound_calls_per_second
 * @property int $sysload
 * @property int $channels_total
 * @property int $cpu_idle_percent
 * @property string|null $disk_usage
 * @property string|null $sounds_update
 * @property int|null $vicidial_recording_limit
 * @property string|null $carrier_logging_active
 * @property int|null $vicidial_balance_rank
 * @property string|null $rebuild_music_on_hold
 * @property string|null $active_agent_login_server
 * @property string|null $conf_secret
 * @property string|null $external_server_ip
 * @property string|null $custom_dialplan_entry
 * @property string|null $active_twin_server_ip
 * @property string|null $user_group
 * @property string|null $audio_store_purge
 * @property int|null $svn_revision
 * @property string|null $svn_info
 * @property string|null $system_uptime
 * @property string|null $auto_restart_asterisk
 * @property string|null $asterisk_temp_no_restart
 * @property string|null $voicemail_dump_exten_no_inst
 * @property string|null $gather_asterisk_output
 * @property string|null $web_socket_url
 * @property string|null $conf_qualify
 * @property string|null $routing_prefix
 * @property string|null $external_web_socket_url
 *
 * @package App\Models
 */
class Server extends Model
{
	protected $table = 'servers';
	protected $primaryKey = 'server_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'max_vicidial_trunks' => 'int',
		'telnet_port' => 'int',
		'balance_trunks_offlimits' => 'int',
		'outbound_calls_per_second' => 'int',
		'sysload' => 'int',
		'channels_total' => 'int',
		'cpu_idle_percent' => 'int',
		'vicidial_recording_limit' => 'int',
		'vicidial_balance_rank' => 'int',
		'svn_revision' => 'int'
	];

	protected $hidden = [
		'conf_secret'
	];

	protected $fillable = [
		'server_description',
		'server_ip',
		'active',
		'asterisk_version',
		'max_vicidial_trunks',
		'telnet_host',
		'telnet_port',
		'ASTmgrUSERNAME',
		'ASTmgrSECRET',
		'ASTmgrUSERNAMEupdate',
		'ASTmgrUSERNAMElisten',
		'ASTmgrUSERNAMEsend',
		'local_gmt',
		'voicemail_dump_exten',
		'answer_transfer_agent',
		'ext_context',
		'sys_perf_log',
		'vd_server_logs',
		'agi_output',
		'vicidial_balance_active',
		'balance_trunks_offlimits',
		'recording_web_link',
		'alt_server_ip',
		'active_asterisk_server',
		'generate_vicidial_conf',
		'rebuild_conf_files',
		'outbound_calls_per_second',
		'sysload',
		'channels_total',
		'cpu_idle_percent',
		'disk_usage',
		'sounds_update',
		'vicidial_recording_limit',
		'carrier_logging_active',
		'vicidial_balance_rank',
		'rebuild_music_on_hold',
		'active_agent_login_server',
		'conf_secret',
		'external_server_ip',
		'custom_dialplan_entry',
		'active_twin_server_ip',
		'user_group',
		'audio_store_purge',
		'svn_revision',
		'svn_info',
		'system_uptime',
		'auto_restart_asterisk',
		'asterisk_temp_no_restart',
		'voicemail_dump_exten_no_inst',
		'gather_asterisk_output',
		'web_socket_url',
		'conf_qualify',
		'routing_prefix',
		'external_web_socket_url'
	];
}
