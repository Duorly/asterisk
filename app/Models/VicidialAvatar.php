<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAvatar
 * 
 * @property string $avatar_id
 * @property string|null $avatar_name
 * @property string|null $avatar_notes
 * @property string|null $avatar_api_user
 * @property string|null $avatar_api_pass
 * @property string|null $active
 * @property string|null $audio_functions
 * @property string|null $audio_display
 * @property string|null $user_group
 * @property string|null $soundboard_layout
 * @property int|null $columns_limit
 *
 * @package App\Models
 */
class VicidialAvatar extends Model
{
	protected $table = 'vicidial_avatars';
	protected $primaryKey = 'avatar_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'columns_limit' => 'int'
	];

	protected $fillable = [
		'avatar_name',
		'avatar_notes',
		'avatar_api_user',
		'avatar_api_pass',
		'active',
		'audio_functions',
		'audio_display',
		'user_group',
		'soundboard_layout',
		'columns_limit'
	];
}
