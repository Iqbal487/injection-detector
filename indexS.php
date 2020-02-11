<?php           
    // extract host and path from url
    $host = "10.51.1.6";

    // open a socket connection with port 80, set timeout 40 sec.
    $fp = fsockopen($host, 1720, $errno, $errstr, 40);
    $result = "";
 
    if($fp)
    {
        //echo "POrt is connected";
        
                        $data=array();
                        $cr = curl_init();

                        //step 2 : set some option
                        curl_setopt($cr, CURLOPT_URL, 'https://raw.githubusercontent.com/temenos-labs/R19.12/master/holdings-balanceMovements-v1.0.0-swagger.json');
                        curl_setopt($cr,CURLOPT_HEADER,0);
                        curl_setopt($cr, CURLOPT_POST, true);

                        curl_setopt($cr, CURLOPT_POSTFIELDS, $data);


                        //curl_setopt($cr, CURLOPT_RETURNTRANSFER, true);

                        //step 3 : execute curl
                        $temp_out = curl_exec($cr);
                        if (curl_errno($cr)) {
                            $error_msg = curl_error($cr);
                        }
                        curl_close($cr);

                       // $temp_output=curl_exec($cr);

                        print_r($temp_out);
                        exit;
    }else
    { 
        return array("status"=>"err", "error"=>"$errstr ($errno)");
    }
 
    // close socket connection
    fclose($fp);
 
    // split result header from the content
    // $result = explode("", $result);
 
?>