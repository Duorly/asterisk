<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialManagerChatLog
 * 
 * @property int $manager_chat_message_id
 * @property int|null $manager_chat_id
 * @property int|null $manager_chat_subid
 * @property string|null $manager
 * @property string|null $user
 * @property string|null $message
 * @property string|null $message_id
 * @property Carbon|null $message_date
 * @property Carbon|null $message_viewed_date
 * @property string|null $message_posted_by
 * @property string|null $audio_alerted
 *
 * @package App\Models
 */
class VicidialManagerChatLog extends Model
{
	protected $table = 'vicidial_manager_chat_log';
	protected $primaryKey = 'manager_chat_message_id';
	public $timestamps = false;

	protected $casts = [
		'manager_chat_id' => 'int',
		'manager_chat_subid' => 'int'
	];

	protected $dates = [
		'message_date',
		'message_viewed_date'
	];

	protected $fillable = [
		'manager_chat_id',
		'manager_chat_subid',
		'manager',
		'user',
		'message',
		'message_id',
		'message_date',
		'message_viewed_date',
		'message_posted_by',
		'audio_alerted'
	];
}
