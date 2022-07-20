<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialChatLog
 * 
 * @property int $message_row_id
 * @property string|null $chat_id
 * @property string|null $message
 * @property Carbon $message_time
 * @property string|null $poster
 * @property string|null $chat_member_name
 * @property string|null $chat_level
 *
 * @package App\Models
 */
class VicidialChatLog extends Model
{
	protected $table = 'vicidial_chat_log';
	protected $primaryKey = 'message_row_id';
	public $timestamps = false;

	protected $dates = [
		'message_time'
	];

	protected $fillable = [
		'chat_id',
		'message',
		'message_time',
		'poster',
		'chat_member_name',
		'chat_level'
	];
}
