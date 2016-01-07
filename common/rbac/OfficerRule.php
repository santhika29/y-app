<?php

namespace common\rbac;

use Yii;
use yii\rbac\Rule;

/**
* 
*/
class OfficerRule extends Rule
{
	const RULE_ME = 'isOfficer';
	public $name = self::RULE_ME;
	function execute($user, $item, $params)
	{
		# code...
		return isset($params['post']) ? $params['post']->createdBy == $user : false;
	}
}