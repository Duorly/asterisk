<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialListsField
 * 
 * @property int $field_id
 * @property int $list_id
 * @property string|null $field_label
 * @property string|null $field_name
 * @property string|null $field_description
 * @property int|null $field_rank
 * @property string|null $field_help
 * @property string|null $field_type
 * @property string|null $field_options
 * @property int|null $field_size
 * @property int|null $field_max
 * @property string|null $field_default
 * @property int|null $field_cost
 * @property string|null $field_required
 * @property string|null $name_position
 * @property string|null $multi_position
 * @property int|null $field_order
 * @property string|null $field_encrypt
 * @property string|null $field_show_hide
 * @property string|null $field_duplicate
 *
 * @package App\Models
 */
class VicidialListsField extends Model
{
	protected $table = 'vicidial_lists_fields';
	protected $primaryKey = 'field_id';
	public $timestamps = false;

	protected $casts = [
		'list_id' => 'int',
		'field_rank' => 'int',
		'field_size' => 'int',
		'field_max' => 'int',
		'field_cost' => 'int',
		'field_order' => 'int'
	];

	protected $fillable = [
		'list_id',
		'field_label',
		'field_name',
		'field_description',
		'field_rank',
		'field_help',
		'field_type',
		'field_options',
		'field_size',
		'field_max',
		'field_default',
		'field_cost',
		'field_required',
		'name_position',
		'multi_position',
		'field_order',
		'field_encrypt',
		'field_show_hide',
		'field_duplicate'
	];
}
