<?php

require_once '../lib/Repository.php';

/**
 * Das UserRepository ist zuständig für alle Zugriffe auf die Tabelle "user".
 *
 * Die Ausführliche Dokumentation zu Repositories findest du in der Repository Klasse.
 */
class TaskRepository extends Repository
{
    /**
     * Diese Variable wird von der Klasse Repository verwendet, um generische
     * Funktionen zur Verfügung zu stellen.
     */
    protected $tableName = 'task';

    /**
     * Erstellt einen neuen benutzer mit den gegebenen Werten.
     *
     * Das Passwort wird vor dem ausführen des Queries noch mit dem SHA1
     *  Algorythmus gehashed.
     *
     * @param $firstName Wert für die Spalte firstName
     * @param $lastName Wert für die Spalte lastName
     * @param $email Wert für die Spalte email
     * @param $password Wert für die Spalte password
     *
     * @throws Exception falls das Ausführen des Statements fehlschlägt
     */

     public function selectTask($task){

       $query = "SELECT 'task_title' from $this->tableName where task_title = ?";

       $statement = ConnectionHandler::getConnection()->prepare($query);
       $statement->bind_param('s',$task);

       return $statement->execute();

     }

     public function create($benutzername, $task, $beschreibung, $startdatum, $enddatum){

       //DD.MM.YYYY
       $timestamp1 = strtotime($startdatum);
       $mysqldate1 = date( 'Y-m-d H:i:s', $timestamp );

       $timestamp2 = strtotime($enddatum);
       $mysqldate2 = date( 'Y-m-d H:i:s', $timestamp );

       $query = "INSERT INTO $this->tableName (task_title, beschreibung, start_datum, end_datum, benutzername) VALUES (?,?,?,?,?)";

       $statement = ConnectionHandler::getConnection()->prepare($query);
       $statement->bind_param('sssss',$task, $beschreibung, $mysqldate1, $mysqldate2, $benutzername);

       if (!$statement->execute()) {
           throw new Exception($statement->error);
       }

       return $statement->insert_id;

     }

}
