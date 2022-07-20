<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLanguage
 * 
 * @property string $language_id
 * @property string|null $language_code
 * @property string|null $language_description
 * @property string|null $user_group
 * @property Carbon $modify_date
 * @property string|null $active
 *
 * @package App\Models
 */
class VicidialLanguage extends Model
{
	protected $table = 'vicidial_languages';
	protected $primaryKey = 'language_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'modify_date'
	];

	protected $fillable = [
		'language_code',
		'language_description',
		'user_group',
		'modify_date',
		'active'
	];
}
