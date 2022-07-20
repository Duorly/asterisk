<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ContactInformation
 * 
 * @property int $contact_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $office_num
 * @property string|null $cell_num
 * @property string|null $other_num1
 * @property string|null $other_num2
 * @property string|null $bu_name
 * @property string|null $department
 * @property string|null $group_name
 * @property string|null $job_title
 * @property string|null $location
 *
 * @package App\Models
 */
class ContactInformation extends Model
{
	protected $table = 'contact_information';
	protected $primaryKey = 'contact_id';
	public $timestamps = false;

	protected $fillable = [
		'first_name',
		'last_name',
		'office_num',
		'cell_num',
		'other_num1',
		'other_num2',
		'bu_name',
		'department',
		'group_name',
		'job_title',
		'location'
	];
}
