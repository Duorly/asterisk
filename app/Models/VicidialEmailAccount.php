<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialEmailAccount
 * 
 * @property string $email_account_id
 * @property string|null $email_account_name
 * @property string|null $email_account_description
 * @property string|null $user_group
 * @property string|null $protocol
 * @property string|null $email_replyto_address
 * @property string|null $email_account_server
 * @property string|null $email_account_user
 * @property string|null $email_account_pass
 * @property string|null $pop3_auth_mode
 * @property string|null $active
 * @property int|null $email_frequency_check_mins
 * @property string|null $group_id
 * @property int|null $default_list_id
 * @property string|null $call_handle_method
 * @property string|null $agent_search_method
 * @property string|null $campaign_id
 * @property int|null $list_id
 * @property string|null $email_account_type
 *
 * @package App\Models
 */
class VicidialEmailAccount extends Model
{
	protected $table = 'vicidial_email_accounts';
	protected $primaryKey = 'email_account_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'email_frequency_check_mins' => 'int',
		'default_list_id' => 'int',
		'list_id' => 'int'
	];

	protected $fillable = [
		'email_account_name',
		'email_account_description',
		'user_group',
		'protocol',
		'email_replyto_address',
		'email_account_server',
		'email_account_user',
		'email_account_pass',
		'pop3_auth_mode',
		'active',
		'email_frequency_check_mins',
		'group_id',
		'default_list_id',
		'call_handle_method',
		'agent_search_method',
		'campaign_id',
		'list_id',
		'email_account_type'
	];
}
