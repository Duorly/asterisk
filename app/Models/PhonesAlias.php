<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PhonesAlias
 * 
 * @property string $alias_id
 * @property string|null $alias_name
 * @property string|null $logins_list
 * @property string|null $user_group
 *
 * @package App\Models
 */
class PhonesAlias extends Model
{
	protected $table = 'phones_alias';
	protected $primaryKey = 'alias_id';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'alias_name',
		'logins_list',
		'user_group'
	];
}
