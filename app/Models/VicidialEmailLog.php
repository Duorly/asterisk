<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialEmailLog
 * 
 * @property int $email_log_id
 * @property int|null $email_row_id
 * @property int|null $lead_id
 * @property Carbon|null $email_date
 * @property string|null $user
 * @property string|null $email_to
 * @property string|null $message
 * @property string|null $campaign_id
 * @property string|null $attachments
 *
 * @package App\Models
 */
class VicidialEmailLog extends Model
{
	protected $table = 'vicidial_email_log';
	protected $primaryKey = 'email_log_id';
	public $timestamps = false;

	protected $casts = [
		'email_row_id' => 'int',
		'lead_id' => 'int'
	];

	protected $dates = [
		'email_date'
	];

	protected $fillable = [
		'email_row_id',
		'lead_id',
		'email_date',
		'user',
		'email_to',
		'message',
		'campaign_id',
		'attachments'
	];
}
