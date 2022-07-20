<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialApiUrlsArchive
 * 
 * @property int $api_id
 * @property Carbon|null $api_date
 * @property string|null $remote_ip
 * @property string|null $url
 *
 * @package App\Models
 */
class VicidialApiUrlsArchive extends Model
{
	protected $table = 'vicidial_api_urls_archive';
	protected $primaryKey = 'api_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'api_id' => 'int'
	];

	protected $dates = [
		'api_date'
	];

	protected $fillable = [
		'api_date',
		'remote_ip',
		'url'
	];
}
