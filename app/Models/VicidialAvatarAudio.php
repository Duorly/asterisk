<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAvatarAudio
 * 
 * @property string $avatar_id
 * @property string $audio_filename
 * @property string|null $audio_name
 * @property int|null $rank
 * @property int|null $h_ord
 * @property int|null $level
 * @property string|null $parent_audio_filename
 * @property string|null $parent_rank
 * @property string|null $button_type
 * @property string|null $font_size
 *
 * @package App\Models
 */
class VicidialAvatarAudio extends Model
{
	protected $table = 'vicidial_avatar_audio';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rank' => 'int',
		'h_ord' => 'int',
		'level' => 'int'
	];

	protected $fillable = [
		'avatar_id',
		'audio_filename',
		'audio_name',
		'rank',
		'h_ord',
		'level',
		'parent_audio_filename',
		'parent_rank',
		'button_type',
		'font_size'
	];
}
