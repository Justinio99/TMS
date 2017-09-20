<?php

require_once '../repository/UserRepository.php';

/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{
    public function index()
    {
      // var_dump($_SESSION['logged_in_user']);
      // die();
        // Anfrage an die URI /user/crate weiterleiten (HTTP 302)
        header('Location: /user/create');
    }

    public function postCheck($string){
      $prepareString = htmlspecialchars($string);
      return $prepareString;

    }

    public function erfassen()
    {
   //  $user = $_SESSION['logged_in_user'];
     if (!empty($user)){

        $view = new View('BenutzerErfassen');
        $view->title = 'Benutzer Erfassen';
        $view->user = $_SESSION['logged_in_user'];
        $view->heading = 'Benutzer Erfassen';
        $view->display();

    //
     }
     else{
       $view = new View('BenutzerErfassen');
       $view->title = 'Benutzer Erfassen';
       //$view->user = $_SESSION['logged_in_user'];
       $view->heading = 'Benutzer Erfassen';
       $view->display();
     }
   }


    public function doCreate()
    {

      //die("test");
      $UserController = new UserController();
      // Werte aus $POST auslesen.
      $benutzername = $UserController->postCheck($_POST['benutzername']);
      $vorname = $UserController->postCheck($_POST['vorname']);
      $nachname = $UserController->postCheck($_POST['nachname']);
      $password = $UserController->postCheck($_POST['password']);
      $passwordrepeat = $UserController->postCheck($_POST['passwordrepeat']);



      // validieren


      $UserRepository = new UserRepository();
      $benutzerexist = $UserRepository->selectBenutzer($benutzername);

      $AusgabeControl = 0;

      // Benutzername Validierung
      if (!isset($benutzername) || !isset($vorname) || !isset($nachname))
      {
        $AusgabeControl = 1;
      }
      else if ($benutzerexist){
          $AusgabeControl = 1;
      }

      // Passwort Validierung
      if (isset($password) && isset($passwordrepeat))
      {
        if ($password != $passwordrepeat)
        {
          $AusgabeControl = 1;
        }
      }
      else
      {
        $AusgabeControl = 1;
      }

      if ($AusgabeControl == 0)
      {
              $userrepository = new UserRepository();
              $userid = $userrepository->create($benutzername, $vorname, $nachname, $password);

              $ausgabe = 'Der Benutzer wurde Erstellt!';
              $titleAusgabe = 'Success';
      }
      else
      {
          $ausgabe = 'Die Validierung ist Fehlgschlagen!';
          $titleAusgabe = 'Failed';

      }

      $view = new View('ValidierungPage');
      $view->title = $titleAusgabe;
      $view->user = $_SESSION['logged_in_user'];
      $view->ausgabe = $ausgabe;
      $view->heading = $titleAusgabe;
      $view->display();
    }

// Ende der Validierung

    public function Logout(){

      $_SESSION = [];
      setcookie(session_name(),'',1);
      header("location:/");

    }

    public function doLogin(){
      $userRepository = new UserRepository();
      $error = false;
      $loggedIn = false;
      foreach ($userRepository->readAll() as $user) {
        if ($user->benutzername == postCheck($_POST['benutzername'])) {
          if ($user->passwort == postCheck(sha1($_POST['passwort']))){
            $_SESSION['logged_in_user'] = $user->benutzername;
            $loggedIn = true;
          } else {
            $error = true;
          }
        }
      }
      $error = true;

      if ($loggedIn) {
        header('Location: /');
        die();
      }
      else {
        $ausgabe = 'Login Fehlgschlagen!';

        $view = new View('ValidierungPage');
        $view->title = 'Login Fehlgschlagen';
        //$view->user = $_SESSION['logged_in_user'];
        $view->ausgabe = $ausgabe;
        $view->heading = 'Login Fehlgschlagen';
        $view->display();
      }

      $view = new View('index_login');
      $view->title = 'Login';
      $view->heading = 'Login';
      $view->error = $error;
      $view->display();

    }
}
