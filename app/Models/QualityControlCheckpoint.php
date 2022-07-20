<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QualityControlCheckpoint
 * 
 * @property int $checkpoint_row_id
 * @property string|null $qc_scorecard_id
 * @property string|null $checkpoint_text
 * @property string|null $checkpoint_text_presets
 * @property int|null $checkpoint_rank
 * @property int|null $checkpoint_points
 * @property string|null $instant_fail
 * @property string|null $admin_notes
 * @property string|null $active
 * @property string|null $campaign_ids
 * @property string|null $ingroups
 * @property string|null $list_ids
 * @property Carbon|null $create_date
 * @property string|null $create_user
 * @property Carbon $modify_date
 * @property string|null $modify_user
 *
 * @package App\Models
 */
class QualityControlCheckpoint extends Model
{
	protected $table = 'quality_control_checkpoints';
	protected $primaryKey = 'checkpoint_row_id';
	public $timestamps = false;

	protected $casts = [
		'checkpoint_rank' => 'int',
		'checkpoint_points' => 'int'
	];

	protected $dates = [
		'create_date',
		'modify_date'
	];

	protected $fillable = [
		'qc_scorecard_id',
		'checkpoint_text',
		'checkpoint_text_presets',
		'checkpoint_rank',
		'checkpoint_points',
		'instant_fail',
		'admin_notes',
		'active',
		'campaign_ids',
		'ingroups',
		'list_ids',
		'create_date',
		'create_user',
		'modify_date',
		'modify_user'
	];
}
