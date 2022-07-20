<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCidGroup
 * 
 * @property string $cid_group_id
 * @property string|null $cid_group_notes
 * @property string|null $cid_group_type
 * @property string|null $user_group
 * @property int|null $cid_auto_rotate_minutes
 * @property int|null $cid_auto_rotate_minimum
 * @property int|null $cid_auto_rotate_calls
 * @property Carbon|null $cid_last_auto_rotate
 * @property string|null $cid_auto_rotate_cid
 *
 * @package App\Models
 */
class VicidialCidGroup extends Model
{
	protected $table = 'vicidial_cid_groups';
	protected $primaryKey = 'cid_group_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'cid_auto_rotate_minutes' => 'int',
		'cid_auto_rotate_minimum' => 'int',
		'cid_auto_rotate_calls' => 'int'
	];

	protected $dates = [
		'cid_last_auto_rotate'
	];

	protected $fillable = [
		'cid_group_notes',
		'cid_group_type',
		'user_group',
		'cid_auto_rotate_minutes',
		'cid_auto_rotate_minimum',
		'cid_auto_rotate_calls',
		'cid_last_auto_rotate',
		'cid_auto_rotate_cid'
	];
}
