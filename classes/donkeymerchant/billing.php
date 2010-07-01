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

class DonkeyMerchant_Billing
{
	/**
	 * Run gateway in test mode
	 */
	protected $gateway_mode = ;
	
	/*
	 * Gateway and Integration mode constants
	 */
	public const GATEWAY_TEST			= "test";
	public const GATEWAY_PRODUCTION		= "production";
	/*
	 */
	public const INTEGRATION_TEST		= "test";
	public const INTEGRATION_PRODUCTION	= "production";
	
	/**
	 * Gateway Factory
	 */
	public static function gateway($gateway = NULL, $mode = GATEWAY_TEST)
	{
		
	}
	
	/*
	 * Integration Factory
	 */
	public static function integration($integration = NULL, $mode = INTEGRATION_TEST)
	{
		
	}
	
	/**
	 * Set Gateway Mode
	 */
	public static function set_gateway_mode($mode = FALSE)
	{
		
	}
}