<?php
require_once 'vendor/autoload.php'; // Include Composer's autoload

\Sentry\init([
  'dsn' => 'https://03cde424fa52d28e9a53e716b3a024d0@o4506871467802624.ingest.us.sentry.io/4506949834833920',
  // Specify a fixed sample rate
  'traces_sample_rate' => 1.0,
  // Set a sampling rate for profiling - this is relative to traces_sample_rate
  'profiles_sample_rate' => 1.0,
]);

echo 1/0
?>
