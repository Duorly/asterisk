<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLiveChat
 * 
 * @property int $chat_id
 * @property Carbon|null $chat_start_time
 * @property string|null $status
 * @property string|null $chat_creator
 * @property string|null $group_id
 * @property int|null $lead_id
 * @property string|null $transferring_agent
 * @property string|null $user_direct
 * @property string|null $user_direct_group_id
 *
 * @package App\Models
 */
class VicidialLiveChat extends Model
{
	protected $table = 'vicidial_live_chats';
	protected $primaryKey = 'chat_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'chat_start_time'
	];

	protected $fillable = [
		'chat_start_time',
		'status',
		'chat_creator',
		'group_id',
		'lead_id',
		'transferring_agent',
		'user_direct',
		'user_direct_group_id'
	];
}
