<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialManagerChat
 * 
 * @property int $manager_chat_id
 * @property string|null $internal_chat_type
 * @property Carbon|null $chat_start_date
 * @property string|null $manager
 * @property string|null $selected_agents
 * @property string|null $selected_user_groups
 * @property string|null $selected_campaigns
 * @property string|null $allow_replies
 *
 * @package App\Models
 */
class VicidialManagerChat extends Model
{
	protected $table = 'vicidial_manager_chats';
	protected $primaryKey = 'manager_chat_id';
	public $timestamps = false;

	protected $dates = [
		'chat_start_date'
	];

	protected $fillable = [
		'internal_chat_type',
		'chat_start_date',
		'manager',
		'selected_agents',
		'selected_user_groups',
		'selected_campaigns',
		'allow_replies'
	];
}
