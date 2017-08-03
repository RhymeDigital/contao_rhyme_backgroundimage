<?php

/**
 * Copyright (C) 2017 Rhyme Digital, LLC.
 * 
 * @author		Blair Winans <blair@rhyme.digital>
 * @author		Adam Fisher <adam@rhyme.digital>
 * @link		http://rhyme.digital
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register PSR-0 namespace
 */
if (class_exists('NamespaceClassLoader')) {
    
	NamespaceClassLoader::add('Rhyme', 'system/modules/rhyme_backgroundimage/library');

}


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	// Elements
	'ce_backgroundimage'			=> 'system/modules/rhyme_backgroundimage/templates/elements',
	'ce_backgroundtext'				=> 'system/modules/rhyme_backgroundimage/templates/elements',
));
