<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialLeadFilter
 * 
 * @property string $lead_filter_id
 * @property string $lead_filter_name
 * @property string|null $lead_filter_comments
 * @property string|null $lead_filter_sql
 * @property string|null $user_group
 *
 * @package App\Models
 */
class VicidialLeadFilter extends Model
{
	protected $table = 'vicidial_lead_filters';
	protected $primaryKey = 'lead_filter_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'lead_filter_name',
		'lead_filter_comments',
		'lead_filter_sql',
		'user_group'
	];
}
