<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialCallMenuOption
 * 
 * @property string $menu_id
 * @property string $option_value
 * @property string|null $option_description
 * @property string|null $option_route
 * @property string|null $option_route_value
 * @property string|null $option_route_value_context
 *
 * @package App\Models
 */
class VicidialCallMenuOption extends Model
{
	protected $table = 'vicidial_call_menu_options';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'option_description',
		'option_route',
		'option_route_value',
		'option_route_value_context'
	];
}
