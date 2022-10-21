<?php

interface PayMethodInterface {
    public function allSumm($summ); 
    public function phoneNumber($phonenumb);
    // public function forPay($phonenumber, $summ);
}

class QiwiPayMethod implements PayMethodInterface {
    public function allSumm($summ) {
        // someFunc
    }
    public function phoneNumber($phonenumb) {
        // someFunc
    }
}

class YandexPayMethod implements PayMethodInterface {
    public function allSumm($summ) {
        // different someFunc
    }
    public function phoneNumber($phonenumb) {
        // different someFunc
    }
}

class WebMoneyPayMethod implements PayMethodInterface {
    public function allSumm($summ) {
        // another someFunc
    }
    public function phoneNumber($phonenumb) {
        // another someFunc
    }
}


class PayMethodService {
    protected PayMethodInterface $payMethod;

    public function __construct(PayMethodInterface $payMethod) {
        $this->payMethod = $payMethod;
    }

    public function run($phonenumber, $summ) {
            $this->payMethod->allSumm($summ); 
            $this->payMethod->phoneNumber($phonenumb);
    }
}

$payService = new PayMethodService (
    new YandexPayMethod()
);

$payService->run();