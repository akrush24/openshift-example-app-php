<?php

echo "Today is: " . date("Y/m/d") . "<br>";

echo "Node hostname: " . gethostname(); // может вывести например: sandie
echo '<br>';
echo "Node IP: " . gethostbyaddr($_SERVER['REMOTE_ADDR']);
echo '<br>';


# phpinfo()

?>
