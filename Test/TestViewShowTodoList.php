<?php 
require_once "./View/viewShowTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/RemoveTodoList.php";


addTodoList("Hasby");
addTodoList("Aiman");
addTodoList("Divergent");
addTodoList("Insurgent");
addTodoList("Allegiant");

viewShowTodoList();