<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialListAltPhone
 * 
 * @property int $alt_phone_id
 * @property int $lead_id
 * @property string|null $phone_code
 * @property string|null $phone_number
 * @property string|null $alt_phone_note
 * @property int|null $alt_phone_count
 * @property string|null $active
 *
 * @package App\Models
 */
class VicidialListAltPhone extends Model
{
	protected $table = 'vicidial_list_alt_phones';
	protected $primaryKey = 'alt_phone_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'alt_phone_count' => 'int'
	];

	protected $fillable = [
		'lead_id',
		'phone_code',
		'phone_number',
		'alt_phone_note',
		'alt_phone_count',
		'active'
	];
}
