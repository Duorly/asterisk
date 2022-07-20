<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WwwPhrase
 * 
 * @property int $phrase_id
 * @property string|null $phrase_text
 * @property string $php_filename
 * @property string|null $php_directory
 * @property string|null $source
 * @property Carbon|null $insert_date
 *
 * @package App\Models
 */
class WwwPhrase extends Model
{
	protected $table = 'www_phrases';
	protected $primaryKey = 'phrase_id';
	public $timestamps = false;

	protected $dates = [
		'insert_date'
	];

	protected $fillable = [
		'phrase_text',
		'php_filename',
		'php_directory',
		'source',
		'insert_date'
	];
}
