<?php

echo '<h1>OpenShift PHP example code...</h1>'
echo '<table>';
echo "<tr><td>Today is</td><td><b>" . date("Y/m/d") . "</b></td></tr>";

echo "<tr><td>Node hostname</td><td><b>" . gethostname() . '</b></td></tr>'; // может вывести например: sandie
echo "<tr><td>Node IP</td><td><b>" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . '</b></td></tr>';


# phpinfo()

?>
