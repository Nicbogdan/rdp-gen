<?php
// rdp-gen github repository 
header('Content-Type: application/rdp');
header('Content-Disposition: attachment; filename="conn.rdp"');
echo('full address:s:'.preg_replace('/[^a-z^0-9^.^:^]/', '',$_POST['address']));
?>
