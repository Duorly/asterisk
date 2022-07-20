<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialManualDialQueue
 * 
 * @property int $mdq_id
 * @property string|null $user
 * @property string|null $phone_number
 * @property Carbon|null $entry_time
 * @property string|null $status
 * @property string|null $external_dial
 *
 * @package App\Models
 */
class VicidialManualDialQueue extends Model
{
	protected $table = 'vicidial_manual_dial_queue';
	protected $primaryKey = 'mdq_id';
	public $timestamps = false;

	protected $dates = [
		'entry_time'
	];

	protected $fillable = [
		'user',
		'phone_number',
		'entry_time',
		'status',
		'external_dial'
	];
}
