<?php

require_once '../repository/TaskRepository.php';

/**
 * Der Controller ist der Ort an dem es für jede Seite, welche der Benutzer
 * anfordern kann eine Methode gibt, welche die dazugehörende Businesslogik
 * beherbergt.
 *
 * Welche Controller und Funktionen muss ich erstellen?
 *   Es macht sinn, zusammengehörende Funktionen (z.B: User anzeigen, erstellen,
 *   bearbeiten & löschen) gemeinsam in einem passend benannten Controller (z.B:
 *   UserController) zu implementieren. Nicht zusammengehörende Features sollten
 *   jeweils auf unterschiedliche Controller aufgeteilt werden.
 *
 * Was passiert in einer Controllerfunktion?
 *   Die Anforderungen an die einzelnen Funktionen sind sehr unterschiedlich.
 *   Folgend die gängigsten:
 *     - Dafür sorgen, dass dem Benutzer eine View (HTML, CSS & JavaScript)
 *         gesendet wird.
 *     - Daten von einem Model (Verbindungsstück zur Datenbank) anfordern und
 *         der View übergeben, damit diese Daten dann für den Benutzer in HTML
 *         Code umgewandelt werden können.
 *     - Daten welche z.B. von einem Formular kommen validieren und dem Model
 *         übergeben, damit sie in der Datenbank persistiert werden können.
 */
class TaskController
{
    /**
     * Die index Funktion des DefaultControllers sollte in jedem Projekt
     * existieren, da diese ausgeführt wird, falls die URI des Requests leer
     * ist. (z.B. http://my-project.local/). Weshalb das so ist, ist und wann
     * welcher Controller und welche Methode aufgerufen wird, ist im Dispatcher
     * beschrieben.
     */
     public function index()
     {
         if (isset($_SESSION['logged_in_user'])) {
           $view = new View('Tasks');
           $view->title = 'Tasks';
           $view->user = $_SESSION['logged_in_user'];
           $view->heading = 'Tasks';
           $view->display();
         } else {

         // In diesem Fall möchten wir dem Benutzer die View mit dem Namen
         //   "default_index" rendern. Wie das genau funktioniert, ist in der
         //   View Klasse beschrieben.
         $view = new View('index_login');
         $view->title = 'Login';
        // $view->user = $_SESSION['logged_in_user'];
         $view->heading = 'Login';
         $view->display();
       }
     }

     public function tasks()
     {
         if (isset($_SESSION['logged_in_user'])) {
           $view = new View('Tasks');
           $view->title = 'Tasks';
           $view->user = $_SESSION['logged_in_user'];
           $view->heading = 'Tasks';
           $view->display();
         } else {

         // In diesem Fall möchten wir dem Benutzer die View mit dem Namen
         //   "default_index" rendern. Wie das genau funktioniert, ist in der
         //   View Klasse beschrieben.
         $view = new View('index_login');
         $view->title = 'Login';
        // $view->user = $_SESSION['logged_in_user'];
         $view->heading = 'Login';
         $view->display();
       }
     }

     public function erfassen()
     {
           $repo = new UserRepository();
           $users = $repo->getAllUsers();

         if (isset($_SESSION['logged_in_user'])) {
           $view = new View('TaskErfassen');
           $view->user = $_SESSION['logged_in_user'];
           $view->title = 'Task Erfassen';
           $view->heading = 'Task Erfassen';
           $view->users = $users;
           $view->display();
         } else {
         // In diesem Fall möchten wir dem Benutzer die View mit dem Namen
         //   "default_index" rendern. Wie das genau funktioniert, ist in der
         //   View Klasse beschrieben.
         $view = new View('index_login');
         $view->title = 'Login';
        // $view->user = $_SESSION['logged_in_user'];
         $view->heading = 'Login';
         $view->display();
       }
     }


     public function doCreateTask(){
       $benutzername = $_POST['benutzername'];
       $task = $_POST['taskTitel'];
       $beschreibung = $_POST['beschreibung'];
       $startdatum = $_POST['dateStart'];
       $enddatum = $_POST['dateEnde'];

       $TaskRepository = new TaskRepository();
       $Taskexist = $TaskRepository->selectTask($task);

       $AusgabeControl = 0;

       if (empty($benutzername))
       {
         $AusgabeControl = 1;
         var_dump($benutzername);
       }

       if (empty($task))
       {
         $AusgabeControl = 1;
         var_dump($task);
       }
       else {
         if (empty($Taskexist)){
           $AusgabeControl = 1;
           echo 'HAllo Hugo';
         }
       }

       if (empty($beschreibung)){
         $AusgabeControl = 1;
       }

       if (empty($startdatum)){
         $AusgabeControl = 1;
       }

       if (empty($enddatum)){
         $AusgabeControl = 1;
       }

       if ($AusgabeControl == 0)
       {
               $taskrepository = new TaskRepository();
               $userid = $taskrepository->create($benutzername, $task, $beschreibung, $startdatum, $enddatum);

               $ausgabe = 'Der Task wurde Erstellt!';
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

 }
