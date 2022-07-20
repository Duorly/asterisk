<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialNanpaPrefixCode
 * 
 * @property string|null $areacode
 * @property string|null $prefix
 * @property string|null $GMT_offset
 * @property string|null $DST
 * @property string|null $latitude
 * @property string|null $longitude
 * @property string|null $city
 * @property string|null $state
 * @property string|null $postal_code
 * @property string|null $country
 * @property string|null $lata_type
 *
 * @package App\Models
 */
class VicidialNanpaPrefixCode extends Model
{
	protected $table = 'vicidial_nanpa_prefix_codes';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'GMT_offset',
		'DST',
		'latitude',
		'longitude',
		'city',
		'state',
		'postal_code',
		'country',
		'lata_type'
	];
}
