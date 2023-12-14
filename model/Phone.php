<?php

class Phone {

    /**
     * get country by phone number
     *
     * @param $phoneNumber
     * @return mixed|string
     */
    function getCountry($phoneNumber): mixed
    {
        $phoneCodes = json_decode(file_get_contents("../data/phone-codes.json"), true);
        $cleanNumber = preg_replace('/[^0-9]/', '', $phoneNumber);

        foreach ($phoneCodes as $code) {
            $cleanMask = preg_replace('/[^0-9#]/', '', $code['mask']);
            $pattern = '/^' . str_replace('#', '\d', $cleanMask) . '$/';

            if (preg_match($pattern, $cleanNumber)) {
                return $code['name_ru'];
            }
        }

        return 'Nieznany kraj';
    }
}
