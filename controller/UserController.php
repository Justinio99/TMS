<?php

/**
 * Siehe Dokumentation im DefaultController.
 */
class UserController
{
    public function index()
    {
      var_dump($_SESSION['logged_in_user']);
      die();
        // Anfrage an die URI /user/crate weiterleiten (HTTP 302)
        header('Location: /user/create');
    }

    public function doCreate()
    {
      die("test");
        $view = new View('user_form');
        $view->title = 'Benutzer erstellen';
        $view->heading = 'Benutzer erstellen';
        $view->display();
    }

    public function doLogin(){
      $userRepository = new UserRepository();
      $error = false;
      $loggedIn = false;
      foreach ($userRepository->readAll() as $user) {
        if ($user->benutzername == $_POST['benutzername']) {
          if ($user->passwort == sha1($_POST['passwort'])){
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
      $view = new View('index_login');
      $view->title = 'Login';
      $view->heading = 'Login';
      $view->error = $error;
      $view->display();

    }
}
