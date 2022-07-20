<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialTtsPrompt
 * 
 * @property string $tts_id
 * @property string|null $tts_name
 * @property string|null $active
 * @property string|null $tts_text
 * @property string|null $tts_voice
 * @property string|null $user_group
 *
 * @package App\Models
 */
class VicidialTtsPrompt extends Model
{
	protected $table = 'vicidial_tts_prompts';
	protected $primaryKey = 'tts_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'tts_name',
		'active',
		'tts_text',
		'tts_voice',
		'user_group'
	];
}
