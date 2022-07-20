<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAsteriskOutput
 * 
 * @property string $server_ip
 * @property string|null $sip_peers
 * @property string|null $iax_peers
 * @property string|null $asterisk
 * @property Carbon|null $update_date
 *
 * @package App\Models
 */
class VicidialAsteriskOutput extends Model
{
	protected $table = 'vicidial_asterisk_output';
	protected $primaryKey = 'server_ip';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'update_date'
	];

	protected $fillable = [
		'sip_peers',
		'iax_peers',
		'asterisk',
		'update_date'
	];
}
