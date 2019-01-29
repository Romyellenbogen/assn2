<?php
	include 'database.php';
	$query = "SELECT * FROM myviewing ORDER BY title";
	$watching = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<title>What everyone is watching</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main2.css">
</head>

<body>
<div id="container" class="p-3 mx-auto" >

<h1 class="display-4">What everyone is watching</h1>

<p><a href="entry.php" class="badge badge-info">Add another entry</a></p>

	<!-- table column headings -->
	<table class="table table-hover table-dark">
	<tr>
	  <th>Name</th>
	  <th>Title</th>
	  <th>Genre</th>
	  <th>Medium</th>
	  <th>Rating</th>
	  <th>Review</th>
	</tr>

<!-- Begin PHP while-loop to display database query results
     with each row enclosed in TD tags.
	   Each time it loops, it writes ONE ROW -->
<?php while ($row = mysqli_fetch_assoc($watching)) :  ?>

<tr>
	<!-- notice how, above, the database record id becomes
		 the id and value of the radio button -->
	<td><?php echo $row['name']; ?></td>
	<td><?php echo $row['title']; ?></td>
  <td><?php echo $row['genre']; ?></td>
  <td><?php echo $row['medium']; ?></td>
  <td><?php echo $row['rate']; ?></td>
  <td><?php echo stripslashes ($row['review']); ?></td>
</tr>

<?php endwhile;  ?>
<!-- end the PHP while-loop
     everything else on this page is normal HTML -->

</table>
</div> <!-- close container -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
</body>
</html>
