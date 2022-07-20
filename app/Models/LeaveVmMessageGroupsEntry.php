<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LeaveVmMessageGroupsEntry
 * 
 * @property string $leave_vm_message_group_id
 * @property string $audio_filename
 * @property string|null $audio_name
 * @property int|null $rank
 * @property string|null $time_start
 * @property string|null $time_end
 *
 * @package App\Models
 */
class LeaveVmMessageGroupsEntry extends Model
{
	protected $table = 'leave_vm_message_groups_entries';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rank' => 'int'
	];

	protected $fillable = [
		'leave_vm_message_group_id',
		'audio_filename',
		'audio_name',
		'rank',
		'time_start',
		'time_end'
	];
}
