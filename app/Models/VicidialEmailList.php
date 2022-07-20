<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialEmailList
 * 
 * @property int $email_row_id
 * @property int|null $lead_id
 * @property Carbon|null $email_date
 * @property string|null $protocol
 * @property string|null $email_to
 * @property string|null $email_from
 * @property string|null $email_from_name
 * @property string|null $subject
 * @property string|null $mime_type
 * @property string|null $content_type
 * @property string|null $content_transfer_encoding
 * @property string|null $x_mailer
 * @property string|null $sender_ip
 * @property string|null $message
 * @property string|null $email_account_id
 * @property string|null $group_id
 * @property string|null $user
 * @property string|null $status
 * @property string|null $direction
 * @property string|null $uniqueid
 * @property int|null $xfercallid
 *
 * @package App\Models
 */
class VicidialEmailList extends Model
{
	protected $table = 'vicidial_email_list';
	protected $primaryKey = 'email_row_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'xfercallid' => 'int'
	];

	protected $dates = [
		'email_date'
	];

	protected $fillable = [
		'lead_id',
		'email_date',
		'protocol',
		'email_to',
		'email_from',
		'email_from_name',
		'subject',
		'mime_type',
		'content_type',
		'content_transfer_encoding',
		'x_mailer',
		'sender_ip',
		'message',
		'email_account_id',
		'group_id',
		'user',
		'status',
		'direction',
		'uniqueid',
		'xfercallid'
	];
}
