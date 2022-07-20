<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCampaignDnc
 * 
 * @property string $phone_number
 * @property string $campaign_id
 *
 * @package App\Models
 */
class VicidialCampaignDnc extends Model
{
	protected $table = 'vicidial_campaign_dnc';
	public $incrementing = false;
	public $timestamps = false;
}
