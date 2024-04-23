<?php

include('header.php');
?>



<body onLoad="document.form.submit();">
<div class="content">
	<center class="paypalheading"><h3>Please wait, your order is being processed...</h3><br /><img src='images/load.gif' width='50px'/><br />Loading......
	</center>
	<form method="post" name="form" action="https://www.paypal.com/cgi-bin/webscr">
	<input type="hidden" name="rm" value="2"><input type="hidden" name="cmd" value="_xclick"><input type="hidden" name="business" value="zulujuice@gmail.com"><input type="hidden" name="at" value="ACb9vut99j8KU2G14U9TkFjpZcjWAnDYW.r7Ou2lTSzmryt-ug8aG8G0"><input type="hidden" name="return" value="https://5gradio1.com/success.php"><input type="hidden" name="cancel_return" value="https://5gradio1.com/cancel.php"><input type="hidden" name="item_name" value="5GRADIO1 GLOBAL"><input type="hidden" name="currency_code" value="USD"><input type="hidden" name="amount" value=""></form>
</body>