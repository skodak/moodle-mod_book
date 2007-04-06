<?PHP // $Id: version.php,v 1.1.2.1 2007/04/06 16:39:13 skodak Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2006031101;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2005060210;  // Requires this Moodle version
$module->cron     = 0;           // Period for cron to check this module (secs)

$release = "1.2";                // User-friendly version number

?>
