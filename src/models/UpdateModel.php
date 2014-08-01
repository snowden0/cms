<?php
namespace Craft;

/**
 * Stores all of the available update info.
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @see       http://buildwithcraft.com
 * @package   craft.app.models
 * @since     1.0
 */
class UpdateModel extends BaseModel
{
	/**
	 * @return array
	 */
	protected function defineAttributes()
	{
		$attributes['app']      = array(AttributeType::Mixed, 'model' => 'AppUpdateModel');
		$attributes['plugins']  = AttributeType::Mixed;
		$attributes['errors']   = AttributeType::Mixed;

		return $attributes;
	}

	/**
	 * @param string $name
	 * @param mixed  $value
	 * @return bool|void
	 */
	public function setAttribute($name, $value)
	{
		if ($name == 'plugins')
		{
			$value = PluginUpdateModel::populateModels($value);
		}

		parent::setAttribute($name, $value);
	}
}
