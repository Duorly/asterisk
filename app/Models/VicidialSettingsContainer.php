<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialSettingsContainer
 * 
 * @property string $container_id
 * @property string|null $container_notes
 * @property string|null $container_type
 * @property string|null $user_group
 * @property string|null $container_entry
 *
 * @package App\Models
 */
class VicidialSettingsContainer extends Model
{
	protected $table = 'vicidial_settings_containers';
	protected $primaryKey = 'container_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'container_notes',
		'container_type',
		'user_group',
		'container_entry'
	];
}
