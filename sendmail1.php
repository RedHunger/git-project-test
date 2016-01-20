<?php
	$umail=strip_tags(trim($_POST['useremail'])); 
	$updmail=date("h:i:s-Y.m.d");
 if	($file=fopen("email_list.txt","a+")){	
 		$f=file_get_contents("email_list.txt");
   		//echo "\n$f"
			if(preg_match("/^(?!\.)([a-z0-9_\-\.]){1,20}(?<!\.)@(?:(?:[a-z0-9-]+\.)+(?:com|net|ru|ua|org|mil|edu|gov|arpa|info|biz|inc|name|[a-z]{2})|[0-9]{1,3}(\.[0-9]{1,3}){3})$/is",$umail) && !preg_match("/\b$umail\b/",$f)  )  {				
		 				fwrite($file,"$umail\r\n");
		 					echo json_encode(array("num"=> 1,
		 										   "text"=>"Ваши данные сохранены"));
									}else{
 										echo json_encode(array("num"=> 0,
 															   "text"=>"Некорректный email"));
 										
 										
 										 }
 			}
 
  ?>

 