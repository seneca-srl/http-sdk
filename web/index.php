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

  // VESRSION 1.0.0.1
  
  include('const.php');
  include('log.php');

  $data = $HTTP_RAW_POST_DATA; // FOR PHP <  5.6.0
  $data = file_get_contents("php://input"); // FOR PHP >=  5.6.0
  $json = json_decode($data);

  try {
    if ($json) {
        logger("REQUEST RECEIVED: $data");

		// IDENTIFY THE DEVICE
        $imei = $json->dev->imei;
        logger("DEVICE: $imei");

		// PROCESS THE REQUEST
        echo ProcessRequest($json, $imei);

    } else {
        logger('INVALID REQUEST RECEIVED');
        echo RESPONSE_ERROR_REQUEST;
    }
  } catch (Exception $e) {
		// ERROR PROCESSING REQUEST
        logger("REQUEST ERROR: {$e->getMessage()}");
        echo RESPONSE_ERROR_QUERY;
  }

  function ProcessRequest($json, $imei) {
	// CONFIGURATION RECEIVED
    if (array_key_exists('cfg', $json)) {
        logger("RECEIVED CFG FROM $imei: " . json_encode($json->cfg));
		/* ADD PROCESSING HERE */
        return RESPONSE_OK;
    }

	// ACKNOWLEDGE FOR PREVIOUS COMMAND RECEIVED
    if (array_key_exists('ack', $json)) {
        logger("RECEIVED ACK FROM $imei: " . json_encode($json->ack));
		/* ADD PROCESSING HERE */
        return RESPONSE_OK;
    }

	// LOG RECEIVED
    if (array_key_exists('log', $json)) {
        logger("RECEIVED LOG FROM $imei: " . json_encode($json->log));
		/* ADD PROCESSING HERE */
        return RESPONSE_OK;
    }

	// EVENT RECEIVED
	// IN THIS CASE, FOR EXAMPLE, WE SEND A DOUT1 TOGGLE COMMAND
    if (array_key_exists('ev', $json)) {
        logger("RECEIVED EVENT FROM $imei: " . json_encode($json->ev));
        logger('TOGGLE DO1');
		/* ADD PROCESSING HERE */
        return RESPONSE_OK_WITH_TOGGLE_DO1;
    }

	// UNMANAGED COMMAND RECEIVED
    logger("RECEIVED SOMETHING ELSE FROM $imei");
    return RESPONSE_OK;
  }

 ?>
