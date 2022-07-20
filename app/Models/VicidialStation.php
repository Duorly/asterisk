<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialStation
 * 
 * @property string $agent_station
 * @property string|null $phone_channel
 * @property string $computer_ip
 * @property string $server_ip
 * @property string $DB_server_ip
 * @property string|null $DB_user
 * @property string|null $DB_pass
 * @property string|null $DB_port
 *
 * @package App\Models
 */
class VicidialStation extends Model
{
	protected $table = 'vicidial_stations';
	protected $primaryKey = 'agent_station';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'phone_channel',
		'computer_ip',
		'server_ip',
		'DB_server_ip',
		'DB_user',
		'DB_pass',
		'DB_port'
	];
}
