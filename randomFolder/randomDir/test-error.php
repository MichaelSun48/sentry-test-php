<?php                                                                         
  2 require_once 'vendor/autoload.php'; // Include Composer's autoload
  3  
  4 \Sentry\init([
  5   'dsn' => 'https://03cde424fa52d28e9a53e716b3a024d0@o4506871467802624.ingest.    us.sentry.io/4506949834833920',
  6   // Specify a fixed sample rate
  7   'traces_sample_rate' => 1.0,
  8   // Set a sampling rate for profiling - this is relative to traces_sample_rat    e
  9   'profiles_sample_rate' => 1.0,
 10 ]);
 11  
 12 echo 1/0
 13 ?>
