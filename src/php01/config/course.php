<!-- <?php
$company = htmlspecialchars($_POST['company'], ENT_QUOTES);
echo "会社名は" . $company . "ですね";
?> -->
<?php
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
echo "会社名は" . $company . "ですね";
?>