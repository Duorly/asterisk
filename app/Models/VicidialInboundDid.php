<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialInboundDid
 * 
 * @property int $did_id
 * @property string $did_pattern
 * @property string|null $did_description
 * @property string|null $did_active
 * @property string|null $did_route
 * @property string|null $extension
 * @property string|null $exten_context
 * @property string|null $voicemail_ext
 * @property string|null $phone
 * @property string|null $server_ip
 * @property string|null $user
 * @property string|null $user_unavailable_action
 * @property string|null $user_route_settings_ingroup
 * @property string|null $group_id
 * @property string|null $call_handle_method
 * @property string|null $agent_search_method
 * @property int|null $list_id
 * @property string|null $campaign_id
 * @property string|null $phone_code
 * @property string|null $menu_id
 * @property string|null $record_call
 * @property string|null $filter_inbound_number
 * @property string|null $filter_phone_group_id
 * @property string|null $filter_url
 * @property string|null $filter_action
 * @property string|null $filter_extension
 * @property string|null $filter_exten_context
 * @property string|null $filter_voicemail_ext
 * @property string|null $filter_phone
 * @property string|null $filter_server_ip
 * @property string|null $filter_user
 * @property string|null $filter_user_unavailable_action
 * @property string|null $filter_user_route_settings_ingroup
 * @property string|null $filter_group_id
 * @property string|null $filter_call_handle_method
 * @property string|null $filter_agent_search_method
 * @property int|null $filter_list_id
 * @property string|null $filter_campaign_id
 * @property string|null $filter_phone_code
 * @property string|null $filter_menu_id
 * @property string|null $filter_clean_cid_number
 * @property string|null $custom_one
 * @property string|null $custom_two
 * @property string|null $custom_three
 * @property string|null $custom_four
 * @property string|null $custom_five
 * @property string|null $user_group
 * @property string|null $filter_dnc_campaign
 * @property string|null $filter_url_did_redirect
 * @property string|null $no_agent_ingroup_redirect
 * @property string|null $no_agent_ingroup_id
 * @property string|null $no_agent_ingroup_extension
 * @property string|null $pre_filter_phone_group_id
 * @property string|null $pre_filter_extension
 * @property int|null $entry_list_id
 * @property int|null $filter_entry_list_id
 * @property int|null $max_queue_ingroup_calls
 * @property string|null $max_queue_ingroup_id
 * @property string|null $max_queue_ingroup_extension
 * @property string|null $did_carrier_description
 * @property string|null $inbound_route_answer
 *
 * @package App\Models
 */
class VicidialInboundDid extends Model
{
	protected $table = 'vicidial_inbound_dids';
	protected $primaryKey = 'did_id';
	public $timestamps = false;

	protected $casts = [
		'list_id' => 'int',
		'filter_list_id' => 'int',
		'entry_list_id' => 'int',
		'filter_entry_list_id' => 'int',
		'max_queue_ingroup_calls' => 'int'
	];

	protected $fillable = [
		'did_pattern',
		'did_description',
		'did_active',
		'did_route',
		'extension',
		'exten_context',
		'voicemail_ext',
		'phone',
		'server_ip',
		'user',
		'user_unavailable_action',
		'user_route_settings_ingroup',
		'group_id',
		'call_handle_method',
		'agent_search_method',
		'list_id',
		'campaign_id',
		'phone_code',
		'menu_id',
		'record_call',
		'filter_inbound_number',
		'filter_phone_group_id',
		'filter_url',
		'filter_action',
		'filter_extension',
		'filter_exten_context',
		'filter_voicemail_ext',
		'filter_phone',
		'filter_server_ip',
		'filter_user',
		'filter_user_unavailable_action',
		'filter_user_route_settings_ingroup',
		'filter_group_id',
		'filter_call_handle_method',
		'filter_agent_search_method',
		'filter_list_id',
		'filter_campaign_id',
		'filter_phone_code',
		'filter_menu_id',
		'filter_clean_cid_number',
		'custom_one',
		'custom_two',
		'custom_three',
		'custom_four',
		'custom_five',
		'user_group',
		'filter_dnc_campaign',
		'filter_url_did_redirect',
		'no_agent_ingroup_redirect',
		'no_agent_ingroup_id',
		'no_agent_ingroup_extension',
		'pre_filter_phone_group_id',
		'pre_filter_extension',
		'entry_list_id',
		'filter_entry_list_id',
		'max_queue_ingroup_calls',
		'max_queue_ingroup_id',
		'max_queue_ingroup_extension',
		'did_carrier_description',
		'inbound_route_answer'
	];
}
