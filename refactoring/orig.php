<?php
 if ($handle = opendir('./orig')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != ".." && $file != "dot")
	  {
          	$thelist .= '<a href="orig/'.$file.'">'.$file.'</a>';
            $thelist .= "\n";
          }
       }
  closedir($handle);
  }
  
   if ($handle2 = opendir('./orig/dot')) {
   while (false !== ($file2 = readdir($handle2)))
      {
          if ($file2 != "." && $file2 != "..")
	  {
          	$thelist2 .= '<a href="orig/dot/'.$file2.'">'.$file2.'</a>';
            $thelist2 .= "\n";
          }
       }
  closedir($handle2);
  }
  
?>
<P>List of Original Pipes Files:</p>
<P><?=$thelist?></p>
<br>
<P>List of DOT Files for the Original Pipes:</p>
<P><?=$thelist2?></p>
