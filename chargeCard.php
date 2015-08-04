<?php
  require_once('./configStripe.php');

  $token  = $_POST['stripeToken'];
  $amount = $_POST['amount'];

  try {
  $charge = \Stripe\Charge::create(array(
        "amount" => $amount, // amount in cents, again
  "currency" => "usd",
  "source" => $token,
  "description" => "Example charge"
  ));
  echo '<h1>Thanks! Your investment will be put to good use!</h1>';
  } catch(\Stripe\Error\Card $e) {
  // The card has been declined
}
 
?>