<?php
require_once 'vendor/autoload.php'; // Include Composer's autoload

\Sentry\init([
  'dsn' => 'https://ffe625ea8b44f2ddcf9d4b1b9c26a98d@sun-dev.ngrok.dev/11',
  // Specify a fixed sample rate
  'traces_sample_rate' => 1.0,
]);
echo 1/0
?>
