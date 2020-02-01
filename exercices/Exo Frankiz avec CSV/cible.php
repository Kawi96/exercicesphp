<?php
  session_start();
  $myfile = fopen("tab.txt", "r");
  $doc=fread($myfile,filesize("tab.txt"));
  $tab = (explode("\n", $doc));
  foreach ($tab as $key => $value) {
    $tab[$key]= explode(":", $value);
  }
  //var_dump($tab);
  //0print_r($_POST);
  for($i=0; $i<count($tab); $i++){
    //print_r($tab[$i]);
    if(trim($tab[$i][0])==$_POST['pseudo']){
      if(trim($tab[$i][1])==$_POST['password']){
        echo "nom utilisateur et mot de passe déjà utilisé";
        $_SESSION['logged'] = true;
        header('location: session.php');
      }
    }
    else {
      //echo "cet utilisateur et ce mot de passe ne sont pas utilisé";
    }
  }
