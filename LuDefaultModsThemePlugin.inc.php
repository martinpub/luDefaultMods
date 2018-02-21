<?php

/**
 * @file plugins/themes/lu_default_mods/LuDefaultModsThemePlugin.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class LuDefaultModsThemePlugin
 * @ingroup plugins_themes_lu_default_mods
 *
 * @brief luDefaultModsTheme theme
 */
import('lib.pkp.classes.plugins.ThemePlugin');

class LuDefaultModsThemePlugin extends ThemePlugin {
	/**
	 * Initialize the theme's styles, scripts and hooks. This is only run for
	 * the currently active theme.
	 *
	 * @return null
	 */
	public function init() {
		$this->setParent('defaultthemeplugin');
		$this->modifyStyle('stylesheet', array('addLess' => array('styles/lu.less')));
	}

	/**
	 * Get the display name of this plugin
	 * @return string
	 */
	function getDisplayName() {
		return __('plugins.themes.luDefaultMods.name');
	}

	/**
	 * Get the description of this plugin
	 * @return string
	 */
	function getDescription() {
		return __('plugins.themes.luDefaultMods.description');
	}
}

?>
