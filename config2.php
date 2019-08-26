<?php

mysql_connect("localhost", "root", "12345678", "fame") or die("not connected" . mysql_error());
mysql_select_db("fame") or die("not selected" . mysql_error());
