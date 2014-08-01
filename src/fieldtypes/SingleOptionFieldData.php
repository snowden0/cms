<?php
namespace Craft;

/**
 * Single-select option field data class.
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2014, Pixel & Tonic, Inc.
 * @license   http://buildwithcraft.com/license Craft License Agreement
 * @see       http://buildwithcraft.com
 * @package   craft.app.etc.fieldtypes
 * @since     1.0
 */
class SingleOptionFieldData extends OptionData
{
	/**
	 * @var
	 */
	private $_options;

	/**
	 * Returns the options.
	 *
	 * @return array|null
	 */
	public function getOptions()
	{
		return $this->_options;
	}

	/**
	 * Sets the options.
	 *
	 * @param array $options
	 *
	 * @return void
	 */
	public function setOptions($options)
	{
		$this->_options = $options;
	}
}
