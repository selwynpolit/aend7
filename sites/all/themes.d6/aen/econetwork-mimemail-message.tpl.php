<?php
// $Id$

/*
  Available vars: $body, $mailkey, $banner, $events
*/
?>
<html>
  <head>
  </head>
  <body>
	<table border="0" cellpadding="3" cellspacing="3" style="border-collapse: collapse" bordercolor="#111111" width="600" id="AutoNumber1">
	  <tr>
	    <td width="50%">
		<?php print $body; ?>
		</td>
	    <td width="50%" bgcolor="#7CC737" valign="top">
		<?php print $events; ?>
		</td>
	  </tr>
	  <tr>
	    <td width="100%" colspan="2">
	    <?php print $banner; ?>
		</td>
	  </tr>
	</table>
  </body>
</html>
