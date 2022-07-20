<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialChatParticipant
 * 
 * @property int $chat_participant_id
 * @property int|null $chat_id
 * @property string|null $chat_member
 * @property string|null $chat_member_name
 * @property Carbon|null $ping_date
 * @property string|null $vd_agent
 *
 * @package App\Models
 */
class VicidialChatParticipant extends Model
{
	protected $table = 'vicidial_chat_participants';
	protected $primaryKey = 'chat_participant_id';
	public $timestamps = false;

	protected $casts = [
		'chat_id' => 'int'
	];

	protected $dates = [
		'ping_date'
	];

	protected $fillable = [
		'chat_id',
		'chat_member',
		'chat_member_name',
		'ping_date',
		'vd_agent'
	];
}
