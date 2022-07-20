<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AudioStoreDetail
 * 
 * @property string $audio_filename
 * @property string|null $audio_format
 * @property int|null $audio_filesize
 * @property int|null $audio_epoch
 * @property int|null $audio_length
 * @property string|null $wav_format_details
 * @property string|null $wav_asterisk_valid
 *
 * @package App\Models
 */
class AudioStoreDetail extends Model
{
	protected $table = 'audio_store_details';
	protected $primaryKey = 'audio_filename';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'audio_filesize' => 'int',
		'audio_epoch' => 'int',
		'audio_length' => 'int'
	];

	protected $fillable = [
		'audio_format',
		'audio_filesize',
		'audio_epoch',
		'audio_length',
		'wav_format_details',
		'wav_asterisk_valid'
	];
}
