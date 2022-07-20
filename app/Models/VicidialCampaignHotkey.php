<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCampaignHotkey
 * 
 * @property string $status
 * @property string $hotkey
 * @property string|null $status_name
 * @property string|null $selectable
 * @property string|null $campaign_id
 *
 * @package App\Models
 */
class VicidialCampaignHotkey extends Model
{
	protected $table = 'vicidial_campaign_hotkeys';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'status',
		'hotkey',
		'status_name',
		'selectable',
		'campaign_id'
	];
}
