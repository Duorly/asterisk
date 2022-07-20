<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialPauseCode
 * 
 * @property string $pause_code
 * @property string|null $pause_code_name
 * @property string|null $billable
 * @property string|null $campaign_id
 * @property int|null $time_limit
 * @property string|null $require_mgr_approval
 *
 * @package App\Models
 */
class VicidialPauseCode extends Model
{
	protected $table = 'vicidial_pause_codes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'time_limit' => 'int'
	];

	protected $fillable = [
		'pause_code',
		'pause_code_name',
		'billable',
		'campaign_id',
		'time_limit',
		'require_mgr_approval'
	];
}
