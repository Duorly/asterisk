<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NanpaPrefixExchangesMaster
 * 
 * @property string|null $areacode
 * @property string|null $prefix
 * @property string|null $source
 * @property string|null $type
 * @property string|null $tier
 * @property string|null $postal_code
 * @property string|null $new_areacode
 * @property string|null $tzcode
 * @property string|null $region
 *
 * @package App\Models
 */
class NanpaPrefixExchangesMaster extends Model
{
	protected $table = 'nanpa_prefix_exchanges_master';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'areacode',
		'prefix',
		'source',
		'type',
		'tier',
		'postal_code',
		'new_areacode',
		'tzcode',
		'region'
	];
}
