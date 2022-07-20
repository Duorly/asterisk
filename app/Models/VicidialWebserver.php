<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialWebserver
 * 
 * @property int $webserver_id
 * @property string|null $webserver
 * @property string|null $hostname
 *
 * @package App\Models
 */
class VicidialWebserver extends Model
{
	protected $table = 'vicidial_webservers';
	protected $primaryKey = 'webserver_id';
	public $timestamps = false;

	protected $fillable = [
		'webserver',
		'hostname'
	];
}
