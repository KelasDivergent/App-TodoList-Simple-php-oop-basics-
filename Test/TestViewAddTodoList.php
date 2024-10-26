<?php 

require_once "./View/viewAddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";

addTodoList("Hasby");
addTodoList("Aiman");
addTodoList("Divergent");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();