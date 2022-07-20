<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialPostalCode
 * 
 * @property string $postal_code
 * @property string|null $state
 * @property string|null $GMT_offset
 * @property string|null $DST
 * @property string|null $DST_range
 * @property string|null $country
 * @property int|null $country_code
 *
 * @package App\Models
 */
class VicidialPostalCode extends Model
{
	protected $table = 'vicidial_postal_codes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'country_code' => 'int'
	];

	protected $fillable = [
		'postal_code',
		'state',
		'GMT_offset',
		'DST',
		'DST_range',
		'country',
		'country_code'
	];
}
