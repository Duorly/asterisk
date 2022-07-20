<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCountryDncQueue
 * 
 * @property int $dnc_file_id
 * @property string|null $filename
 * @property string|null $country_code
 * @property string|null $file_layout
 * @property string|null $file_status
 * @property string|null $file_action
 * @property Carbon|null $date_uploaded
 * @property int|null $total_records
 * @property int|null $records_processed
 * @property int|null $records_inserted
 * @property Carbon|null $date_processed
 *
 * @package App\Models
 */
class VicidialCountryDncQueue extends Model
{
	protected $table = 'vicidial_country_dnc_queue';
	protected $primaryKey = 'dnc_file_id';
	public $timestamps = false;

	protected $casts = [
		'total_records' => 'int',
		'records_processed' => 'int',
		'records_inserted' => 'int'
	];

	protected $dates = [
		'date_uploaded',
		'date_processed'
	];

	protected $fillable = [
		'filename',
		'country_code',
		'file_layout',
		'file_status',
		'file_action',
		'date_uploaded',
		'total_records',
		'records_processed',
		'records_inserted',
		'date_processed'
	];
}
