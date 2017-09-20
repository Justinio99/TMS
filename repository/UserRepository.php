<?php

require_once '../lib/Repository.php';

/**
 * Das UserRepository ist zuständig für alle Zugriffe auf die Tabelle "user".
 *
 * Die Ausführliche Dokumentation zu Repositories findest du in der Repository Klasse.
 */
class UserRepository extends Repository
{
    /**
     * Diese Variable wird von der Klasse Repository verwendet, um generische
     * Funktionen zur Verfügung zu stellen.
     */
    protected $tableName = 'benutzer';

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
    public function create($benutzername, $vorname, $nachname, $password)
    {
        $password = sha1($password);

        $query = "INSERT INTO $this->tableName (benutzername, vorname, nachname, passwort) VALUES (?,?,?,?)";

        $statement = ConnectionHandler::getConnection()->prepare($query);
        $statement->bind_param('ssss',$benutzername, $vorname, $nachname, $password);

        if (!$statement->execute()) {
            throw new Exception($statement->error);
        }

        return $statement->insert_id;
    }


     public function getAllUsers(){
       $users = [];

       $query = "SELECT benutzername from $this->tableName";
       $statement = ConnectionHandler::getConnection()->prepare($query);

       if ($statement->execute()){
            /* bind result variables */
            $statement->bind_result($name);

            /* fetch values */
            while ($statement->fetch()) {
              array_push($users, $name);
            }
       }

       /* close statement */
       $statement->close();

       return $users;
     }


    public function selectBenutzer($benutzername)
    {
      $users = $this->getAllUsers();
      return in_array($benutzername, $users);
    }


    public function delete(){
        $query = "INSERT INTO $this->tableName (benutzername, vorname, nachname, passwort) VALUES (?,?,?,?)";
    }

    public function update(){

    }

}
