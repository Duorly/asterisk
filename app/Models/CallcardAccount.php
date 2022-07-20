<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CallcardAccount
 * 
 * @property string $card_id
 * @property string $pin
 * @property string|null $status
 * @property int|null $balance_minutes
 * @property string|null $inbound_group_id
 *
 * @package App\Models
 */
class CallcardAccount extends Model
{
	protected $table = 'callcard_accounts';
	protected $primaryKey = 'card_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'balance_minutes' => 'int'
	];

	protected $fillable = [
		'pin',
		'status',
		'balance_minutes',
		'inbound_group_id'
	];
}
