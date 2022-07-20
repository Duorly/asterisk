<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialScreenColor
 * 
 * @property string $colors_id
 * @property string|null $colors_name
 * @property string|null $active
 * @property string|null $menu_background
 * @property string|null $frame_background
 * @property string|null $std_row1_background
 * @property string|null $std_row2_background
 * @property string|null $std_row3_background
 * @property string|null $std_row4_background
 * @property string|null $std_row5_background
 * @property string|null $alt_row1_background
 * @property string|null $alt_row2_background
 * @property string|null $alt_row3_background
 * @property string|null $user_group
 * @property string|null $web_logo
 * @property string|null $button_color
 *
 * @package App\Models
 */
class VicidialScreenColor extends Model
{
	protected $table = 'vicidial_screen_colors';
	protected $primaryKey = 'colors_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'colors_name',
		'active',
		'menu_background',
		'frame_background',
		'std_row1_background',
		'std_row2_background',
		'std_row3_background',
		'std_row4_background',
		'std_row5_background',
		'alt_row1_background',
		'alt_row2_background',
		'alt_row3_background',
		'user_group',
		'web_logo',
		'button_color'
	];
}
