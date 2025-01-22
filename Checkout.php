<?php



include './stripe-php/init.php';

\Stripe\Stripe::setApiKey("sk_test_51OvJHxKvNUwTNhX4AshSqPQ5PN4CchpEfNLZ5FSweWNJzAEQQFAQ0BKpfBkkevn2ZTDmr9gPW5fccSwJcw8R1q9p00n2zmDXhm");

$id = $_REQUEST['id'];
$total = $_REQUEST['total'];

$YOUR_DOMAIN = 'http://localhost/reant';

$checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => [
        [
            # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
            'quantity' => 1,
            'price_data' => [
                "currency" => "inr",
                "unit_amount" => $total * 100,
                "product_data" => [
                    "name" => "Total"
                ]
            ],
        ]
    ],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . "/confirm.php?id=$id",
    'cancel_url' => $YOUR_DOMAIN . "/cancel.php?id=$id",
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);