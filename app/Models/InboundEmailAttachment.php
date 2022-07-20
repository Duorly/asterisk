<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class InboundEmailAttachment
 * 
 * @property int $attachment_id
 * @property int|null $email_row_id
 * @property string $filename
 * @property string|null $file_type
 * @property string|null $file_encoding
 * @property string|null $file_size
 * @property string $file_extension
 * @property string $file_contents
 *
 * @package App\Models
 */
class InboundEmailAttachment extends Model
{
	protected $table = 'inbound_email_attachments';
	protected $primaryKey = 'attachment_id';
	public $timestamps = false;

	protected $casts = [
		'email_row_id' => 'int'
	];

	protected $fillable = [
		'email_row_id',
		'filename',
		'file_type',
		'file_encoding',
		'file_size',
		'file_extension',
		'file_contents'
	];
}
