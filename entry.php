<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peer reviewed TV</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div class="p-3 mx-auto" style="width: 500px;">
  <h1 class="display-4">What are you watching?</h1>
  <p><a href="listing.php" class="badge badge-info">See what other people are watching</a></p>
  <div id="watchingForm">
  <form id="watching" method="post">
    <div class="form-group">
    <label class="form-control-label" for="name">Name</label>
    <input class="form-control" type="text" name="name">
  </div>
  <div class="form-group">
  <label class="form-control-label" for="title">What are you watching now?</label>
  <input class="form-control" type ="text" name="title" placeholder="Movie/TV show title">
</div>
<div class="form-group">
  <p>What is the genre?</p>
  <select class="form-control" name="genre">
    <option>Comedy</option>
    <option>Drama</option>
    <option>Horror</option>
    <option>Romance</option>
    <option>Documentary</option>
    <option>Other</option>
  </select>
</div>
<div class="form-group">
  <p>Where are you watching it?</p>
  <select class="form-control" name="medium">
    <option>Netflix</option>
    <option>Hulu</option>
    <option>Amazon Prime</option>
    <option>HBO</option>
    <option>Cable</option>
    <option>DVD</option>
    <option>Other</option>
  </select>
</div>
<div class="form-group">
    <p>What would you rate it out of 5?</p>
      <div class="form-check">
      <label class="form-check-label"><input class="form-check-input" type="radio" name="rate" value="1">1</label>
    </div>
    <div class="form-check">
      <label class="form-check-label"><input class="form-check-input" type="radio" name="rate" value="2">2</label>
    </div>
    <div class="form-check">
      <label class="form-check-label"><input class="form-check-input" type="radio" name="rate" value="3">3</label>
    </div>
    <div class="form-check">
      <label class="form-check-label"><input class="form-check-input" type="radio" name="rate" value="4">4</label>
    </div>
    <div class="form-check">
      <label class="form-check-label"><input class="form-check-input" type="radio" name="rate" value="5">5</label>
    </div>
  </div>
  <div class="form-group">
  <label class="form-control-label" for="review">Why should you watch?</label>
  <input class="form-control" type ="textarea" name="review" placeholder="Whatever you think about the show" id="review">
</div>
<div class="form-group">
  <input class="btn btn-outline-success btn-lg" type="submit" value="Submit" >
</div>
  </form>
</div>
<div id="response">
    <p class="announce">Thanks for submitting the form!</p>
    <p class="middle"><a href="entry.php">Return to the form</a></p>
</div>
</div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
  <script src="js/enter.js"></script>
</body>
</html>
