<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialStatusGroup
 * 
 * @property string $status_group_id
 * @property string|null $status_group_notes
 * @property string|null $user_group
 *
 * @package App\Models
 */
class VicidialStatusGroup extends Model
{
	protected $table = 'vicidial_status_groups';
	protected $primaryKey = 'status_group_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'status_group_notes',
		'user_group'
	];
}
