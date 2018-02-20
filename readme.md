About
====
This is a sample server software that serve as an example on how to communicate with SENECA hardware device. The compatible devices are Z-GPRS3, Z-Logger3 and Z-UMTS via modem ot ethernet cable.

Installation and Requisite
====
To run this example you need to put the software in a apache or nginx folder (or root). You need to give scripts permission to write to the disk. The code need PHP 5 or newer to run. To get the code clone this repository to your local environment:

`#git clone https://github.com/seneca-srl/http-sdk.git`

Configuration
====
There is only a parameter to specify on the code, the method to extract post data. Open the index.php file and find this line:

```php
$data = $HTTP_RAW_POST_DATA; // FOR PHP <  5.6.0
$data = file_get_contents("php://input"); // FOR PHP >=  5.6.0

```

Choose the correct method relative of your version of PHP and commet the other. 

Running
====
First of all you have to program the SENECA device to run the example, you find the project in seal directory of this repository. Change server parameters to match your configuration like external ip address and/or subfolder. The script accept external post from SENECA device, process it and write a detailed log in a daily file.  The example, in case of event received, send a DOUT1 toggle to see how to manage commands.

License
====
This software is free to use with SENECA S.r.l. hardware and software devices.

Copyright (c) SENECA S.r.l.
All rights reserved.

Seneca S.r.l.
Via Austria, 26
35127 Padova (PD)
ITALY
