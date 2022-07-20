<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialManager
 * 
 * @property int $man_id
 * @property string|null $uniqueid
 * @property Carbon|null $entry_date
 * @property string|null $status
 * @property string|null $response
 * @property string $server_ip
 * @property string|null $channel
 * @property string|null $action
 * @property string|null $callerid
 * @property string|null $cmd_line_b
 * @property string|null $cmd_line_c
 * @property string|null $cmd_line_d
 * @property string|null $cmd_line_e
 * @property string|null $cmd_line_f
 * @property string|null $cmd_line_g
 * @property string|null $cmd_line_h
 * @property string|null $cmd_line_i
 * @property string|null $cmd_line_j
 * @property string|null $cmd_line_k
 *
 * @package App\Models
 */
class VicidialManager extends Model
{
	protected $table = 'vicidial_manager';
	protected $primaryKey = 'man_id';
	public $timestamps = false;

	protected $dates = [
		'entry_date'
	];

	protected $fillable = [
		'uniqueid',
		'entry_date',
		'status',
		'response',
		'server_ip',
		'channel',
		'action',
		'callerid',
		'cmd_line_b',
		'cmd_line_c',
		'cmd_line_d',
		'cmd_line_e',
		'cmd_line_f',
		'cmd_line_g',
		'cmd_line_h',
		'cmd_line_i',
		'cmd_line_j',
		'cmd_line_k'
	];
}
