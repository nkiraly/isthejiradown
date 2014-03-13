<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<?php
  $fuck_up_reasons = array(
    'original' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The server is temporarily unable to service your request due to maintenance downtime or capacity problems. Please try again later."
    )
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
