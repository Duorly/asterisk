<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialHopper
 * 
 * @property int $hopper_id
 * @property int $lead_id
 * @property string|null $campaign_id
 * @property string|null $status
 * @property string|null $user
 * @property int $list_id
 * @property float|null $gmt_offset_now
 * @property string|null $state
 * @property string|null $alt_dial
 * @property int|null $priority
 * @property string|null $source
 * @property string|null $vendor_lead_code
 *
 * @package App\Models
 */
class VicidialHopper extends Model
{
	protected $table = 'vicidial_hopper';
	protected $primaryKey = 'hopper_id';
	public $timestamps = false;

	protected $casts = [
		'lead_id' => 'int',
		'list_id' => 'int',
		'gmt_offset_now' => 'float',
		'priority' => 'int'
	];

	protected $fillable = [
		'lead_id',
		'campaign_id',
		'status',
		'user',
		'list_id',
		'gmt_offset_now',
		'state',
		'alt_dial',
		'priority',
		'source',
		'vendor_lead_code'
	];
}
