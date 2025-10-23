<?php


$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name= $email =$gender = $comment =$website = ""; ?>




<form method="post" action=
"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name" value="<?php echo $name;?>">
<span class="error">*<?php echo $nameErr;?></span>
<br><br>
E-mail: <input type="text" name="email" value="<?php echo $email;?>">
<span class="error">*<?php echo $emailErr;?></span>
<br><br>
Website: <input type="text" name="website" value="<?php echo $website;?>">
<span class="error"><?php echo $websiteErr;?></span>

