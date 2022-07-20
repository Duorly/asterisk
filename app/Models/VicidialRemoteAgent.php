<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class VicidialRemoteAgent
 * 
 * @property int $remote_agent_id
 * @property string|null $user_start
 * @property int|null $number_of_lines
 * @property string $server_ip
 * @property string|null $conf_exten
 * @property string|null $status
 * @property string|null $campaign_id
 * @property string|null $closer_campaigns
 * @property string|null $extension_group
 * @property string|null $extension_group_order
 * @property string|null $on_hook_agent
 * @property int|null $on_hook_ring_time
 *
 * @package App\Models
 */
class VicidialRemoteAgent extends Model
{
	protected $table = 'vicidial_remote_agents';
	protected $primaryKey = 'remote_agent_id';
	public $timestamps = false;

	protected $casts = [
		'number_of_lines' => 'int',
		'on_hook_ring_time' => 'int'
	];

	protected $fillable = [
		'user_start',
		'number_of_lines',
		'server_ip',
		'conf_exten',
		'status',
		'campaign_id',
		'closer_campaigns',
		'extension_group',
		'extension_group_order',
		'on_hook_agent',
		'on_hook_ring_time'
	];
}
