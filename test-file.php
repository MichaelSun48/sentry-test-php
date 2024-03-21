<?php
require_once 'vendor/autoload.php'; // Include Composer's autoload

\Sentry\init([
  'dsn' => 'https://4552b801f99774d4b5cb80b17907bdd8@sun-dev.ngrok.dev/35',
  // Specify a fixed sample rate
  'traces_sample_rate' => 1.0,
]);

echo 1/0
?>
