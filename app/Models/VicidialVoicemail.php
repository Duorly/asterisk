<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialVoicemail
 * 
 * @property string $voicemail_id
 * @property string|null $active
 * @property string $pass
 * @property string $fullname
 * @property int|null $messages
 * @property int|null $old_messages
 * @property string|null $email
 * @property string|null $delete_vm_after_email
 * @property string|null $voicemail_timezone
 * @property string|null $voicemail_options
 * @property string|null $user_group
 * @property string|null $voicemail_greeting
 * @property string $on_login_report
 *
 * @package App\Models
 */
class VicidialVoicemail extends Model
{
	protected $table = 'vicidial_voicemail';
	protected $primaryKey = 'voicemail_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'messages' => 'int',
		'old_messages' => 'int'
	];

	protected $fillable = [
		'active',
		'pass',
		'fullname',
		'messages',
		'old_messages',
		'email',
		'delete_vm_after_email',
		'voicemail_timezone',
		'voicemail_options',
		'user_group',
		'voicemail_greeting',
		'on_login_report'
	];
}
