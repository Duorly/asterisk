<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCustomCid
 * 
 * @property string $cid
 * @property string|null $state
 * @property string|null $areacode
 * @property int|null $country_code
 * @property string|null $campaign_id
 *
 * @package App\Models
 */
class VicidialCustomCid extends Model
{
	protected $table = 'vicidial_custom_cid';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'country_code' => 'int'
	];

	protected $fillable = [
		'cid',
		'state',
		'areacode',
		'country_code',
		'campaign_id'
	];
}
