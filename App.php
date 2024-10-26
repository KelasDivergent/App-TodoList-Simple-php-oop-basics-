<?php 

require_once "./Entity/TodoList.php";
require_once "./Helper/InputHelper.php";
require_once "./Repository/TodoListRepository.php";
require_once "./Service/TodoListService.php";
require_once "./View/TodoListView.php";

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

echo "Aplication Todolist" . PHP_EOL;
$todoListRepository = new TodoListRepositoryImpl();
$todoListService = new TodoListServiceImpl($todoListRepository);
$todoListView = new TodoListView($todoListService);

$todoListView->showTodoList();

