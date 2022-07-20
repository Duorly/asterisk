<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServerPerformance
 * 
 * @property Carbon $start_time
 * @property string $server_ip
 * @property int $sysload
 * @property int $freeram
 * @property int $usedram
 * @property int $processes
 * @property int $channels_total
 * @property int $trunks_total
 * @property int $clients_total
 * @property int $clients_zap
 * @property int $clients_iax
 * @property int $clients_local
 * @property int $clients_sip
 * @property int $live_recordings
 * @property int $cpu_user_percent
 * @property int $cpu_system_percent
 * @property int $cpu_idle_percent
 * @property int|null $disk_reads
 * @property int|null $disk_writes
 *
 * @package App\Models
 */
class ServerPerformance extends Model
{
	protected $table = 'server_performance';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'sysload' => 'int',
		'freeram' => 'int',
		'usedram' => 'int',
		'processes' => 'int',
		'channels_total' => 'int',
		'trunks_total' => 'int',
		'clients_total' => 'int',
		'clients_zap' => 'int',
		'clients_iax' => 'int',
		'clients_local' => 'int',
		'clients_sip' => 'int',
		'live_recordings' => 'int',
		'cpu_user_percent' => 'int',
		'cpu_system_percent' => 'int',
		'cpu_idle_percent' => 'int',
		'disk_reads' => 'int',
		'disk_writes' => 'int'
	];

	protected $dates = [
		'start_time'
	];

	protected $fillable = [
		'start_time',
		'server_ip',
		'sysload',
		'freeram',
		'usedram',
		'processes',
		'channels_total',
		'trunks_total',
		'clients_total',
		'clients_zap',
		'clients_iax',
		'clients_local',
		'clients_sip',
		'live_recordings',
		'cpu_user_percent',
		'cpu_system_percent',
		'cpu_idle_percent',
		'disk_reads',
		'disk_writes'
	];
}
