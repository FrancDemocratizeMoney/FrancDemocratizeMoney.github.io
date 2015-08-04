<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_FGD7jdwz5lMG13UYiF1kHfst",
  "publishable_key" => "pk_test_Okj4PY2iPVD6Z0sFTgKAcdAY"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>