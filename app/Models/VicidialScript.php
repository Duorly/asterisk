<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialScript
 * 
 * @property string $script_id
 * @property string|null $script_name
 * @property string|null $script_comments
 * @property string|null $script_text
 * @property string|null $active
 * @property string|null $user_group
 * @property string|null $script_color
 *
 * @package App\Models
 */
class VicidialScript extends Model
{
	protected $table = 'vicidial_scripts';
	protected $primaryKey = 'script_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'script_name',
		'script_comments',
		'script_text',
		'active',
		'user_group',
		'script_color'
	];
}
