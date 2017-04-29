<link rel="stylesheet" type="text/css" href="nice_r.css"/>
<script type="text/javascript" src="nice_r.js"></script>

<?php
require('Nicer.php');
ob_start();
// oop way (reccomended)
$n = new Nicer($conf);
$n->render();
$result = ob_get_clean();
file_put_contents('conf.txt', $result);

die;  
?>
