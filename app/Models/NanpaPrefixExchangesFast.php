<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NanpaPrefixExchangesFast
 * 
 * @property string|null $ac_prefix
 * @property string|null $type
 *
 * @package App\Models
 */
class NanpaPrefixExchangesFast extends Model
{
	protected $table = 'nanpa_prefix_exchanges_fast';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'ac_prefix',
		'type'
	];
}
