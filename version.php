<?php // $Id: version.php,v 1.35.2.12 2011/08/27 19:40:28 bdaloukas Exp $
/**
 * Code fragment to define the version of game
 * This fragment is called by moodle_needs_upgrading() and /admin/index.php
 *
 * @author 
 * @version $Id: version.php,v 1.35.2.12 2011/08/27 19:40:28 bdaloukas Exp $
 * @package game
 **/

$module->version  = 2011082604;  // The current module version (Date: YYYYMMDDXX)
$module->release = 'v2.11.08 (2011082604)';
$module->cron     = 0;           // Period for cron to check this module (secs)

$module->requires = 2007101512;  // Requires this Moodle version
