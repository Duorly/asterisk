<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialIpList
 * 
 * @property string $ip_list_id
 * @property string|null $ip_list_name
 * @property string|null $active
 * @property string|null $user_group
 *
 * @package App\Models
 */
class VicidialIpList extends Model
{
	protected $table = 'vicidial_ip_lists';
	protected $primaryKey = 'ip_list_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'ip_list_name',
		'active',
		'user_group'
	];
}
