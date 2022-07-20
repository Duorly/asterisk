<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Conference
 * 
 * @property int $conf_exten
 * @property string $server_ip
 * @property string|null $extension
 *
 * @package App\Models
 */
class Conference extends Model
{
	protected $table = 'conferences';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'conf_exten' => 'int'
	];

	protected $fillable = [
		'extension'
	];
}
