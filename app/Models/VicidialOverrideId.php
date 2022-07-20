<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialOverrideId
 * 
 * @property string $id_table
 * @property string|null $active
 * @property int|null $value
 *
 * @package App\Models
 */
class VicidialOverrideId extends Model
{
	protected $table = 'vicidial_override_ids';
	protected $primaryKey = 'id_table';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'value' => 'int'
	];

	protected $fillable = [
		'active',
		'value'
	];
}
