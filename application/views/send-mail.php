<?php 
        $user_name = $_POST["user_name"];
        $user_email = $_POST["user_email"];
	    $message = $_POST["message"];
	    $text = $user_name.$message;
	    
	    @mail('dynamicworkforce2@gmail.com', 'testMessage',$text ,'From:'.$user_email);
	    

?>