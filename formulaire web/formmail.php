<?php $TO = "marinegoa.pro@gmail.com"; $h = "From: " . $TO; $message = ""; while (list($key, $val) = each($HTTP_POST_VARS)) { $message .= "$key : $val\n"; } mail($TO, $subject, $message, $h); Header("Location: http://localhost:8080/formulaire web/message_envoye.html"); ?>