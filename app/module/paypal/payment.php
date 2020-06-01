<?php

require_once('./common.php');

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\ShippingAddress;

// ### Payer
// A resource representing a Payer that funds a payment
// For paypal account payments, set payment method
// to 'paypal'.
$payer = new Payer();
$payer->setPaymentMethod("paypal");

// ### Itemized information
// (Optional) Lets you specify item wise
// information
$item1 = new Item();
$item1->setName('test pro 1')
    ->setCurrency('USD')
    ->setQuantity(1)
    ->setSku("testpro1_01") // Similar to `item_number` in Classic API
    ->setPrice(20);
$item2 = new Item();
$item2->setName('test pro 2')
    ->setCurrency('USD')
    ->setQuantity(5)
    ->setSku("testpro2_01") // Similar to `item_number` in Classic API
    ->setPrice(10);

$itemList = new ItemList();
$itemList->setItems(array($item1, $item2));

// 自定义用户收货地址，避免用户在paypal上账单的收货地址和销售方收货地址有出入
// 这里定义了收货地址，用户在支付过程中就不能更改收货地址，否则，用户可以自己更改收货地址
$address = new ShippingAddress();
$address->setRecipientName('什么名字')
    ->setLine1('什么街什么路什么小区')
    ->setLine2('什么单元什么号')
    ->setCity('城市名')
    ->setState('浙江省')
    ->setPhone('12345678911')
    ->setPostalCode('12345')
    ->setCountryCode('CN');

$itemList->setShippingAddress($address);


// ### Additional payment details
// Use this optional field to set additional
// payment information such as tax, shipping
// charges etc.
$details = new Details();
$details->setShipping(5)
    ->setTax(10)
    ->setSubtotal(70);

// ### Amount
// Lets you specify a payment amount.
// You can also specify additional details
// such as shipping, tax.
$amount = new Amount();
$amount->setCurrency("USD")
    ->setTotal(85)
    ->setDetails($details);

// ### Transaction
// A transaction defines the contract of a
// payment - what is the payment for and who
// is fulfilling it.
$transaction = new Transaction();
$transaction->setAmount($amount)
    ->setItemList($itemList)
    ->setDescription("Payment description")
    ->setInvoiceNumber(uniqid());

// ### Redirect urls
// Set the urls that the buyer must be redirected to after
// payment approval/ cancellation.
$baseUrl = getBaseUrl();
$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl("$baseUrl/exec.php?success=true")
    ->setCancelUrl("$baseUrl/cancel.php?success=false");

// ### Payment
// A Payment Resource; create one using
// the above types and intent set to 'sale'
$payment = new Payment();
$payment->setIntent("sale")
    ->setPayer($payer)
    ->setRedirectUrls($redirectUrls)
    ->setTransactions(array($transaction));

$payment->create($apiContext);

$approvalUrl = $payment->getApprovalLink();
// 打印出用户授权地址，这里仅仅实现支付过程，流程没有进一步完善。
dump($approvalUrl);
