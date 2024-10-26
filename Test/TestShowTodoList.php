<?php 

require_once "Model/TodoList.php";
require_once "BusinessLogic/ShowTodoList.php";


// test show todo list before create aplication
$todoList[1] = "Reading PHP Basic";
$todoList[2] = "Reading PHP OOP";
$todoList[3] = "Reading PHP Database";

showTodoList();