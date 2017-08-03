<?php

/**
 * Copyright (C) 2017 Rhyme Digital, LLC.
 * 
 * @author		Blair Winans <blair@rhyme.digital>
 * @author		Adam Fisher <adam@rhyme.digital>
 * @link		http://rhyme.digital
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Rhyme\Helper;


/**
 * Class BackgroundImageHelper
 * @author Adam Fisher <adam@rhyme.digital>
 */
class BackgroundImageHelper extends \Controller
{
	
	/**
	 * Add a background image to a template
	 */
	public static function addBackgroundImageToTemplate(\Template &$objTemplate, \Picture $varPicture=null)
	{
		$strDataInterchange = '';
		$arrPicture = $varPicture ?: $objTemplate->picture;
		
		if (is_array($arrPicture) && 
			!empty($arrPicture) && 
			is_array($arrPicture['img'])
		)
		{
			// Todo: work with more of the Picture class options
			$varSources 			= $arrPicture['sources'];
			$strDataInterchange 	= ' data-interchange="['.$arrPicture['img']['src'].', (default)]';
			
			if (is_array($varSources))
			{
				for ($i = 0; $i < count($varSources); $i++)
				{
					$strDataInterchange .= ',['.$varSources[$i]['src'].', (only screen and ('.$varSources[$i]['media'].'))]';
				}
			}
			
			$strDataInterchange .= '"';
		}
		
		$objTemplate->dataInterchange = $strDataInterchange;
	}
}
