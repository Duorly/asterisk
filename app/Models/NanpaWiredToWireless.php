<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NanpaWiredToWireless
 * 
 * @property string $phone
 *
 * @package App\Models
 */
class NanpaWiredToWireless extends Model
{
	protected $table = 'nanpa_wired_to_wireless';
	protected $primaryKey = 'phone';
	public $incrementing = false;
	public $timestamps = false;
}
