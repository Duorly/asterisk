<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialAmmMulti
 * 
 * @property int $amm_id
 * @property string $campaign_id
 * @property string|null $entry_type
 * @property string|null $active
 * @property string|null $amm_field
 * @property int|null $amm_rank
 * @property string|null $amm_wildcard
 * @property string|null $amm_filename
 * @property string|null $amm_description
 *
 * @package App\Models
 */
class VicidialAmmMulti extends Model
{
	protected $table = 'vicidial_amm_multi';
	protected $primaryKey = 'amm_id';
	public $timestamps = false;

	protected $casts = [
		'amm_rank' => 'int'
	];

	protected $fillable = [
		'campaign_id',
		'entry_type',
		'active',
		'amm_field',
		'amm_rank',
		'amm_wildcard',
		'amm_filename',
		'amm_description'
	];
}
