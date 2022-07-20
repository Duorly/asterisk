<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialTwoFactorAuth
 * 
 * @property Carbon|null $auth_date
 * @property Carbon|null $auth_exp_date
 * @property string|null $user
 * @property string|null $auth_stage
 * @property string|null $auth_code
 * @property Carbon|null $auth_code_exp_date
 * @property string|null $auth_method
 * @property int|null $auth_attempts
 *
 * @package App\Models
 */
class VicidialTwoFactorAuth extends Model
{
	protected $table = 'vicidial_two_factor_auth';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'auth_attempts' => 'int'
	];

	protected $dates = [
		'auth_date',
		'auth_exp_date',
		'auth_code_exp_date'
	];

	protected $fillable = [
		'auth_date',
		'auth_exp_date',
		'user',
		'auth_stage',
		'auth_code',
		'auth_code_exp_date',
		'auth_method',
		'auth_attempts'
	];
}
