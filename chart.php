<?php
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
   '4e483f9467dcccca284d',
    'bca36cdddc5fec0d4a3f',
    '1356293', // Replace with 'app_id' from dashboard
  array(
    'cluster' => 'eu' // Replace with 'cluster' from dashboard
  )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
while (true) {
  $pusher->trigger('price-btcusd', 'new-price', array(
    'value' => rand(0, 5000)
  ));
  sleep(1);
}
?>