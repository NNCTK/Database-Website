<?php
	session_start();

        require 'connectdb.php';
	
        
	$Code = $_GET['Code']; 
	$act = $_GET['action'];
 
	if($act=='remove' && !empty($Code))  //ยกเลิกการสั่งซื้อ
	{
		unset($_SESSION['shopping_cart'][$Code]);
	}
 
 
?>