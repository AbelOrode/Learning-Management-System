<?php

namespace App\Http\Controllers;

use App\Facade\Paypal;
use App\Mail\SendMailPurchase;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Paypal\Api\Amount;
use Paypal\Api\Details;
use Paypal\Api\Item;
use Paypal\Api\ItemList;
use Paypal\Api\Payer;
use Paypal\Api\Payment;
use PayPal\Api\PaymentExecution;
use Paypal\Api\RedirectUrls;
use Paypal\Api\Transaction;
use PHPUnit\TextUI\ResultPrinter;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('shop.index', compact('products'));
    }

    public function singleProduct($id)
    {
        $products = Product::findOrFail($id);
        return view('shop.singleProduct', compact('products'));
    }

    public function orderProduct($id)
    {
        $product = Product::findOrFail($id);
        $apiContext = Paypal::apiContext();
        $payer = new \PayPal\Api\Payer();
        $payer->setPaymentMethod("paypal");

        $item1 = new \PayPal\Api\Item();
        $item1->setName($product->title)
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setSku($product->id)
            ->setPrice($product->price);


        $itemList = new \PayPal\Api\ItemList();
        $itemList->setItems(array($item1));

        $details = new \PayPal\Api\Details();
        $details->setShipping(2)
            ->setTax(2)
            ->setSubtotal($product->price);

        $amount = new \PayPal\Api\Amount();
        $amount->setCurrency('USD')
            ->setTotal($product->price + 4)
            ->setDetails($details);

        $transaction = new \PayPal\Api\Transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription('Payment Description')
            ->setInvoiceNumber(uniqid());

        $baseUrl = "http://127.0.0.1:8000";
        $redirectUrls = new \PayPal\Api\RedirectUrls();
        $redirectUrls->setReturnUrl(route('shop.executeOrder', $id))
            ->setCancelUrl(route('shop.index'));

        $payment = new \PayPal\Api\Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions(array($transaction));

        $request = clone $payment;

        try {
            $payment->create($apiContext);
        } catch (\Exception $ex) {
            print("Created Payment Using Paypal. Please visit the URL to Approve." . $request);
            exit(1);
        }

        $approvalUrl = $payment->getApprovalLink();

        return redirect($approvalUrl);
    }

    public function executeOrder($id)
    {
        $product = Product::findOrFail($id);
        $apiContext = Paypal::apiContext();

        $paymentId = $_GET['paymentId'];
        $payment = \PayPal\Api\Payment::get($paymentId, $apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($_GET['PayerID']);

        $transaction = new \PayPal\Api\Transaction();
        $amount = new \PayPal\Api\Amount();
        $details = new \PayPal\Api\Details();

        $details->setShipping(2)
            ->setTax(2)
            ->setSubtotal($product->price);

        $amount->setCurrency('USD');
        $amount->setTotal($product->price + 4);
        $amount->setDetails($details);

        $transaction->setAmount($amount);

        // Add the above transaction object inside our Execution object.
        $execution->addTransaction($transaction);

        try {
            // Execute the payment
            // (See bootstrap.php for more on `ApiContext`)
            $result = $payment->execute($execution, $apiContext);

            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            print("Executed Payment 1" . $payment->getId() . "Results: " . $result);

            try {
                $payment = Payment::get($paymentId, $apiContext);
                $paymentInfo = json_decode($payment);
                Mail::to($paymentInfo->payer->payer_info->email)
                    ->bcc('lms-admin@lms.test')
                    ->send(new SendMailPurchase($paymentInfo));

            } catch (\Exception $ex) {
                return redirect()->route('shop.index');
            }
        } catch (\Exception $ex) {
            return redirect()->route('shop.index');
        }

        $notification = array([
            'Message' => 'Success. Confirmation Mail Sent',
            'alert-type' => 'success'
        ]);

        return redirect()->route('shop.index')->with($notification);

    }
}
