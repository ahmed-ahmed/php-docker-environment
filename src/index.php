<?php
	class User{
		protected $id;
		protected $name;

	    public function getId()
	    {
	        return $this->id;
	    }

	    public function setId($id)
	    {
	        $this->id = $id;
	    }

	    public function getName()
	    {
	        return $this->name;
	    }

	    public function setName($name)
	    {
	        $this->name = $name;
	    }
	}


	$server = "mysql";
	$username = "project";
	$password= "project";
	$database = "project";

	try{
		$pdo = new PDO("mysql:host={$server};dbname={$database};charset=utf8", $username, $password);
		echo "Connected to database";

		$sql = $pdo->query('SELECT * from users', PDO::FETCH_CLASS, 'User'); 

		while ($row = $sql->fetchObject('User')) {
			echo $row->getName().'<br>';
		}

	} catch(PDOException $e) {
		echo $e->getMessage();
	} catch(Throwable $e) {
		echo $e->getMessage();
	}

	// $affectedRows = $connection->exec('insert into users values(1, "ahmed")');
	// echo $affectedRows;


	// $statement = $connection->query('SELECT * from users');
	// while($row = $statement->fetch(PDO::FETCH_CLASS, 'User')) {
	//     echo $row->getId() . ' ' . $row->getName();
	// }

	// $conn = mysql_connect($server, $username, $password);

     //    $database   = $user = $password = "project";
     //    $host       = "mysql";
     //    $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
     //    $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");
     //    $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

     //    if (empty($tables)) {
     //        echo "<p>There are no tables in database \"{$database}\".</p>";
     //    } else {
     //        echo "<p>Database \"{$database}\" has the following tables:</p>";
     //        echo "<ul>";
     //        foreach ($tables as $table) {
     //            echo "<li>{$table}</li>";
     //        }
     //        echo "</ul>";
    	// }


?>