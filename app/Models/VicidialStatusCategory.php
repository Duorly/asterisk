<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialStatusCategory
 * 
 * @property string $vsc_id
 * @property string|null $vsc_name
 * @property string|null $vsc_description
 * @property string|null $tovdad_display
 * @property string|null $sale_category
 * @property string|null $dead_lead_category
 *
 * @package App\Models
 */
class VicidialStatusCategory extends Model
{
	protected $table = 'vicidial_status_categories';
	protected $primaryKey = 'vsc_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'vsc_name',
		'vsc_description',
		'tovdad_display',
		'sale_category',
		'dead_lead_category'
	];
}
