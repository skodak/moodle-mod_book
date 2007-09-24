<?PHP // $Id: version.php,v 1.1.6.2 2007/09/24 08:54:23 skodak Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2007040601;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2006101020;  // Requires this Moodle version
$module->cron     = 0;           // Period for cron to check this module (secs)

$release = "1.3alpha+";          // User-friendly version number

?>
