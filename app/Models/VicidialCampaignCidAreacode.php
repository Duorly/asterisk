<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCampaignCidAreacode
 * 
 * @property string $campaign_id
 * @property string $areacode
 * @property string|null $outbound_cid
 * @property string|null $active
 * @property string|null $cid_description
 * @property int|null $call_count_today
 *
 * @package App\Models
 */
class VicidialCampaignCidAreacode extends Model
{
	protected $table = 'vicidial_campaign_cid_areacodes';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'call_count_today' => 'int'
	];

	protected $fillable = [
		'active',
		'cid_description',
		'call_count_today'
	];
}
