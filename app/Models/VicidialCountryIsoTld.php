<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCountryIsoTld
 * 
 * @property string|null $country_name
 * @property string|null $iso2
 * @property string|null $iso3
 * @property string|null $num3
 * @property string|null $tld
 *
 * @package App\Models
 */
class VicidialCountryIsoTld extends Model
{
	protected $table = 'vicidial_country_iso_tld';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'country_name',
		'iso2',
		'iso3',
		'num3',
		'tld'
	];
}
