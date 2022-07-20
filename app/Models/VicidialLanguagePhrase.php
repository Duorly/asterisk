<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLanguagePhrase
 * 
 * @property int $phrase_id
 * @property string $language_id
 * @property string|null $english_text
 * @property string|null $translated_text
 * @property string|null $source
 * @property Carbon $modify_date
 *
 * @package App\Models
 */
class VicidialLanguagePhrase extends Model
{
	protected $table = 'vicidial_language_phrases';
	protected $primaryKey = 'phrase_id';
	public $timestamps = false;

	protected $dates = [
		'modify_date'
	];

	protected $fillable = [
		'language_id',
		'english_text',
		'translated_text',
		'source',
		'modify_date'
	];
}
