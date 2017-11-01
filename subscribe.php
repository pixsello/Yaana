<?php
        $mailto="pixsellowebblr@gmail.com"; 
        $pcount=0;
        $gcount=0; 
        $subject = "Enquiry from Website";

        $from="Enquiry <no-reply@Yaana.net.in>";
        while (list($key,$val)=each($_POST))
        {
            $pstr = $pstr."$key : $val \n ";
            ++$pcount;
        }
        while (list($key,$val)=each($_GET))
        {
            $gstr = $gstr."$key : $val \n ";
            ++$gcount;
        }
        if ($pcount > $gcount)
        {
            $message_body = "Dear,\n";
            $message_body .= "Yaana Bikes,\n\n";    
            $message_body .= $pstr;
            $message_body .= "\n Thanks and Regards";

            mail($mailto,$subject,$message_body,"From:".$from);
            header("Location:http://online.pixsello.in/yaana");
        }
        else
        {
            $message_body = "Dear,\n";
            $message_body .= "Yaana Bikes,\n\n"; 
            $message_body .= $gstr;
            $message_body .= "\n Thanks and Regards";

            mail($mailto,$subject,$message_body,"From:".$from);
            header("Location:http://online.pixsello.in/yaana");  
        }
?>