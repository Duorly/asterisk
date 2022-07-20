<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QualityControlCheckpointLog
 * 
 * @property int $qc_checkpoint_log_id
 * @property int|null $qc_log_id
 * @property string|null $campaign_id
 * @property string|null $group_id
 * @property int|null $list_id
 * @property string|null $qc_scorecard_id
 * @property int|null $checkpoint_row_id
 * @property string|null $checkpoint_text
 * @property string|null $checkpoint_text_presets
 * @property int|null $checkpoint_rank
 * @property int|null $checkpoint_points
 * @property string|null $instant_fail
 * @property string|null $instant_fail_value
 * @property int|null $checkpoint_points_earned
 * @property string|null $qc_agent
 * @property string|null $checkpoint_comment_agent
 *
 * @package App\Models
 */
class QualityControlCheckpointLog extends Model
{
	protected $table = 'quality_control_checkpoint_log';
	protected $primaryKey = 'qc_checkpoint_log_id';
	public $timestamps = false;

	protected $casts = [
		'qc_log_id' => 'int',
		'list_id' => 'int',
		'checkpoint_row_id' => 'int',
		'checkpoint_rank' => 'int',
		'checkpoint_points' => 'int',
		'checkpoint_points_earned' => 'int'
	];

	protected $fillable = [
		'qc_log_id',
		'campaign_id',
		'group_id',
		'list_id',
		'qc_scorecard_id',
		'checkpoint_row_id',
		'checkpoint_text',
		'checkpoint_text_presets',
		'checkpoint_rank',
		'checkpoint_points',
		'instant_fail',
		'instant_fail_value',
		'checkpoint_points_earned',
		'qc_agent',
		'checkpoint_comment_agent'
	];
}
