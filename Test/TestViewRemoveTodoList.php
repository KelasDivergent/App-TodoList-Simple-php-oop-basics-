<?php 

require_once "./Model/TodoList.php";
require_once "./View/ViewRemoveTodoList.php";
require_once "./BusinessLogic/AddTodoList.php";
require_once "./BusinessLogic/ShowTodoList.php";

addTodoList("Hasby");
addTodoList("Aiman");
addTodoList("Divergent");
addTodoList("Insurgent");
addTodoList("Allegiant");
addTodoList("Namesgiant");

showTodoList();
viewRemoveTodoList();
showTodoList();
