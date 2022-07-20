<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InboundNumber
 * 
 * @property string $extension
 * @property string $full_number
 * @property string $server_ip
 * @property string|null $inbound_name
 * @property string|null $department
 *
 * @package App\Models
 */
class InboundNumber extends Model
{
	protected $table = 'inbound_numbers';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'extension',
		'full_number',
		'server_ip',
		'inbound_name',
		'department'
	];
}
