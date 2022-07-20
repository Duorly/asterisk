<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class QualityControlScorecard
 * 
 * @property string $qc_scorecard_id
 * @property string|null $scorecard_name
 * @property string|null $active
 * @property int|null $passing_score
 * @property Carbon $last_modified
 *
 * @package App\Models
 */
class QualityControlScorecard extends Model
{
	protected $table = 'quality_control_scorecards';
	protected $primaryKey = 'qc_scorecard_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'passing_score' => 'int'
	];

	protected $dates = [
		'last_modified'
	];

	protected $fillable = [
		'scorecard_name',
		'active',
		'passing_score',
		'last_modified'
	];
}
