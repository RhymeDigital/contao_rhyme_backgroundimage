<?php

/**
 * Copyright (C) 2017 Rhyme Digital, LLC.
 * 
 * @author		Blair Winans <blair@rhyme.digital>
 * @author		Adam Fisher <adam@rhyme.digital>
 * @link		http://rhyme.digital
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Rhyme\ContentElement;

use Rhyme\Helper\BackgroundImageHelper;


/**
 * Front end content element "Background image".
 *
 * @author Adam Fisher <adam@rhyme.digital>
 */
class BackgroundImage extends \ContentImage
{
	
	/**
	 * Template
	 */
	protected $strTemplate = 'ce_backgroundimage';
	
	
	/**
	 * Compile
	 */
	protected function compile()
	{
		parent::compile();
		
		BackgroundImageHelper::addBackgroundImageToTemplate($this->Template);
	}
}
