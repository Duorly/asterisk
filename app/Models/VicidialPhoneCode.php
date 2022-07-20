<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialPhoneCode
 * 
 * @property int|null $country_code
 * @property string|null $country
 * @property string|null $areacode
 * @property string|null $state
 * @property string|null $GMT_offset
 * @property string|null $DST
 * @property string|null $DST_range
 * @property string|null $geographic_description
 * @property string|null $tz_code
 * @property string|null $php_tz
 *
 * @package App\Models
 */
class VicidialPhoneCode extends Model
{
	protected $table = 'vicidial_phone_codes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'country_code' => 'int'
	];

	protected $fillable = [
		'country_code',
		'country',
		'areacode',
		'state',
		'GMT_offset',
		'DST',
		'DST_range',
		'geographic_description',
		'tz_code',
		'php_tz'
	];
}
