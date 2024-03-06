<?php
require_once 'vendor/autoload.php'; // Include Composer's autoload

\Sentry\init([
  'dsn' => 'https://79b1b0ecbc01777be5d1a699057a45ed@o4506746476429312.ingest.us.sentry.io/4506866090835968',
  // Specify a fixed sample rate
  'traces_sample_rate' => 1.0,
  // Set a sampling rate for profiling - this is relative to traces_sample_rate
  'profiles_sample_rate' => 1.0,
]);
echo 1/0
?>
