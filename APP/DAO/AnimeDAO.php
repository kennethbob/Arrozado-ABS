<?php

	include 'DAO/BaseDAO.php';

	class AnimeDAO extends BaseDAO {

		function addBooks($username, $book_title, $volume, $date_added) {

			$this->open();
			$stmt = $this->dbh->prepare("INSERT INTO ".$username."(book_title, volume, date) VALUES (?, ?, ?)")

			$stmt->bindParam(1, $book_title);
			$stmt->bindParam(2, $volume)
			$stmt->bindParam(3, $date_added);
			$book_id = $this->dbh->lastInsertedId();

			 echo "<tr>";
          echo "<td>".$book_id."</td>";
			 echo "<td>".$book_title."</td>";
			 echo "<td>".$volume."</td>";
			 echo "<td>".$date_added."</td>";
			 echo "</tr>";

			$this-close();
		
		}

		function viewProducts() {
			
			$this->open();
			$stmt = $this->dbh->prepare("SELECT * FROM products");
			$stmt->execute();

			while($row = $stmt->fetch()) {

				echo "<tr>";
				echo "<td>".$row[0]."</td>";
				echo "<td>".$row[1]."</td>";
				echo "<td>".$row[2]."</td>";
				echo "<td>".$row[3]."</td>";
				echo "<td>[<button id = 'DI' onclick = 'addBook(".$row[0].")'>add to my collections</button>]";
			}
			
			$this->close();
			
		}		
		
	}
?>
