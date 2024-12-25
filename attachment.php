<?php


$hubVerifyToken = 'abcd'; // change this
$accessToken = 'EAAHoWAJcNrUBAFZBw3eNZC7ryanhiGwh3JDQEKC36jyCVCgrSky6ZAYkv6c2F5gDwUDFZBoZAsZADaPplXo2iLNpxlQ3fTKn1JS0frPFOMSBNcbVfpD1SGpx0gIws26QASTyqtvDps8TT35UUBIA9dl5pZBw1VIX5ThWsCvJdaqkY533uZBZAYigw'; //change this


$imageurl='https://mistinnovationclub2.000webhostapp.com/mic.jpg'; //change this





    $image = '{
  "message":{
    "attachment":{
      "type":"image", 
      "payload":{
        "is_reusable": true,
        "url":"' . $imageurl . '"
      }
    }
  }
}';

    $ch = curl_init('https://graph.facebook.com/v8.0/me/message_attachments?access_token=' . $accessToken);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $image);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);


    $result = curl_exec($ch);


    $return = json_decode($result, true);
    echo $attachment_id = $return["attachment_id"];