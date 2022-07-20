<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDropLog
 * 
 * @property string $uniqueid
 * @property string $server_ip
 * @property Carbon $drop_date
 * @property int $lead_id
 * @property string|null $phone_code
 * @property string|null $phone_number
 * @property string $campaign_id
 * @property string $status
 * @property string|null $drop_processed
 *
 * @package App\Models
 */
class VicidialDropLog extends Model
{
	protected $table = 'vicidial_drop_log';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'drop_date'
	];

	protected $fillable = [
		'uniqueid',
		'server_ip',
		'drop_date',
		'lead_id',
		'phone_code',
		'phone_number',
		'campaign_id',
		'status',
		'drop_processed'
	];
}
