<?php
    print(time);    
    $url = "https://api.turbosms.ua/message/send.json";
    $sender = "Marigold";
    
    $my_json = array (        
        "recipients" => array("+380979224994",),
        "sms" => array("sender" => "Marigold","text" => "hi how are you")
    );

    /*$data = json_encode($my_json) ;
    echo $json_str*/
   

    $ch = curl_init($url);    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', "Authorization: Basic YOUE API KEY")); 	
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($my_json));
        $res = curl_exec($ch);    
    curl_close($ch);

?>