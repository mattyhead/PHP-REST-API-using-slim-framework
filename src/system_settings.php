<?php
// prevent direct accesss
defined('SM_APEXEC') or die('no direct access');

//DATABASE CONFIGURATION
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', ini_get('mysqli.default_host'));
define('DB_USERNAME', ini_get('mysqli.default_user'));
define('DB_PASSWORD', ini_get('mysqli.default_pw'));
define('DB_DATABASE', ini_get('mysqli.default_user'));
define('DB_PREFIX', '');

// LDAP CREDENTIALS
define('LDAP_ENABLED', FALSE); // SET TRUE OR FALSE
//define('LDAP_SERVER', '');
define('LDAP_SERVER', '');
define('LDAP_PORT', '');
define('LDAP_BASE_DN', '');

// JIRA CREDENTIALS
define('JIRA_USERNAME', ''); // BASE64 ENCODED
define('JIRA_PASSWORD', ''); // BASE64 ENCODED
define('JIRA_API_URL', '');
define('JIRA_PROJECT_AVATAR', '');
define('JIRA_PROJECT_FILTER', '');
define('JIRA_USER_LOGGED_URL', '');

// JENKINS CREDENTIALS
define('JENKINS_USERNAME', '');
define('JENKINS_PASSWORD', '');
define('JENKINS_HOST', '');
define('JENKINS_PORT', '');
define('JENKINS_JOB_PATH', '');
define('JENKINS_TOKEN', '');
