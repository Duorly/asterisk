<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCampaignsListMix
 * 
 * @property string $vcl_id
 * @property string|null $vcl_name
 * @property string|null $campaign_id
 * @property string|null $list_mix_container
 * @property string|null $mix_method
 * @property string|null $status
 *
 * @package App\Models
 */
class VicidialCampaignsListMix extends Model
{
	protected $table = 'vicidial_campaigns_list_mix';
	protected $primaryKey = 'vcl_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'vcl_name',
		'campaign_id',
		'list_mix_container',
		'mix_method',
		'status'
	];
}
