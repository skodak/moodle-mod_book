<?PHP // $Id: version.php,v 1.1.8.2 2007/05/20 06:02:00 skodak Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2007052000;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2007021505;  // Requires this Moodle version
$module->cron     = 0;           // Period for cron to check this module (secs)

$release = "1.4alpha";          // User-friendly version number

?>
