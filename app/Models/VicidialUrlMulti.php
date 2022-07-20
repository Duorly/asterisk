<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialUrlMulti
 * 
 * @property int $url_id
 * @property string $campaign_id
 * @property string|null $entry_type
 * @property string|null $active
 * @property string|null $url_type
 * @property int|null $url_rank
 * @property string|null $url_statuses
 * @property string|null $url_description
 * @property string|null $url_address
 * @property string|null $url_lists
 *
 * @package App\Models
 */
class VicidialUrlMulti extends Model
{
	protected $table = 'vicidial_url_multi';
	protected $primaryKey = 'url_id';
	public $timestamps = false;

	protected $casts = [
		'url_rank' => 'int'
	];

	protected $fillable = [
		'campaign_id',
		'entry_type',
		'active',
		'url_type',
		'url_rank',
		'url_statuses',
		'url_description',
		'url_address',
		'url_lists'
	];
}
