<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WebClientSession
 * 
 * @property string $extension
 * @property string $server_ip
 * @property string|null $program
 * @property Carbon $start_time
 * @property string $session_name
 *
 * @package App\Models
 */
class WebClientSession extends Model
{
	protected $table = 'web_client_sessions';
	protected $primaryKey = 'session_name';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'start_time'
	];

	protected $fillable = [
		'extension',
		'server_ip',
		'program',
		'start_time'
	];
}
