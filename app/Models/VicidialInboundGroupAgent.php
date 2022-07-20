<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialInboundGroupAgent
 * 
 * @property string|null $user
 * @property string|null $group_id
 * @property bool|null $group_rank
 * @property bool|null $group_weight
 * @property int|null $calls_today
 * @property string|null $group_web_vars
 * @property int|null $group_grade
 * @property string|null $group_type
 * @property int|null $calls_today_filtered
 *
 * @package App\Models
 */
class VicidialInboundGroupAgent extends Model
{
	protected $table = 'vicidial_inbound_group_agents';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'group_rank' => 'bool',
		'group_weight' => 'bool',
		'calls_today' => 'int',
		'group_grade' => 'int',
		'calls_today_filtered' => 'int'
	];

	protected $fillable = [
		'group_rank',
		'group_weight',
		'calls_today',
		'group_web_vars',
		'group_grade',
		'group_type',
		'calls_today_filtered'
	];
}
