<?php

include_once '../model/Phone.php';

class PhoneController {

    /**
     * @param $inputNumber
     * @return void
     */
    public function sendPhoneNumber($inputNumber): void
    {
        $phoneNumberResolver = new Phone();
        $result = $phoneNumberResolver->getCountry($inputNumber);

        echo $result;
    }
}

$phoneController = new PhoneController();
$phoneController->sendPhoneNumber($_POST['phone']);
