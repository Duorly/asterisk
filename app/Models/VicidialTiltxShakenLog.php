<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialTiltxShakenLog
 * 
 * @property Carbon $db_time
 * @property string $server_ip
 * @property int $url_log_id
 * @property string|null $caller_code
 * @property string|null $phone_number
 * @property string|null $CIDnumber
 * @property string|null $CallerIDToUse
 * @property bool|null $IsDNC
 * @property bool|null $IsDisconnected
 * @property string|null $TILTXID
 * @property string|null $Identity
 * @property string|null $CAID
 *
 * @package App\Models
 */
class VicidialTiltxShakenLog extends Model
{
	protected $table = 'vicidial_tiltx_shaken_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'url_log_id' => 'int',
		'IsDNC' => 'bool',
		'IsDisconnected' => 'bool'
	];

	protected $dates = [
		'db_time'
	];

	protected $fillable = [
		'db_time',
		'server_ip',
		'url_log_id',
		'caller_code',
		'phone_number',
		'CIDnumber',
		'CallerIDToUse',
		'IsDNC',
		'IsDisconnected',
		'TILTXID',
		'Identity',
		'CAID'
	];
}
