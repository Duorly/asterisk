<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLogExtendedArchive
 * 
 * @property string $uniqueid
 * @property string|null $server_ip
 * @property Carbon|null $call_date
 * @property int|null $lead_id
 * @property string $caller_code
 * @property string|null $custom_call_id
 * @property string|null $start_url_processed
 * @property string|null $dispo_url_processed
 * @property string|null $multi_alt_processed
 * @property string|null $noanswer_processed
 *
 * @package App\Models
 */
class VicidialLogExtendedArchive extends Model
{
	protected $table = 'vicidial_log_extended_archive';
	protected $primaryKey = 'uniqueid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'server_ip',
		'call_date',
		'lead_id',
		'caller_code',
		'custom_call_id',
		'start_url_processed',
		'dispo_url_processed',
		'multi_alt_processed',
		'noanswer_processed'
	];
}
