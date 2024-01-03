<?php

session_start(); #zaczyna nową sesję

session_unset(); #jeżeli sesja jest aktywna to ją zwalnia

header("Location: index.php"); #przekierowuje do strony index.php
exit(); #zamyka aktualna stronę 

?>