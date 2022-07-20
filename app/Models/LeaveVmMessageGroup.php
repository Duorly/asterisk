<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class LeaveVmMessageGroup
 * 
 * @property string $leave_vm_message_group_id
 * @property string|null $leave_vm_message_group_notes
 * @property string|null $active
 * @property string|null $user_group
 *
 * @package App\Models
 */
class LeaveVmMessageGroup extends Model
{
	protected $table = 'leave_vm_message_groups';
	protected $primaryKey = 'leave_vm_message_group_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'leave_vm_message_group_notes',
		'active',
		'user_group'
	];
}
