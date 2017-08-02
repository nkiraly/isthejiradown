<?php
/**
isthejiradown.com source is licensed under the Simplified BSD License
http://www.opensource.org/licenses/bsd-license.php

Redistribution and use in source and binary forms, with or without modification, are
permitted provided that the following conditions are met:

   1. Redistributions of source code must retain the above copyright notice, this list of
      conditions and the following disclaimer.

   2. Redistributions in binary form must reproduce the above copyright notice, this list
      of conditions and the following disclaimer in the documentation and/or other materials
      provided with the distribution.

THIS SOFTWARE IS PROVIDED ''AS IS'' AND ANY EXPRESS OR IMPLIED
WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND
FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE AUTHORS OR
CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR
CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF
ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

  $fuck_your_shit_reasons = array(
    "Holy Shit. You still work there? Fuuuuuuck.",   // \salute Lance Nealy our muse
    "And oh yeah, fuck you.",
    "Oh, and fuck your ticket edit.",
    "That edit was cray, brah. Rethink yourself.",
    "Honestly bro, I'd just try again later.",
    "If the problem persists, please open a JIRA ticket.",
    "There was an unexpected error with the forklift while loading the issue on to the dock.",
    "If you think this message is wrong, and you're still convinced it will help, please contact your <a href=\"https://github.com/nkiraly/isthejiradown\">JIRA administrators</a>."
  );
  $fuck_your_shit_reason = $fuck_your_shit_reasons[rand(0, count($fuck_your_shit_reasons) - 1)];
  $fuck_up_reasons = array(
    'internal_error_clang' => array(
      'title' => "500 Internal Server Error",
      'heading' => "Internal Server Error",
      'message' => "Something inside the server is making an awful clanging."
    ),
    'internal_error_issue_macro_pimentaco' => array(
      'title' => "500 Internal Server Error",
      'heading' => "Internal Server Error",
      'message' => "JIRA Issues Macro: Unable to digistruct the jiras, maybe you should have a pimentaco before you try again. Catch a Riiiiiiiiiiide!"
      // Scooter says don't walk, drive! My daddy always said wheels were better than heels. Uh, he was paralyzed, though. Anyway, don't walk, drive!
    ),
    'unavailable_underappreciation' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The server is temporarily unable to service your request due to over-subscription and underappreciation."
    ),
    'unavailable_capacity' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The server is temporarily unable to service your request due to failure of air conditioning units."
    ),
    'unavailable_fuckyou' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The server is temporarily unable to service your request because fuck you, that's why."
    ),
    'unavailable_trylater' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The server is temporarily unable to service your petty request."
    ),
    'unavailable_losthyperbole' => array(
      'title' => "503 Service Temporarily Unavailable",
      'heading' => "Service Temporarily Unavailable",
      'message' => "The JIRA server could not be contacted. This may be a temporary glitch or you might have just lost literally everything ever."
    ),
    'bad_gateway_attitude' => array(
      'title' => "502 Bad Gateway",
      'heading' => "Bad Gateway",
      'message' => "The proxy server received an invalid response from an upstream server with an attitude problem."
    ),
    'gateway_timeout_please_jira' => array(
      'title' => "504 Gateway Timeout",
      'heading' => "Gateway Timeout",
      'message' => "The server was acting as a gateway or proxy and did not receive a timely response from the self important upstream server."
    ),
    'activity_source_slow' => array(
      'title' => "504 Gateway Timeout",
      'heading' => "Gateway Timeout",
      'message' => "The activity source for 'JIRA' was slow to respond and isn't included because second place is first place loser"
    ),
  );
  $fuck_up_reason_index = array_keys($fuck_up_reasons);
  $fuck_up_panicked_answer_index = rand(0, count($fuck_up_reason_index) - 1);
  $fuck_up_panicked_answer_key = $fuck_up_reason_index[$fuck_up_panicked_answer_index];
  $fuck_up_bullshit_excuse_du_jour = $fuck_up_reasons[$fuck_up_panicked_answer_key];
  $fuck_up_bullshit_excuse_title = $fuck_up_bullshit_excuse_du_jour['title'];
  $fuck_up_bullshit_excuse_heading = $fuck_up_bullshit_excuse_du_jour['heading'];
  $fuck_up_bullshit_excuse_message = $fuck_up_bullshit_excuse_du_jour['message'];


$html_out = <<<HTML
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML 2.0//EN">
<html>
  <head>
    <title>$fuck_up_bullshit_excuse_title</title>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48981517-2', 'isthejiradown.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

  </head>
  <body>
    <h1>$fuck_up_bullshit_excuse_heading</h1>
    <p>$fuck_up_bullshit_excuse_message</p>
    <p>$fuck_your_shit_reason</p>
  </body>
</html>
HTML;

echo $html_out;

?>
