<?php
  $n = "\n";
  $pseudo = "► Pseudo:"." ". $_POST['pseudo']. $n;
  $age = "► Age:"." ". $_POST['age']. $n;
  $pays = "► Pays:"." ". $_POST['pays']. $n;
  $avis = "► Avis:"." ". $_POST['avis']. $n;

  $myfile = fopen("results.txt") or die("Unable to open file!");

  fwrite($myfile, $pseudo);
  fwrite($myfile, $age);
  fwrite($myfile, $pays);
  fwrite($myfile, $avis);
  fclose($myfile);

  header('location: index.html');

  exit;

?>
