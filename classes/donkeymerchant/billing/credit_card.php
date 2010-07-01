<?php
/**
 * DonkeyMerchant - ActiveMerchant style payment processing for PHP
 *
 * The MIT License
 * 
 * Copyright (c) 2010 Kieran Graham
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NON-INFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

class DonkeyMerchant_Billing_Credit_Card
{
	/*
	 * Card Companies
	 */
	protected const CARD_COMPANIES = array
	(
		'visa'               => '/^4\d{12}(\d{3})?$/',
		'master'             => '/^(5[1-5]\d{4}|677189)\d{10}$/',
		'discover'           => '/^(6011|65\d{2})\d{12}$/',
		'american_express'   => '/^3[47]\d{13}$/',
		'diners_club'        => '/^3(0[0-5]|[68]\d)\d{11}$/',
		'jcb'                => '/^35(28|29|[3-8]\d)\d{12}$/',
		'switch'             => '/^6759\d{12}(\d{2,3})?$/',
		'solo'               => '/^6767\d{12}(\d{2,3})?$/',
		'dankort'            => '/^5019\d{12}$/',
		'maestro'            => '/^(5[06-8]|6\d)\d{10,17}$/',
		'forbrugsforeningen' => '/^600722\d{10}$/',
		'laser'              => '/^(6304|6706|6771|6709)\d{8}(\d{4}|\d{6,7})?$/'
	);
	
	/*
	 * Constructor
	 */
	public function __construct()
	{
		
	}
}