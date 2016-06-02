<?php

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

$config['system.logging']['error_level'] = 'verbose';

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

$settings['cache']['bins']['render'] = 'cache.backend.null';

$settings['extension_discovery_scan_tests'] = TRUE;

$settings['rebuild_access'] = TRUE;

$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => 'composer',
  'username' => 'composer',
  'password' => 'composer',
  'host' => 'localhost',
  'port' => 3306,
  'prefix' => '',
  'collation' => 'utf8mb4_general_ci',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
);

$settings['trusted_host_patterns'] = array(
   '^localhost$',
   '^local\.test-composer$',
 );

$settings['file_chmod_directory'] = 0777;
$settings['file_chmod_file'] = 0777;

$settings['hash_salt'] = 'YUPiSjYMM6dI0dc1pkewk73fwcfPegWlNxbfVQD_mrZG2WmuDCDMa9h2_lYbBZfXRp7GLnK8ew';

// $settings['bootstrap_config_storage'] = array('Drupal\Core\Config\BootstrapConfigStorageFactory', 'getFileStorage');
