<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ServerUpdater
 * 
 * @property string $server_ip
 * @property Carbon|null $last_update
 * @property Carbon $db_time
 *
 * @package App\Models
 */
class ServerUpdater extends Model
{
	protected $table = 'server_updater';
	protected $primaryKey = 'server_ip';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'last_update',
		'db_time'
	];

	protected $fillable = [
		'last_update',
		'db_time'
	];
}
