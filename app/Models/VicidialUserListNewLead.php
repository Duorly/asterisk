<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialUserListNewLead
 * 
 * @property string $user
 * @property int|null $list_id
 * @property int|null $user_override
 * @property int|null $new_count
 *
 * @package App\Models
 */
class VicidialUserListNewLead extends Model
{
	protected $table = 'vicidial_user_list_new_lead';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'list_id' => 'int',
		'user_override' => 'int',
		'new_count' => 'int'
	];

	protected $fillable = [
		'user_override',
		'new_count'
	];
}
