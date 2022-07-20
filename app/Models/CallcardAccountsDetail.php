<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CallcardAccountsDetail
 * 
 * @property string $card_id
 * @property string|null $run
 * @property string|null $batch
 * @property string|null $pack
 * @property string|null $sequence
 * @property string|null $status
 * @property int|null $balance_minutes
 * @property string|null $initial_value
 * @property int|null $initial_minutes
 * @property string|null $note_purchase_order
 * @property string|null $note_printer
 * @property string|null $note_did
 * @property string|null $inbound_group_id
 * @property string|null $note_language
 * @property string|null $note_name
 * @property string|null $note_comments
 * @property string|null $create_user
 * @property string|null $activate_user
 * @property string|null $used_user
 * @property string|null $void_user
 * @property Carbon|null $create_time
 * @property Carbon|null $activate_time
 * @property Carbon|null $used_time
 * @property Carbon|null $void_time
 *
 * @package App\Models
 */
class CallcardAccountsDetail extends Model
{
	protected $table = 'callcard_accounts_details';
	protected $primaryKey = 'card_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'balance_minutes' => 'int',
		'initial_minutes' => 'int'
	];

	protected $dates = [
		'create_time',
		'activate_time',
		'used_time',
		'void_time'
	];

	protected $fillable = [
		'run',
		'batch',
		'pack',
		'sequence',
		'status',
		'balance_minutes',
		'initial_value',
		'initial_minutes',
		'note_purchase_order',
		'note_printer',
		'note_did',
		'inbound_group_id',
		'note_language',
		'note_name',
		'note_comments',
		'create_user',
		'activate_user',
		'used_user',
		'void_user',
		'create_time',
		'activate_time',
		'used_time',
		'void_time'
	];
}
