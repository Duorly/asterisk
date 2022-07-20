<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class NanpaWirelessToWired
 * 
 * @property string $phone
 *
 * @package App\Models
 */
class NanpaWirelessToWired extends Model
{
	protected $table = 'nanpa_wireless_to_wired';
	protected $primaryKey = 'phone';
	public $incrementing = false;
	public $timestamps = false;
}
