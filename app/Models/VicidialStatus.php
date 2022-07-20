<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialStatus
 * 
 * @property string $status
 * @property string|null $status_name
 * @property string|null $selectable
 * @property string|null $human_answered
 * @property string|null $category
 * @property string|null $sale
 * @property string|null $dnc
 * @property string|null $customer_contact
 * @property string|null $not_interested
 * @property string|null $unworkable
 * @property string|null $scheduled_callback
 * @property string|null $completed
 * @property int|null $min_sec
 * @property int|null $max_sec
 * @property string|null $answering_machine
 *
 * @package App\Models
 */
class VicidialStatus extends Model
{
	protected $table = 'vicidial_statuses';
	protected $primaryKey = 'status';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'min_sec' => 'int',
		'max_sec' => 'int'
	];

	protected $fillable = [
		'status_name',
		'selectable',
		'human_answered',
		'category',
		'sale',
		'dnc',
		'customer_contact',
		'not_interested',
		'unworkable',
		'scheduled_callback',
		'completed',
		'min_sec',
		'max_sec',
		'answering_machine'
	];
}
