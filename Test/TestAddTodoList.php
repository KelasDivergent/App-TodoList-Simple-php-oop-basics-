<?php 

require_once "./Model/TodoList.php";
require_once "./BusinessLogic/AddTodoList.php";

// Test add Todo List
addTodoList("Hasby");
addTodoList("Aiman");
addTodoList("Divergent");

var_dump($todoList);
