<?php
include 'header.php';
	function getPostDetailsFromDatabase() {
		// Get the post title  
		$postDetails = array('tilte' => 'Blog Post 1',
							 'content' => 'My first blog post',
							 'date' => '01/01/2018',
							 'author' => 'christikaes');  
		return $postDetails;
		$postTitle = rawurldecode($_GET["title"]);

		// Get the post that matches the postTitle
		include_once 'db_connect.php'; // Connect to the database
		$sql = "SELECT * FROM posts WHERE title='" .$postTitle . "'";
		$result = mysqli_query($sql);
		
		// Get the first row from the result as an associative array
		$postDetails = mysqli_fetch_assoc($result);
		return $postDetails;
	}
?>
<?php
		function getPostDetailsFromDatabase() {
			// Get the post title
			$postTitle = rawurldecode($_GET["title"]);
		
			// Get the post that matches the postTitle
			include_once 'db_connect.php';
			$sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
			$result = mysqli_query($conn, $sql);
		
			// Get the first row from the result as an associative array
			$postDetails = mysqli_fetch_assoc($result);
			return $postDetails;
?>
			<body>
<?php
		 // Post details contains all the data to generate the blog from
		 $postDetails = getPostDetailsFromDatabase();
?>
<h1> <?php echo $postDetails["title"]; ?> </h1>
<div> <?php echo $postDetails["author"]; ?> </div>
<div> <?php echo $postDetails["date"]; ?> </div>
<div> <?php echo $postDetails["content"]; ?> </div>

<!doctype HTML>
<html lang="en">
	
    <main>
    <head>
    <title>Post</title>
	</head>
	<body>
		<h1>TITLE</h1>
    
       <div>author, date published, and post content</div> 

		<div> Lorem ipsum dolor sit amet. Ut dolores accusantium At voluptatum ipsa aut esse optio est labore ab Quis voluptas.
		 Et iure temporibus et voluptatem dolorum sit quidem error in galisum tempora et molestiae eligendi! Eum nihil deleniti 
		 et quia sequi quo ipsum corporis.Aut dolore incidunt rem earum ipsa hic ipsam tempora sed harum quas. Est dolores nemo 
		 in placeat minus est cupiditate nihil vel sunt atque vel rerum sapiente qui accusamus ratione. Et nisi aspernatur qui 
		 consectetur consequatur est voluptatem rerum qui consectetur dicta et quibusdam nobis. Ut quibusdam dolores ea ratione
		  explicabo aut unde minima cum ratione officiis eos quis labore? Et incidunt numquam sit iure distinctio qui voluptatem
		   consequatur est fugiat sapiente est quos autem.</div>
		<footer>
			<p>
			© 2022 Lucie Ortega
			</p>
		</footer>
    </body>
    </main>
</html>
