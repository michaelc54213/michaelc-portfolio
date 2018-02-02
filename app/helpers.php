<?php
//Helper functions
function somethingOrOther()
{
	return (mt_rand(1,2) == 1) ? 'something' : 'other';
}

//at the bottom of the file
require app_path().'/helpers.php';





?>
