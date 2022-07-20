<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VtigerVicidialRole
 * 
 * @property int|null $user_level
 * @property string|null $vtiger_role
 *
 * @package App\Models
 */
class VtigerVicidialRole extends Model
{
	protected $table = 'vtiger_vicidial_roles';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_level' => 'int'
	];

	protected $fillable = [
		'user_level',
		'vtiger_role'
	];
}
