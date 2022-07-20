<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLeadRecycle
 * 
 * @property int $recycle_id
 * @property string|null $campaign_id
 * @property string $status
 * @property int|null $attempt_delay
 * @property int|null $attempt_maximum
 * @property string|null $active
 *
 * @package App\Models
 */
class VicidialLeadRecycle extends Model
{
	protected $table = 'vicidial_lead_recycle';
	protected $primaryKey = 'recycle_id';
	public $timestamps = false;

	protected $casts = [
		'attempt_delay' => 'int',
		'attempt_maximum' => 'int'
	];

	protected $fillable = [
		'campaign_id',
		'status',
		'attempt_delay',
		'attempt_maximum',
		'active'
	];
}
