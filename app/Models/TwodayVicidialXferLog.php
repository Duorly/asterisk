<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TwodayVicidialXferLog
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
 *
 * @package App\Models
 */
class TwodayVicidialXferLog extends Model
{
	protected $table = 'twoday_vicidial_xfer_log';
	protected $primaryKey = 'xfercallid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'xfercallid' => 'int',
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
		'closer'
	];
}
