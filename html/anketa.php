<?php
$vote = $_REQUEST['vote'];

//get content of textfile
$filename = "anketa-rezultat.txt";
$content = file($filename);

//put content in array
$array = explode("||", $content[0]);
$da = $array[0];
$ne = $array[1];

if ($vote == 0) {
  $da = $da + 1;
}
if ($vote == 1) {
  $ne = $ne + 1;
}

//insert votes to txt file
$insertvote = $da . "||" . $ne;
$fp = fopen($filename, "w");
fputs($fp, $insertvote);
fclose($fp);
?>

<h2>Rezultat:</h2>
<table>
  <tr>
    <td>Da:</td>
    <td><img src="../img/poll.gif" width='<?php echo (100 * round($da / ($ne + $da), 2)); ?>' height='20'>
      <?php echo (100 * round($da / ($ne + $da), 2)); ?>%
    </td>
  </tr>
  <tr>
    <td>Ne:</td>
    <td><img src="../img/poll.gif" width='<?php echo (100 * round($ne / ($ne + $da), 2)); ?>' height='20'>
      <?php echo (100 * round($ne / ($ne + $da), 2)); ?>%
    </td>
  </tr>
</table>