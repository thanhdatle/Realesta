<?php
/**
 * Created by JetBrains PhpStorm.
 * User: MONKEY D.LUFFY
 * Date: 7/4/13
 * Time: 10:33 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Drivrrr\ScanBundle\Controller;

use StripePhp\Stripe\Stripe;
use StripePhp\Stripe\Stripe_Charge;
use StripePhp\Stripe\Stripe_Customer;
//use StripePhp\Stripe\Stripe_CardError;
//use StripePhp\Stripe\Stripe_Util_Set;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PricingController extends Controller{

    protected function includeStripe()
    {
        require(
        $this->container->getParameter( 'kernel.root_dir' )
            . '/../vendor/stripe/stripe-php/lib/Stripe.php'
        );
    }

    public function paypalAction()
    {
        return $this->render('ScanBundle:Pricing:paypal.html.twig');
    }

    public function pricingAction()
    {
        $text = 'First time using the paying service';
        return $this->render('ScanBundle:Pricing:pricing.html.twig',array('message'=>$text));
    }

    public function pricingHandleAction(){
        $this->includeStripe();
        Stripe::setApiKey("sk_test_gMzByCutcwLGQJP8y9SJJgYN");

// Get the credit card details submitted by the form
        $token = $_POST['stripeToken'];

//        try {
//            Stripe_Charge::create(array(
//                    "amount" => 1000, // amount in cents, again
//                    "currency" => "usd",
//                    "card" => $token,
//                    "description" => "payinguser@example.com")
//            );
//        } catch(Stripe_CardError $e) {
//            // The card has been declined
//        }
        $text = 'Congratz transaction successful';
        //
//// Create a Customer
        $customer = Stripe_Customer::create(array(
                "card" => $token,
                "description" => "payinguser@example.com")
        );
//
//// Charge the Customer instead of the card
        Stripe_Charge::create(array(
                "amount" => 1000, # amount in cents, again
                "currency" => "usd",
                "customer" => $customer->id)
        );
//
//// Save the customer ID in your database so you can use it later
//        saveStripeCustomerId($user, $customer->id);
//
//// Later...
//        $customerId = getStripeCustomerId($user);
//
//        Stripe_Charge::create(array(
//                "amount"   => 1500, # $15.00 this time
//                "currency" => "usd",
//                "customer" => $customerId)
//        );

        return $this->render('ScanBundle:Pricing:pricing.html.twig',array('message'=>$text));
    }

    protected function reChargeCustomerAction(){
        return $this->render('ScanBundle:Pricing:pricing.html.twig',array('message'=>$text));
    }
}