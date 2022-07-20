<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialMusicOnHold
 * 
 * @property string $moh_id
 * @property string|null $moh_name
 * @property string|null $active
 * @property string|null $random
 * @property string|null $remove
 * @property string|null $user_group
 *
 * @package App\Models
 */
class VicidialMusicOnHold extends Model
{
	protected $table = 'vicidial_music_on_hold';
	protected $primaryKey = 'moh_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'moh_name',
		'active',
		'random',
		'remove',
		'user_group'
	];
}
