<?php
require_once 'Console/Table.php';

$headers = array('item', 'color');

$items = array(
    array('banana', 'yellow'),
    array('apple', 'red')
);
echo Console_Table::fromArray($headers, $items);

/* Outputs
+--------+--------+
| item   | color  |
+--------+--------+
| banana | yellow |
| apple  | red    |
+--------+--------+
*/
?>