<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Vicibox
 * 
 * @property int $server_id
 * @property string $server
 * @property string $server_ip
 * @property string $server_type
 * @property string|null $field1
 * @property string|null $field2
 * @property string|null $field3
 * @property string|null $field4
 * @property string|null $field5
 * @property string|null $field6
 * @property string|null $field7
 * @property string|null $field8
 * @property string|null $field9
 *
 * @package App\Models
 */
class Vicibox extends Model
{
	protected $table = 'vicibox';
	protected $primaryKey = 'server_id';
	public $timestamps = false;

	protected $fillable = [
		'server',
		'server_ip',
		'server_type',
		'field1',
		'field2',
		'field3',
		'field4',
		'field5',
		'field6',
		'field7',
		'field8',
		'field9'
	];
}
