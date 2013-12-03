<?php
	
	global $theme_path;
	$aen_path = base_path() . $theme_path;

	$content ='
	<div align="center">
<center>
        <table cellpadding="12" align="center" id="table_823" valign="top">
          <tr>
	            <td bgcolor="#FFFFFF">
	
	                    <table id="table_799" align="center" border="0" cellspacing="0" cellpadding="0">
	                      <tr>
	                        <td id="td_corner"><img src="' . $aen_path . '/images/table_TL.png" width="20" height="20" /></td>
	                        <td background="' . $aen_path . '/images/table_bg.png"><img src="' . $aen_path . '/images/spacer.gif" width="1" height="1" /></td>
	                        <td id="td_corner"><img src="' . $aen_path . '/images/table_TR.png" width="20" height="20" /></td>
	                      </tr>
	                      <tr>
	                        <td background="' . $aen_path . '/images/table_bg.png"><img src="' . $aen_path . '/images/spacer.gif" width="1" height="1" /></td>
	                        <td background="' . $aen_path . '/images/table_bg.png" valign="top"><div style="text-align: left; width: 759px; ">' . $content . '<p><div>' . l('Post an Event', 'node/add/cal-event') . '</div></p></div></td>
	                        <td background="' . $aen_path . '/images/table_bg.png"><img src="' . $aen_path . '/images/spacer.gif" width="1" height="1" /></td>
	                      </tr>
	                      <tr>
	                        <td id="td_corner"><img src="' . $aen_path . '/images/table_BL.png" width="20" height="20" /></td>
	
	                        <td background="' . $aen_path . '/images/table_bg.png"><img src="' . $aen_path . '/images/spacer.gif" width="1" height="1" /></td>
	                        <td id="td_corner"><img src="' . $aen_path . '/images/table_BR.png" width="20" height="20" /></td>
	                      </tr>
	                    </table>
	            </td>
	          </tr>
	        </table>
	</center>
	</div>';
	
	include('page.tpl.php');
