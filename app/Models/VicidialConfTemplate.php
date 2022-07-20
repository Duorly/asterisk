<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialConfTemplate
 * 
 * @property string $template_id
 * @property string $template_name
 * @property string|null $template_contents
 * @property string|null $user_group
 *
 * @package App\Models
 */
class VicidialConfTemplate extends Model
{
	protected $table = 'vicidial_conf_templates';
	protected $primaryKey = 'template_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'template_name',
		'template_contents',
		'user_group'
	];
}
