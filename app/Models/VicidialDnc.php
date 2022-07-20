<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialDnc
 * 
 * @property string $phone_number
 *
 * @package App\Models
 */
class VicidialDnc extends Model
{
	protected $table = 'vicidial_dnc';
	protected $primaryKey = 'phone_number';
	public $incrementing = false;
	public $timestamps = false;
}
