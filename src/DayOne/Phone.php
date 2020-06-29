<?php

namespace App;

class Phone
{
    /** -----change details-----
    Write a function that accepts an array of 10 integers (between 0 and 9), that returns a string of those numbers in the form of a phone number.
    Example:
    createPhoneNumber([1,2,3,4,5,6,7,8,9,0]); // => returns "(123) 456-7890"
     **/

    /**
     * @param array $numbersArray
     * @return string
     */
    public function createPhoneNumber(array $numbersArray): string
    {
        $iteration = 1;
        $phone = '';
        while ($iteration <= 3) {
            if ($iteration === 1) {
                $phone = '(' . $this->slice($numbersArray, 0, 3) . ')';
            } else if ($iteration == 2) {
                $phone = $phone . ' ' . $this->slice($numbersArray, 3, 6);
            } else {
                $phone = $phone . '-' . $this->slice($numbersArray, 6);
            }
            $iteration++;
        }
        return $phone;
    }

    /**
     * @param array $array
     * @param int $start
     * @param int|null $end
     * @return string
     */
    public function slice(array $array, int $start, int $end = null): string
    {
        $size = count($array);
        $endPos = $end ? $end - $start : $size - 1;

        if ($endPos > $size || $start > $endPos) {
            return '';
        }

        return implode('', array_slice($array, $start, $endPos));
    }
}

