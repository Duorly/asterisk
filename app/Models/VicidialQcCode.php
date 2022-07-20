<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialQcCode
 * 
 * @property string $code
 * @property string|null $code_name
 * @property string $qc_result_type
 *
 * @package App\Models
 */
class VicidialQcCode extends Model
{
	protected $table = 'vicidial_qc_codes';
	protected $primaryKey = 'code';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'code_name',
		'qc_result_type'
	];
}
