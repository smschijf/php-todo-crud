<?php
require 'functions.php';
if (isset($_POST['todo_update'])) {
  updateTodo($_POST);
}
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $todo = getSingleTodo($id);
} else {
?>
  <script>
    window.href.location = 'todo.php';
  </script>
<?php
}



?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

  <title>To Do List</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="card">
          <div class="card-header">
            <h3>My To Do List</h3>
          </div>
          <div class="card-body">
            <form action="edit.php" method="POST">
              <input type="hidden" name="id" value="<?= $todo['id']; ?>">
              <div class="form-group">
                <label for="exampleInputEmail1">To Do</label>
                <input type="text" class="form-control" value="<?= $todo['todo']; ?>" name="todo" placeholder="Enter Your to do">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">To do Time</label>
                <input type="date" class="form-control" value="<?= $todo['todo_time']; ?>" name="todo_time">
              </div>

              <button type="submit" name="todo_update" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>