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

	// A SIMPLE FUNCTION TO LOG REQUESTS
	function logger($data) {
      $ts = date('H:i:s');
      $filename = COLLECTOR_PATH . '/' . date('Y-m-d') . '.log';

      file_put_contents($filename, "[$ts] $data\n", FILE_APPEND);
  }
 ?>
