<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialXferStat
 * 
 * @property string $campaign_id
 * @property string $preset_name
 * @property int|null $xfer_count
 *
 * @package App\Models
 */
class VicidialXferStat extends Model
{
	protected $table = 'vicidial_xfer_stats';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'xfer_count' => 'int'
	];

	protected $fillable = [
		'campaign_id',
		'preset_name',
		'xfer_count'
	];
}
