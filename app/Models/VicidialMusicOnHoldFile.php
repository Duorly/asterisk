<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialMusicOnHoldFile
 * 
 * @property string $filename
 * @property string $moh_id
 * @property int|null $rank
 *
 * @package App\Models
 */
class VicidialMusicOnHoldFile extends Model
{
	protected $table = 'vicidial_music_on_hold_files';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'rank' => 'int'
	];

	protected $fillable = [
		'rank'
	];
}
