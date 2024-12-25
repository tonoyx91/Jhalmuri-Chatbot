<?php

$hubVerifyToken = 'Jhalmuri Chatbot'; // change this
$accessToken = 'EAADqX4BUE78BAAFGH47DzcnwF43Flhti3CAW30Idxs1Izm6bln9jvrruZBRkF1ftGLGH7ZCfqIgEOinAEiL8vWnis4YtpTEsZAE2rhZAXFY1cp0DARPF9k7DZBrM9COGmhKguOLEyKD5hXx3BrxQVTQ4bIevLPWPmRBDBkmtTP5yOIZCfcCNKR'; //change this
$attachment_id=214852437309306; //change this

if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
    echo $_REQUEST['hub_challenge'];
    exit;
}
$raw = file_get_contents('php://input');


$input = json_decode($raw, true);

$senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
$messageText = $input['entry'][0]['messaging'][0]['message']['text'];
$buttonClick = $input['entry'][0]['messaging'][0]['postback']['payload'];
$quickreplyclick= $input['entry'][0]['messaging'][0]['message']['quick_reply']['payload'];
$response = null;

$mystring = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ,.qwertyuiopasdfghjklzxcvbnm';
$findme   = 'MIST';
$pos = strpos($mystring, $findme);



//...................................................Starting.....................................................//
if ($messageText=='Hi') {
   

    $answer = 
        [
             "attachment" =>
            [
                "type" => "template",
                "payload" => 
                [
                    "template_type" => "button",
                    "text" => "Hey guys!It's me Jhalmuri chatbot from Shafee Shadman Tonoy!Select one!",
                    "buttons"=>
                   [
                        [
                        "type" => "postback", 
                        "title" => "School",
                        "payload" => "button1"
                        ],
                   
                        [
                        "type" => "postback", 
                        "title" => "College",
                        "payload" => "button2"
                        ],
                        [
                        "type" => "postback", 
                        "title" => "University",
                        "payload" => "button3"
                        ]
                    ]
                ]

            ]

        ];
  
//.............................................................................................
$response = 
[
'recipient' => ['id' => $senderId],
'message' =>  $answer
];
//...............................................................................................

} 




//...........................................For clicking School..........................................//

else if($buttonClick == 'button1')
{
    $answer=[
                "attachment" =>
                [
                    "type"=>"template",
                    "payload"=>
                    [
                        "template_type"=>"button",
                        "text"=>"which one is yours?",
                        "buttons"=>
                        [
                            [
                                "type" => "postback", 
                                "title" => "below class 5",
                                "payload" => "button4"
                            ],
                            [
                                "type" => "postback", 
                                "title" => "above class 5",
                                "payload" => "button5"
                            ]
                        ]
                    ]
                ]
            ];


//......................................................................................
$response = 
[
'recipient' => ['id' => $senderId],
'message' =>  $answer
];
//......................................................................................
}

//...........................................For clicking School..............................................//





//.........................................For clicking below class 5............................................//

else if ($buttonClick == 'button4') {

        //text msg
        $answer = 'You are too small!';


    
        //!----------------------------------------------------------------------------
        //response for text
        $response = [
            'recipient' => ['id' => $senderId],
            'message' => ['text' => $answer]
        ];
    
        //!-----------------------------------------------------------------------------
}

//.........................................For clicking below class 5............................................//



//......................................For clicking above class 5..............................................//
else if ($buttonClick == 'button5') {



    //text msg
        $answer = 'You are doing well in your school!';


    
        //!------------------------------------------------------------------------------
        //response for text
        $response = [
            'recipient' => ['id' => $senderId],
            'message' => ['text' => $answer]
        ];
    
        //!-------------------------------------------------------------------------------
}

//.........................................For clicking above class 5..............................................//






//..............................................For clicking college..............................................//
else if($buttonClick=='button2')
{
    $answer=
        [
            "attachment" =>
                [
                    "type"=>"template",
                    "payload"=>
                    [
                        "template_type"=>"button",
                        "text"=>"which one is yours?",
                        "buttons"=>
                        [
                            [
                                "type" => "postback", 
                                "title" => "Class 11",
                                "payload" => "11"
                            ],
                            [
                                "type" => "postback", 
                                "title" => "Class 12",
                                "payload" => "12"
                            ]
                        ]
                    ]
                ]
         ];
     //............................................................................................
$response = 
[
'recipient' => ['id' => $senderId],
'message' =>  $answer
];
//.................................................................................................
}    
//..............................................For clicking college..............................................//



//..............................................For clicking class 11..............................................//

else if ($buttonClick == '11')
{



            //text msg
                $answer = 'You are one of the new members of your college!Come on man study hard!';
        
        
            
                //!-----------------------------------------------------------------------
                //response for text
                $response = [
                    'recipient' => ['id' => $senderId],
                    'message' => ['text' => $answer]
                ];
            
                //!------------------------------------------------------------------------
}
//..............................................For clicking class 11..............................................//


//..............................................For clicking class 12..............................................//

else if ($buttonClick == '12')
{



            //text msg
                $answer = 'That is great!You are one of the most seniors of your college!';
        
        
            
                //!---------------------------------------------------------------------------------
                //response for text
                $response = [
                    'recipient' => ['id' => $senderId],
                    'message' => ['text' => $answer]
                ];
            
                //!---------------------------------------------------------------------------------
}




    







else if($buttonClick=='button3')
{
    $answer=   [
        "text" => "Which class is Yours?",
        "quick_replies" => [
            [
                "content_type" => "text",
                "title" => "Undergraduate",
                "payload" => "qr3",

            ],
            [
                "content_type" => "text",
                "title" => "postgraduate",
                "payload" => "qr4",

            ],

        ]
    ];
    //................................................................................................
    //response for qr
    $response = [
        'recipient' => ['id' => $senderId],
        'messaging_type' => 'RESPONSE',
        'message' => $answer,
    
    ];
    //..................................................................................................

}




else if ($quickreplyclick == 'qr3') 
{

    $answer=
        [
            "attachment" =>
                [
                    "type"=>"template",
                    "payload"=>
                    [
                        "template_type"=>"button",
                        "text"=>"That's great!Thanks for talking with me.If you don't mind I want to show you a logo of my university.Do you want to see this?",
                        "buttons"=>
                        [
                            [
                                "type" => "postback", 
                                "title" => "Yes",
                                "payload" => "yes"
                            ],
                            [
                                "type" => "postback", 
                                "title" => "No",
                                "payload" => "no"
                            ]
                        ]
                    ]
                ]
         ];
     //...................................................................
$response = 
[
'recipient' => ['id' => $senderId],
'message' =>  $answer
];
//........................................................................
   
}

else if($quickreplyclick == 'qr4')
{
$answer='Then you are my senior!';
        
        
            
//!-----------------------------------------------------------------------------------------------
//response for text
$response = [
    'recipient' => ['id' => $senderId],
    'message' => ['text' => $answer]
];

//!--------------------------------------------------------------------------------------------------

}



else if ($buttonClick == 'yes'){
    $accessToken = $GLOBALS["accessToken"];
    $input = $GLOBALS["input"];
    $senderId = $GLOBALS["senderId"];
    $attachment_id=214852437309306; //change this


    $resp = '{
  "recipient":{
    "id":"' . $senderId . '"
  },
  "message":{
    "attachment":{
      "type":"image", 
      "payload":{
        "attachment_id": "' . $attachment_id . '"
      }
    }
  }
}';
$ch = curl_init('https://graph.facebook.com/v8.0/me/messages?access_token=' . $accessToken);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $resp);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
if (!empty($input)) {
 
    $result = curl_exec($ch);
}
curl_close($ch);






}










else if ($buttonClick == 'no')
{
     //text msg
     $answer = 'Thanks for Being with me.Best wishes for you!';
        
        
            
     //!-------------------------------------------------------------------------------------------------
     //response for text
     $response = [
         'recipient' => ['id' => $senderId],
         'message' => ['text' => $answer]
     ];
 
     //!--------------------------------------------------------------------------------------------------
}








//!!!---------------------------------------------close below------------------------------------------------!!!


$ch = curl_init('https://graph.facebook.com/v9.0/me/messages?access_token=' . $accessToken);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

if (!empty($input)) {
    $result = curl_exec($ch);
}
curl_close($ch);


//!!!----------------------------------------------end here--------------------------------------------------!!!