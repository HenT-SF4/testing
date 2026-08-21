<?php
$nama = 'farhan';
function nama(){
  global $nama;
  echo $nama;
}
//that would be true though
nama();
?>
