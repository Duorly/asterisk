<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialServerCarrier
 * 
 * @property string $carrier_id
 * @property string $carrier_name
 * @property string|null $registration_string
 * @property string $template_id
 * @property string|null $account_entry
 * @property string|null $protocol
 * @property string|null $globals_string
 * @property string|null $dialplan_entry
 * @property string $server_ip
 * @property string|null $active
 * @property string|null $carrier_description
 * @property string|null $user_group
 *
 * @package App\Models
 */
class VicidialServerCarrier extends Model
{
	protected $table = 'vicidial_server_carriers';
	protected $primaryKey = 'carrier_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'carrier_name',
		'registration_string',
		'template_id',
		'account_entry',
		'protocol',
		'globals_string',
		'dialplan_entry',
		'server_ip',
		'active',
		'carrier_description',
		'user_group'
	];
}
