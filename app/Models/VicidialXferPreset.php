<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialXferPreset
 * 
 * @property string $campaign_id
 * @property string $preset_name
 * @property string $preset_number
 * @property string|null $preset_dtmf
 * @property string|null $preset_hide_number
 *
 * @package App\Models
 */
class VicidialXferPreset extends Model
{
	protected $table = 'vicidial_xfer_presets';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'campaign_id',
		'preset_name',
		'preset_number',
		'preset_dtmf',
		'preset_hide_number'
	];
}
