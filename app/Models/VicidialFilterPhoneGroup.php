<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialFilterPhoneGroup
 * 
 * @property string $filter_phone_group_id
 * @property string $filter_phone_group_name
 * @property string|null $filter_phone_group_description
 * @property string|null $user_group
 *
 * @package App\Models
 */
class VicidialFilterPhoneGroup extends Model
{
	protected $table = 'vicidial_filter_phone_groups';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'filter_phone_group_id',
		'filter_phone_group_name',
		'filter_phone_group_description',
		'user_group'
	];
}
