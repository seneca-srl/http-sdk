<?php
	/*
		Copyright (c) SENECA S.r.l.
		All rights reserved.

		Seneca S.r.l.
		Via Austria, 26
		35127 Padova (PD)
		ITALY

		Web-Site: <http://www.seneca.it>
	*/
	
  define('COLLECTOR_PATH', dirname(__FILE__)); // BASE PATH FOR FILES
  define('RESPONSE_OK', '{ "err": 0, "do": [] }'); // STANDARD OK RESPONSE
  define('RESPONSE_ERROR_REQUEST', '{ "err": 1, "do": [] }'); // REQUEST ERROR RESPONSE
  define('RESPONSE_ERROR_CONNECT', '{ "err": 2, "do": [] }'); // CONNECT ERROR RESPONSE
  define('RESPONSE_ERROR_QUERY', '{ "err": 3, "do": [] }'); // QUERY ERROR RESPONSE
  define('RESPONSE_ERROR_UNKNOWN', '{ "err": 4, "do": [] }'); // DEVICE UNKNOWN ERROR RESPONSE
  define('RESPONSE_OK_WITH_TOGGLE_DO1', '{ "err": 0, "do": [ "act": 33554496] }'); // OK RESPONSE WITH A TOGGLE ACTION FOR ZGPRS3 DEVICE
 ?>
