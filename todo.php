<?php 
require 'functions.php';

$get_todo = getTodo();

if(isset($_GET['status']) && $_GET['id']){
    $id = $_GET['id'];
    $status = $_GET['status'];
    if($_GET['status'] === 'undone'){
        changeStatus($id, $status);
    }
    if($_GET['status'] === 'done'){
        changeStatus($id, $status);
    }
}else{
    ?>
    <script>window.href.location ='todo.php';</script>
    <?php
}

if(isset($_GET['action']) && $_GET['id']){
    $id = $_GET['id'];
    if($_GET['action'] === 'delete'){
        delete($id);
    }
}else{
    ?>
    <script>window.href.location ='todo.php';</script>
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
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h3>My To Do List</h3>
            <a href="index.php" class="btn btn-info float-right">Add a new Todo</a>
          </div>
          <div class="card-body">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Todo</th>
                  <th scope="col">Todo Time</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($get_todo as $todo) {
                ?>
                  <tr>
                    <th><?= $todo['id']; ?></th>
                    <td><?= $todo['todo']; ?></td>
                    <td><?= $todo['todo_time']; ?></td>
                    <td><?= date('M-d-Y, h:i a', strtotime($todo['created_at'])); ?></td>
                    <td><?= date('M-d-Y, h:i a', strtotime($todo['updated_at'])); ?></td>
                    <td>
                      <?php
                      if ($todo['status'] == 1) { ?>
                        <a href="todo.php?id=<?= $todo['id'] ?>&status=undone" class="btn btn-success">Done</a>
                      <?php } else { ?>
                        <a href="todo.php?id=<?= $todo['id'] ?>&status=done" class="btn btn-secondary">Undone</a>
                      <?php } ?>

                      <a href="edit.php?id=<?= $todo['id']; ?>" class="btn btn-primary">Edit</a>
                      <a href="todo.php?id=<?= $todo['id']; ?>&action=delete" class="btn btn-danger">Delete</a>

                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>