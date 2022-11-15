<?php
require 'db.php';
function createTodo($request){
    global $con;
    $todo = mysqli_real_escape_string($con, $request['todo']);
    $todo_time = mysqli_real_escape_string($con, $request['todo_time']);

    $query = "INSERT INTO `todo`(`todo`,`todo_time`) VALUES('$todo','$todo_time')";
    $execute_query = mysqli_query($con, $query);
    if($execute_query){
        header('location:todo.php');
    }
}

function getTodo(){
    global $con;
    $query = "SELECT * FROM `todo`";
    $execute_query = mysqli_query($con, $query);
    return $execute_query;
}

function changeStatus($id, $status){
    global $con;
    if($status === 'undone'){
        $query = "UPDATE `todo` SET `status`= 0 WHERE `id` = $id";
        $execute_query = mysqli_query($con, $query);
        if($execute_query){
            header('location: todo.php');
        }
    }
    if($status === 'done'){
        $query = "UPDATE `todo` SET `status`= 1 WHERE `id` = $id";
        $execute_query = mysqli_query($con, $query);
        if($execute_query){
            header('location: todo.php');
        }
    }


}

function delete($id){
    global $con;
    $query = "DELETE FROM `todo` WHERE `id` = '$id'";
    $execute_query = mysqli_query($con, $query);

    if($execute_query){
        header('location: todo.php');
    }
}

function getSingleTodo($id){
    global $con;
    $query = "SELECT * FROM `todo` WHERE `id` = '$id'";
    $execute_query = mysqli_query($con, $query);
    $get_todo = mysqli_fetch_assoc($execute_query);
    return $get_todo;
}
function updateTodo($request){
    global $con;
    $id = mysqli_real_escape_string($con,$request['id']);
    $todo = mysqli_real_escape_string($con,$request['todo']);
    $todo_time = mysqli_real_escape_string($con,$request['todo_time']);

    $query = "UPDATE `todo` SET `todo` = '$todo', `todo_time` = '$todo_time' WHERE `id` = '$id'";
    $execute_query = mysqli_query($con, $query);
    if($execute_query){
        header('location: todo.php');
    }
}

?>