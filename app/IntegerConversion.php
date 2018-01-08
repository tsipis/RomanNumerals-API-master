<?php

namespace App;


// Create the class that implements the existing interface
class IntegerConversion implements IntegerConversionInterface
{
	// Build the function that converts an integer to its Roman numeral counterpart
	public function toRomanNumerals($integer)
	{
		// Create an array (look-up table) that contains all the Roman Numeral Symbols 
		// Needs to be from larger to smaller due to the conversion method used (see below)
		$baseSymbols = [
      'M' => 1000,
 			'CM' => 900,
 			'D' => 500,
 			'CD' => 400,
 			'C' => 100,
 			'XC' => 90,
 			'L' => 50,
 			'XL' => 40,
 			'X' => 10,
 			'IX' => 9,
 			'V' => 5,
 			'IV' => 4,
 			'I' => 1
      ];

        // Loop through each value pair of the look-up table
        foreach($baseSymbols as $symbol => $value){
        // Find how many times the current Roman Numeral (value) "fits" in the provided integer
  		  $matches = intval($integer/$value);
 
  		  // Add the corresponding number of characters to the string
  		  // This is why we need to have the array sorted in descending order, so that higher values appear first
  		  $converted .= str_repeat($symbol,$matches);
 
  		  // Subtract the value (of the Roman Symbol-value pair) from the integer and repeat
  		  $integer = $integer % $value;
 		   }
 
 		// Return the final Roman Numeral that corresponds to the given integer
 		return $converted;
	};
}