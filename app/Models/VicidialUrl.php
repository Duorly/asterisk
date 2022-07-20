<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialUrl
 * 
 * @property int $url_id
 * @property string|null $url
 *
 * @package App\Models
 */
class VicidialUrl extends Model
{
	protected $table = 'vicidial_urls';
	protected $primaryKey = 'url_id';
	public $timestamps = false;

	protected $fillable = [
		'url'
	];
}
