<?php 


// Class for dataBase, dataBase values and manipulation with them
class Model{

  private $dbhost = "localhost";
  private $dbuser = "root";
  private $dbpass = "";
  private $dbname = "todolist";

  public $conn;
# - Connect to dataBase
  function __construct() { 
    $this->conn = mysqli_connect($this->dbhost, $this->dbuser,
                                 $this->dbpass, $this->dbname);
    if (!$this->conn) 
      die("Connection failed: " . mysqli_connect_error());
  }

# ! Functions to manage data !

#-- method for prepared statements
  function getResult(string $sql, ?string $types = null, array $values) {
    $result = $this->conn->prepare($sql); // Prepare $sql
    if (is_null($types)) 
      $types = str_repeat("s", count($values)); // input types "s" as many as values
    $result->bind_param($types, ...$values);
    $result->execute();
    return $result->get_result() ?: null;
  }

}

# - Class for tasks and task actions
class TasksModel extends Model {

  function __construct() {
    parent::__construct(); // connect to database
  }
  
  function getAllTasks() { // get all tasks from data base
    $sql = "SELECT * FROM task";
    $result = $this->conn->query($sql);
    if ($result->num_rows > 0)
      return $result; // return result to TasksController
    else  
      return "nesagaja"; //error msg
  }

  function addTask($array) { // add task to data base
    $sql = "INSERT INTO task (Title, Description, MotivationText, isUrgent) 
            VALUES (?,?,?,?)";

    $result = $this->getResult($sql, null, $array);
    echo $this->conn->error;
    echo "kaka";
  }

  function getTask($taskId) {
    $taskId = $this->conn->real_escape_string($taskId); //Escape special characters in strings
    $sql = "SELECT * FROM task WHERE Task_ID = ?";    
    $result = $this->getResult($sql, null, array($taskId) );  // Get result with prepared statement

    if($result->num_rows > 0 )
      return $result;
    else 
      echo "nesagaja Tev, Krisjani";
  }

  function saveEditedTask($values) { // function to save edited task
    $sql = "UPDATE task SET 
            Title = ?, 
            Description = ?, 
            MotivationText = ?, 
            isUrgent = ?
            WHERE Task_ID = ?";
    $result = $this->getResult($sql, null, $values);
  }

  function deleteTask($taskId){
    $taskId = $this->conn->real_escape_string($taskId); //Escape special characters in strings
    $sql = "DELETE FROM task WHERE Task_ID = ?";
    $result = $this->getResult($sql, null, array($taskId));
  }

  function changeDone($values){
    $sql = "UPDATE task SET isDone = ? WHERE Task_ID = ?";
    $result = $this->getResult($sql, null, $values);
  }

}

?>