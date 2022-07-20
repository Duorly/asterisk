<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialFilterPhoneNumber
 * 
 * @property string $phone_number
 * @property string $filter_phone_group_id
 *
 * @package App\Models
 */
class VicidialFilterPhoneNumber extends Model
{
	protected $table = 'vicidial_filter_phone_numbers';
	public $incrementing = false;
	public $timestamps = false;
}
