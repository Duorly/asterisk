<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialComment
 * 
 * @property int $comment_id
 * @property int $lead_id
 * @property string $user_id
 * @property Carbon $timestamp
 * @property int $list_id
 * @property string $campaign_id
 * @property string $comment
 * @property bool|null $hidden
 * @property int|null $hidden_user_id
 * @property Carbon|null $hidden_timestamp
 * @property int|null $unhidden_user_id
 * @property Carbon|null $unhidden_timestamp
 *
 * @package App\Models
 */
class VicidialComment extends Model
{
	protected $table = 'vicidial_comments';
	protected $primaryKey = 'comment_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'list_id' => 'int',
		'hidden' => 'bool',
		'hidden_user_id' => 'int',
		'unhidden_user_id' => 'int'
	];

	protected $dates = [
		'timestamp',
		'hidden_timestamp',
		'unhidden_timestamp'
	];

	protected $fillable = [
		'lead_id',
		'user_id',
		'timestamp',
		'list_id',
		'campaign_id',
		'comment',
		'hidden',
		'hidden_user_id',
		'hidden_timestamp',
		'unhidden_user_id',
		'unhidden_timestamp'
	];
}
