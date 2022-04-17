<?php 
	include_once 'db_connect.php'; // Connect to the database
	$sql = "SELECT title FROM posts";
	$result = mysqli_query($conn, $sql);

	$postTitles = array();
	while($row = mysqli_fetch_assoc($result)){
		array_push($postTitles, $row['title']);
	}
?>
<?php
	function getPostTitlesFromDatabase() {
		// Get all the post titles from the posts table
		include_once 'db_connect.php';
		$sql = "SELECT title FROM posts";
		$result = mysqli_query($conn, $sql);
	

		// Get each result rowq as an assoc array, then add title to $postTitles
		$postTitles = array();
		while($row = mysqli_fetch_assoc($result)){
			array_push($postTitles, $row['title']);
		}
		return $postTitles;
	}
?>
<ul> 
<?php 
	$postTitles = getPostTitlesFromDatabase();

	foreach ($postTitles as $postTitle) {
		echo "<li><a href='post.php'>" . $postTitle . "</a></li>"; 
	}
	?>
</ul>
    <main>
	<head>
    <title>Homepage</title>
	</head>
	<body>
		<h1>Welcome</h1>
		<h2>Bienvenue - Bienvenidos</h2>
		<div class="container turquoise topBotomBordersOut">
			<a href="post.php">post</a>
			<a href="post-submission.php">Post-submission</a>
		</div>
		<nav>
		<a href="https://www.instagram.com/luciernaga.maison/" target="_blank" rel="noopener noreferrer">
		<img rel="stylesheet" href="index.html"> <link rel="post" href="post-submission.html"/></a>
		</nav>
	</main>
		<footer>
			<p>
			© 2022 Lucie Ortega
			</p>
		</footer>
	</body>
</html>
