<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class GroupsAlias
 * 
 * @property string $group_alias_id
 * @property string|null $group_alias_name
 * @property string|null $caller_id_number
 * @property string|null $caller_id_name
 * @property string|null $active
 * @property string|null $user_group
 *
 * @package App\Models
 */
class GroupsAlias extends Model
{
	protected $table = 'groups_alias';
	protected $primaryKey = 'group_alias_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'group_alias_name',
		'caller_id_number',
		'caller_id_name',
		'active',
		'user_group'
	];
}
