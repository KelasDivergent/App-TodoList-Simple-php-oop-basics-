<?php 

require_once "Model/TodoList.php";

// in folder BusinessLogic 
require_once "BusinessLogic/ShowTodoList.php";
require_once "BusinessLogic/AddTodoList.php";
require_once "BusinessLogic/RemoveTodoList.php";
require_once "BusinessLogic/EditTodoList.php";

// in folder view
require_once "View/viewShowTodoList.php";
require_once "View/viewAddTodoList.php";
require_once "View/viewRemoveTodoList.php";
require_once "View/viewEditTodoList.php";

// in helper
require_once "Helper/Input.php";

echo "Aplication Todolist" . PHP_EOL;

viewShowTodoList();

