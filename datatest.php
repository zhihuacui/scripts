<?php
$m = 'POST';
$n = '/s/meeting/notArrangedMeeting';
$o = 'access_token=RMFLLWY2UKIFT5JV56KD7RHK3VFTAS65YNY7P3VWHH4QNIMHGHJXUOO2362W63WHZMV4FWL5ZQAYS===&os=android&userId=17586&version=3.8.6';
$t = "2016-12-12\n12:10:11";
$strToSign = "{$m}\n{$n}\n{$o}\n{$t}";
$signStr = hash_hmac('sha1', $strToSign, '12345678', false);
echo $signStr;
?>
