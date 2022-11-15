<?php

require 'functions.php';

if(isset($_POST['todo_submit'])) {
  createTodo($_POST);
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>To Do List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="card">
          <div class="card-header">
            <h3>Your To Do List</h3>
          </div>
          <div class="card-body">
            <form action="index.php" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">To Do</label>
                <input type="text" class="form-control" name="todo" placeholder="Enter Your to do">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">To Do Time</label>
                <input type="date" class="form-control" name="todo_time">
              </div>
              <button type="submit" class="btn btn-primary" name="todo_submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>