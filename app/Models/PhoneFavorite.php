<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PhoneFavorite
 * 
 * @property string|null $extension
 * @property string|null $server_ip
 * @property string|null $extensions_list
 *
 * @package App\Models
 */
class PhoneFavorite extends Model
{
	protected $table = 'phone_favorites';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'extension',
		'server_ip',
		'extensions_list'
	];
}
