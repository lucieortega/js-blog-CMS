<?php
include 'header.php';
?>
<form action="submit-post.php" method="POST"> ... </form>
<?php
$.get( "index.php")
    .done(function( data ) {
        alert( "Data Loaded: " + data );
    });
$.post( "submit-post.php", { 
	title: "AJAX Post", 
	content: "AJAX Post Content", 
	author: "me", 
	date: "2018-01-01" 
}).done(function( data ) {
	alert( "Data Loaded: " + data );
});
   // get the data to insert into the db
   $title = $_POST["title"];
   $content = $_POST["content"];
   $author = $_POST["author"];
   $date = $_POST["date"];

   // insert the data with the sql query
   include_once 'db_connect.php';
   $sql="INSERT INTO posts (title, content, author, date) VALUES ('" .     
       $title . "','" .  $content . "','" . $author . "','" . $date . "')";
   $result = mysqli_query($conn, $sql);
   
   // redirect to homepage
   header("Location: index.php");
?>$
<!doctype HTML>
<html lang="en">
    <main>
	<head>
    <title>Post-submission</title>
	</head>
	<body>
		<h1>Welcome</h1>
		<h2>Bienvenue - Bienvenidos</h2>
		<form action="/action_page.php" method="get">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br><br>
            <input type="submit" value="Submit">
          </form>
		  <form action="submit-post.php" method="POST"> ... </form>
        </div>


        <label for="brand">Content</label>

<textarea id="brand" name="brand" rows="4" cols="50">
</textarea>
<input type="button" value="Done" onclick="msg()">
		<nav>
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
