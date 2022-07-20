<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCallMenu
 * 
 * @property string $menu_id
 * @property string|null $menu_name
 * @property string|null $menu_prompt
 * @property int|null $menu_timeout
 * @property string|null $menu_timeout_prompt
 * @property string|null $menu_invalid_prompt
 * @property bool|null $menu_repeat
 * @property string|null $menu_time_check
 * @property string|null $call_time_id
 * @property string|null $track_in_vdac
 * @property string|null $custom_dialplan_entry
 * @property string|null $tracking_group
 * @property string|null $dtmf_log
 * @property string|null $dtmf_field
 * @property string|null $user_group
 * @property string|null $qualify_sql
 * @property string|null $alt_dtmf_log
 * @property int|null $question
 * @property string|null $answer_signal
 *
 * @package App\Models
 */
class VicidialCallMenu extends Model
{
	protected $table = 'vicidial_call_menu';
	protected $primaryKey = 'menu_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'menu_timeout' => 'int',
		'menu_repeat' => 'bool',
		'question' => 'int'
	];

	protected $fillable = [
		'menu_name',
		'menu_prompt',
		'menu_timeout',
		'menu_timeout_prompt',
		'menu_invalid_prompt',
		'menu_repeat',
		'menu_time_check',
		'call_time_id',
		'track_in_vdac',
		'custom_dialplan_entry',
		'tracking_group',
		'dtmf_log',
		'dtmf_field',
		'user_group',
		'qualify_sql',
		'alt_dtmf_log',
		'question',
		'answer_signal'
	];
}
