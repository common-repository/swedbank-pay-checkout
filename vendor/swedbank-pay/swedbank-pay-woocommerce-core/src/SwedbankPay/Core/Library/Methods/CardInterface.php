<?php

namespace SwedbankPay\Core\Library\Methods;

use SwedbankPay\Core\Api\Response;
use SwedbankPay\Core\Exception;

/**
 * Interface CardInterface
 * @package SwedbankPay\Core\Library\Methods
 */
interface CardInterface
{
    const CARD_PAYMENTS_URL = '/psp/creditcard/payments';

    /**
     * Initiate a Credit Card Payment
     *
     * @param mixed $orderId
     * @param bool $generateToken
     * @param string $paymentToken
     *
     * @return Response
     * @throws Exception
     */
    public function initiateCreditCardPayment($orderId, $generateToken, $paymentToken);

    /**
     * Initiate Verify Card Payment
     *
     * @param mixed $orderId
     *
     * @return Response
     * @throws Exception
     */
    public function initiateVerifyCreditCardPayment($orderId);

    /**
     * Initiate a CreditCard Recurrent Payment
     *
     * @param mixed $orderId
     * @param string $recurrenceToken
     * @param string|null $paymentToken
     *
     * @return Response
     * @throws \Exception
     */
    public function initiateCreditCardRecur($orderId, $recurrenceToken, $paymentToken = null);

    /**
     * Initiate a CreditCard Unscheduled Purchase
     *
     * @param mixed $orderId
     * @param string|null $paymentToken
     *
     * @return Response
     * @throws Exception
     */
    public function initiateCreditCardUnscheduledPurchase($orderId, $paymentToken = null);
}
