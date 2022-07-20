<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialXferLog
 * 
 * @property int $xfercallid
 * @property int $lead_id
 * @property int|null $list_id
 * @property string|null $campaign_id
 * @property Carbon|null $call_date
 * @property string|null $phone_code
 * @property string|null $phone_number
 * @property string|null $user
 * @property string|null $closer
 * @property string|null $front_uniqueid
 * @property string|null $close_uniqueid
 *
 * @package App\Models
 */
class VicidialXferLog extends Model
{
	protected $table = 'vicidial_xfer_log';
	protected $primaryKey = 'xfercallid';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'list_id' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'lead_id',
		'list_id',
		'campaign_id',
		'call_date',
		'phone_code',
		'phone_number',
		'user',
		'closer',
		'front_uniqueid',
		'close_uniqueid'
	];
}
