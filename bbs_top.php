<table width="870" height="30" border="0" align="center" cellpadding="0" cellspacing="0" background="images/lt_15(1).jpg">
      <tr>
        <td height="4"></td>
        <td height="4"></td>
        <td width="387" rowspan="2">&nbsp;
          <select name="select_type" class="inputcss" onChange="javascript:window.location=this.options[this.selectedIndex].value;" >
	<?php
	  $sql=mysql_query("select * from tb_type_small order by createtime desc",$conn);
	  $info=mysql_fetch_array($sql);
	  if($info=="")
	  {
	    echo "<option></option>";
	  }
	  else
	  { 
	   echo "<option>-ת-</option>";
	   do
	   {
	    echo "<option value='bbs_list.php?id=".$info['id']."'>".$info['title']."</option>";
	   }
	   while($info=mysql_fetch_array($sql));
	  } 
	 ?>
      </select></td>
      </tr>
      <tr>
        <td class="a9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ǰλ&nbsp;&gt;&gt;&nbsp;̳&nbsp;</td>
        <td width="142"><span class="a9"><a href="bbs_index.php" class="a4">̳</a>&nbsp;&nbsp;<a href="bbs_find.php" class="a4"></a></span></td>
      </tr>
    </table>
