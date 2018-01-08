<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IntegerConversionController extends Controller
{
    // Using the service provider to convert
    protected $integerConversion;

    public function __construct(IntegerConversionInterface $integerConversion)
    {
        $this->integerConversion = $integerConversion;
    }
    
    public function convertInt($integer)
    {
        $this->integerConversion->toRomanNumerals($integer);
    }
}
