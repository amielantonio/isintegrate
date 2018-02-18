<?php
/**
 * Bootstrap file for the web application. Loads the
 * configuration file and settings file and then
 * start the controls of the web application.
 *
 */



/**
 * Load the web application configuration
 */

require APPPATH . '/config/config.php';


/**
 * Load the web application constants
 */

require APPPATH . '/config/constants.php';


/**
 * Load application helpers
 */

require HELPERPATH . '/helper.php';

/**
 * Load application queries
 */

require DBPATH . '/queries.php';


/**
 * Load application helpers
 */

require COREPATH . '/Migration.php';



/**
 * Load Routes functions
 */

require COREPATH . '/Route.php';

/**
 * Load Auth functions
 */

require COREPATH . '/Auth.php';

/**
 * Load Application functions
 */
require COREPATH . '/Functions.php';

/**
 * Load Application Request Functions
 */
require COREPATH . '/Request.php';