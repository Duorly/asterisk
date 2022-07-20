<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialListsCustom
 * 
 * @property int $list_id
 * @property bool|null $audit_comments
 * @property bool|null $audit_comments_enabled
 *
 * @package App\Models
 */
class VicidialListsCustom extends Model
{
	protected $table = 'vicidial_lists_custom';
	protected $primaryKey = 'list_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'list_id' => 'int',
		'audit_comments' => 'bool',
		'audit_comments_enabled' => 'bool'
	];

	protected $fillable = [
		'audit_comments',
		'audit_comments_enabled'
	];
}
