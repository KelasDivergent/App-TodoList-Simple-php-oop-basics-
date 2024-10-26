<?php 
 
 require_once "./Model/TodoList.php";
 require_once "./BusinessLogic/ShowTodoList.php";
 require_once "./BusinessLogic/AddTodoList.php";
 require_once "./BusinessLogic/RemoveTodoList.php";

addTodoList("Hasby");
addTodoList("Aiman");
addTodoList("Divergent");
addTodoList("Insurgent");
addTodoList("Allegiant");


showTodoList();

removeTodoList(3); // menghapus data ke 3 yaitu divergent

showTodoList();

removeTodoList(2); // menghapus data ke 2 aiman

showTodoList();

// logic untuk menghapus data yang tidak ada remove tidak valid
$success = removeTodoList(4);
var_dump($success);