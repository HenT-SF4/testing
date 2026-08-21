<?php
$nama = 'farhan';
function nama(){
  global $nama;
  echo $nama;
}
//the question is, is that true?
nama();
?>
