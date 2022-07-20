<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialIvr
 * 
 * @property int $ivr_id
 * @property Carbon|null $entry_time
 * @property int|null $length_in_sec
 * @property string|null $inbound_number
 * @property int|null $recording_id
 * @property string|null $recording_filename
 * @property string|null $company_id
 * @property string|null $phone_number
 * @property int|null $lead_id
 * @property string|null $campaign_id
 * @property string|null $product_code
 * @property string|null $user
 * @property string|null $prompt_audio_1
 * @property bool|null $prompt_response_1
 * @property string|null $prompt_audio_2
 * @property bool|null $prompt_response_2
 * @property string|null $prompt_audio_3
 * @property bool|null $prompt_response_3
 * @property string|null $prompt_audio_4
 * @property bool|null $prompt_response_4
 * @property string|null $prompt_audio_5
 * @property bool|null $prompt_response_5
 * @property string|null $prompt_audio_6
 * @property bool|null $prompt_response_6
 * @property string|null $prompt_audio_7
 * @property bool|null $prompt_response_7
 * @property string|null $prompt_audio_8
 * @property bool|null $prompt_response_8
 * @property string|null $prompt_audio_9
 * @property bool|null $prompt_response_9
 * @property string|null $prompt_audio_10
 * @property bool|null $prompt_response_10
 * @property string|null $prompt_audio_11
 * @property bool|null $prompt_response_11
 * @property string|null $prompt_audio_12
 * @property bool|null $prompt_response_12
 * @property string|null $prompt_audio_13
 * @property bool|null $prompt_response_13
 * @property string|null $prompt_audio_14
 * @property bool|null $prompt_response_14
 * @property string|null $prompt_audio_15
 * @property bool|null $prompt_response_15
 * @property string|null $prompt_audio_16
 * @property bool|null $prompt_response_16
 * @property string|null $prompt_audio_17
 * @property bool|null $prompt_response_17
 * @property string|null $prompt_audio_18
 * @property bool|null $prompt_response_18
 * @property string|null $prompt_audio_19
 * @property bool|null $prompt_response_19
 * @property string|null $prompt_audio_20
 * @property bool|null $prompt_response_20
 *
 * @package App\Models
 */
class VicidialIvr extends Model
{
	protected $table = 'vicidial_ivr';
	protected $primaryKey = 'ivr_id';
	public $timestamps = false;

	protected $casts = [
		'length_in_sec' => 'int',
		'recording_id' => 'int',
		'lead_id' => 'int',
		'prompt_response_1' => 'bool',
		'prompt_response_2' => 'bool',
		'prompt_response_3' => 'bool',
		'prompt_response_4' => 'bool',
		'prompt_response_5' => 'bool',
		'prompt_response_6' => 'bool',
		'prompt_response_7' => 'bool',
		'prompt_response_8' => 'bool',
		'prompt_response_9' => 'bool',
		'prompt_response_10' => 'bool',
		'prompt_response_11' => 'bool',
		'prompt_response_12' => 'bool',
		'prompt_response_13' => 'bool',
		'prompt_response_14' => 'bool',
		'prompt_response_15' => 'bool',
		'prompt_response_16' => 'bool',
		'prompt_response_17' => 'bool',
		'prompt_response_18' => 'bool',
		'prompt_response_19' => 'bool',
		'prompt_response_20' => 'bool'
	];

	protected $dates = [
		'entry_time'
	];

	protected $fillable = [
		'entry_time',
		'length_in_sec',
		'inbound_number',
		'recording_id',
		'recording_filename',
		'company_id',
		'phone_number',
		'lead_id',
		'campaign_id',
		'product_code',
		'user',
		'prompt_audio_1',
		'prompt_response_1',
		'prompt_audio_2',
		'prompt_response_2',
		'prompt_audio_3',
		'prompt_response_3',
		'prompt_audio_4',
		'prompt_response_4',
		'prompt_audio_5',
		'prompt_response_5',
		'prompt_audio_6',
		'prompt_response_6',
		'prompt_audio_7',
		'prompt_response_7',
		'prompt_audio_8',
		'prompt_response_8',
		'prompt_audio_9',
		'prompt_response_9',
		'prompt_audio_10',
		'prompt_response_10',
		'prompt_audio_11',
		'prompt_response_11',
		'prompt_audio_12',
		'prompt_response_12',
		'prompt_audio_13',
		'prompt_response_13',
		'prompt_audio_14',
		'prompt_response_14',
		'prompt_audio_15',
		'prompt_response_15',
		'prompt_audio_16',
		'prompt_response_16',
		'prompt_audio_17',
		'prompt_response_17',
		'prompt_audio_18',
		'prompt_response_18',
		'prompt_audio_19',
		'prompt_response_19',
		'prompt_audio_20',
		'prompt_response_20'
	];
}
