<?php
- $company = htmlspecialchars($_POST['company'], ENT_QUOTES);
+ $company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "会社名は" . $company . "ですね";
