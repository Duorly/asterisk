<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCustomLeadloaderTemplate
 * 
 * @property string $template_id
 * @property string|null $template_name
 * @property string|null $template_description
 * @property int|null $list_id
 * @property string|null $standard_variables
 * @property string|null $custom_table
 * @property string|null $custom_variables
 * @property string|null $template_statuses
 *
 * @package App\Models
 */
class VicidialCustomLeadloaderTemplate extends Model
{
	protected $table = 'vicidial_custom_leadloader_templates';
	protected $primaryKey = 'template_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'list_id' => 'int'
	];

	protected $fillable = [
		'template_name',
		'template_description',
		'list_id',
		'standard_variables',
		'custom_table',
		'custom_variables',
		'template_statuses'
	];
}
