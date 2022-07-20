<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialListPin
 * 
 * @property int $pins_id
 * @property Carbon|null $entry_time
 * @property string|null $phone_number
 * @property int|null $lead_id
 * @property string|null $campaign_id
 * @property string|null $product_code
 * @property string|null $user
 * @property string|null $digits
 *
 * @package App\Models
 */
class VicidialListPin extends Model
{
	protected $table = 'vicidial_list_pins';
	protected $primaryKey = 'pins_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int'
	];

	protected $dates = [
		'entry_time'
	];

	protected $fillable = [
		'entry_time',
		'phone_number',
		'lead_id',
		'campaign_id',
		'product_code',
		'user',
		'digits'
	];
}
