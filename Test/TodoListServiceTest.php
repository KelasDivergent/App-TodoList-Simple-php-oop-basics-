<?php 

require_once "./Entity/TodoList.php";
require_once "./Service/TodoListService.php";
require_once "./Repository/TodoListRepository.php";

use Entity\TodoList;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

// function untuk menguji menampilkan todo list
function testShowTodoList(): void {
    

    $todoListRepository = new TodoListRepositoryImpl();
    // test input data 
        $todoListRepository->todoList[1] = new TodoList("Reading PHP Basics");
        $todoListRepository->todoList[2] = new TodoList("Reading OOP Basics");
        $todoListRepository->todoList[3] = new TodoList("Reading PHP Database Basics");

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();


}

// test show todo list
// testShowTodoList();

// function untuk menguji menampilkan todo list
function testAddTodoList() : void {
    $todoListRepository = new TodoListRepositoryImpl();

    $todoListService = new TodoListServiceImpl($todoListRepository);
    $todoListService->addTodoList("Reading PHP");
    $todoListService->addTodoList("Reading OOP");
    $todoListService->addTodoList("Reading PHP Database");

    $todoListService->showTodoList();
    
}

// test show todo list
// testAddTodoList();

// function untuk menguji menghapus todo list
function testRemoveTodoList(): void {
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->addTodoList("Reading PHP");
    $todoListService->addTodoList("Reading OOP");
    $todoListService->addTodoList("Reading PHP Database");

    // echo "BEFORE REMOVE :" . PHP_EOL;
    $todoListService->showTodoList();

    $todoListService->removeTodoList(1); // Menghapus item pertama
    // echo "AFTER REMOVE ITEM FIRST:" . PHP_EOL;
    $todoListService->showTodoList();

    $todoListService->removeTodoList(4);
    $todoListService->showTodoList();

    $todoListService->removeTodoList(2);
    $todoListService->showTodoList();

    $todoListService->removeTodoList(1);
    $todoListService->showTodoList();
}
testRemoveTodoList();