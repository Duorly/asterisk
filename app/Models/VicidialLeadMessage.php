<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLeadMessage
 * 
 * @property int $lead_id
 * @property Carbon|null $call_date
 * @property string|null $user
 * @property int|null $played
 * @property string|null $message_entry
 *
 * @package App\Models
 */
class VicidialLeadMessage extends Model
{
	protected $table = 'vicidial_lead_messages';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'played' => 'int'
	];

	protected $dates = [
		'call_date'
	];

	protected $fillable = [
		'lead_id',
		'call_date',
		'user',
		'played',
		'message_entry'
	];
}
