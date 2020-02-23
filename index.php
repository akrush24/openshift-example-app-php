<?php

echo "Today is " . date("Y/m/d") . "<br>";

echo gethostname(); // может вывести например: sandie

echo gethostbyaddr($_SERVER['REMOTE_ADDR']);

# phpinfo()

?>
