<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialHtmlCacheStat
 * 
 * @property string $stats_type
 * @property string $stats_id
 * @property Carbon $stats_date
 * @property int|null $stats_count
 * @property string|null $stats_html
 *
 * @package App\Models
 */
class VicidialHtmlCacheStat extends Model
{
	protected $table = 'vicidial_html_cache_stats';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'stats_count' => 'int'
	];

	protected $dates = [
		'stats_date'
	];

	protected $fillable = [
		'stats_date',
		'stats_count',
		'stats_html'
	];
}
