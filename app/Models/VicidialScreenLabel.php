<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialScreenLabel
 * 
 * @property string $label_id
 * @property string|null $label_name
 * @property string|null $active
 * @property string|null $label_hide_field_logs
 * @property string|null $label_title
 * @property string|null $label_first_name
 * @property string|null $label_middle_initial
 * @property string|null $label_last_name
 * @property string|null $label_address1
 * @property string|null $label_address2
 * @property string|null $label_address3
 * @property string|null $label_city
 * @property string|null $label_state
 * @property string|null $label_province
 * @property string|null $label_postal_code
 * @property string|null $label_vendor_lead_code
 * @property string|null $label_gender
 * @property string|null $label_phone_number
 * @property string|null $label_phone_code
 * @property string|null $label_alt_phone
 * @property string|null $label_security_phrase
 * @property string|null $label_email
 * @property string|null $label_comments
 * @property string|null $user_group
 * @property string|null $label_lead_id
 * @property string|null $label_list_id
 * @property string|null $label_entry_date
 * @property string|null $label_gmt_offset_now
 * @property string|null $label_source_id
 * @property string|null $label_called_since_last_reset
 * @property string|null $label_status
 * @property string|null $label_user
 * @property string|null $label_date_of_birth
 * @property string|null $label_country_code
 * @property string|null $label_last_local_call_time
 * @property string|null $label_called_count
 * @property string|null $label_rank
 * @property string|null $label_owner
 * @property string|null $label_entry_list_id
 *
 * @package App\Models
 */
class VicidialScreenLabel extends Model
{
	protected $table = 'vicidial_screen_labels';
	protected $primaryKey = 'label_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'label_name',
		'active',
		'label_hide_field_logs',
		'label_title',
		'label_first_name',
		'label_middle_initial',
		'label_last_name',
		'label_address1',
		'label_address2',
		'label_address3',
		'label_city',
		'label_state',
		'label_province',
		'label_postal_code',
		'label_vendor_lead_code',
		'label_gender',
		'label_phone_number',
		'label_phone_code',
		'label_alt_phone',
		'label_security_phrase',
		'label_email',
		'label_comments',
		'user_group',
		'label_lead_id',
		'label_list_id',
		'label_entry_date',
		'label_gmt_offset_now',
		'label_source_id',
		'label_called_since_last_reset',
		'label_status',
		'label_user',
		'label_date_of_birth',
		'label_country_code',
		'label_last_local_call_time',
		'label_called_count',
		'label_rank',
		'label_owner',
		'label_entry_list_id'
	];
}
