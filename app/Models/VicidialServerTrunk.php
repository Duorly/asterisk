<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialServerTrunk
 * 
 * @property string $server_ip
 * @property string $campaign_id
 * @property int|null $dedicated_trunks
 * @property string|null $trunk_restriction
 *
 * @package App\Models
 */
class VicidialServerTrunk extends Model
{
	protected $table = 'vicidial_server_trunks';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'dedicated_trunks' => 'int'
	];

	protected $fillable = [
		'server_ip',
		'campaign_id',
		'dedicated_trunks',
		'trunk_restriction'
	];
}
