<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<?php
  $fuck_your_shit_reasons = array(
  	"And oh yeah, fuck you.",
  	"Oh, and fuck your ticket edit."
  );
  $fuck_your_shit_reason = $fuck_your_shit_reasons[rand(0, count($fuck_your_shit_reasons) - 1)];
  $fuck_up_reasons = array(
    'unavailable' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later."
    ),
    'unavailable_rage' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later. " . $fuck_your_shit_reason
    ),
    'bad_gateway' => array(
      'title' => "502 Bad Gateway",
      'heading' => "Bad Gateway",
      'message' => "The proxy server recieved and invalid response from and upstream server."
    ),
    'bad_gateway_rage' => array(
      'title' => "502 Bad Gateway",
      'heading' => "Bad Gateway",
      'message' => "The proxy server recieved and invalid response from and upstream server. " . $fuck_your_shit_reason
    ),
  );
  $fuck_up_reason_index = array_keys($fuck_up_reasons);
  $fuck_up_panicked_answer_index = rand(0, count($fuck_up_reason_index) - 1);
  $fuck_up_panicked_answer_key = $fuck_up_reason_index[$fuck_up_panicked_answer_index];
  $fuck_up_bullshit_excuse_du_jour = $fuck_up_reasons[$fuck_up_panicked_answer_key];
?>
<html><head>
<title><?php echo $fuck_up_bullshit_excuse_du_jour['title']; ?></title>
</head><body>
<h1><?php echo $fuck_up_bullshit_excuse_du_jour['heading']; ?></h1>
<p><?php echo $fuck_up_bullshit_excuse_du_jour['message']; ?></p>
</body></html>
