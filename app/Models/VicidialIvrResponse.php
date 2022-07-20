<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialIvrResponse
 * 
 * @property int $id
 * @property string|null $btn
 * @property int|null $lead_id
 * @property Carbon $created
 * @property int|null $question
 * @property string|null $response
 * @property string|null $uniqueid
 * @property string|null $campaign
 *
 * @package App\Models
 */
class VicidialIvrResponse extends Model
{
	protected $table = 'vicidial_ivr_response';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'question' => 'int'
	];

	protected $dates = [
		'created'
	];

	protected $fillable = [
		'btn',
		'lead_id',
		'created',
		'question',
		'response',
		'uniqueid',
		'campaign'
	];
}
