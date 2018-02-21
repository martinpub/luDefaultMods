<?php

/**
 * @defgroup plugins_themes_lu_default_mods luDefaultModsTheme plugin
 */
 
/**
 * @file plugins/themes/lu_default_mods/index.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_lu_default_mods
 * @brief Wrapper for luDefaultModsTheme child theme plugin.
 *
 */
 
require_once('LuDefaultModsThemePlugin.inc.php');

return new LuDefaultModsThemePlugin();
?>