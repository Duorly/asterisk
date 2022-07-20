<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class HelpDocumentation
 * 
 * @property string $help_id
 * @property string|null $help_title
 * @property string|null $help_text
 *
 * @package App\Models
 */
class HelpDocumentation extends Model
{
	protected $table = 'help_documentation';
	protected $primaryKey = 'help_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'help_title',
		'help_text'
	];
}
