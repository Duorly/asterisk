<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDidRaExtension
 * 
 * @property int $did_id
 * @property string|null $user_start
 * @property string|null $extension
 * @property string|null $description
 * @property string|null $active
 * @property int|null $call_count_today
 *
 * @package App\Models
 */
class VicidialDidRaExtension extends Model
{
	protected $table = 'vicidial_did_ra_extensions';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'did_id' => 'int',
		'call_count_today' => 'int'
	];

	protected $fillable = [
		'description',
		'active',
		'call_count_today'
	];
}
