<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialIpListEntry
 * 
 * @property string $ip_list_id
 * @property string $ip_address
 *
 * @package App\Models
 */
class VicidialIpListEntry extends Model
{
	protected $table = 'vicidial_ip_list_entries';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'ip_list_id',
		'ip_address'
	];
}
