<?php 

namespace Repository{

    // menggunakan todolist pada entity
    use Entity\TodoList;

    /* 
    not class but interface, ketika kita membuat interface repository tidak usah melakukan function saveTodoList, 
    tetapi buat saja function save biasa saja, karena interface tau kita buat functionnya itu di todolist
    */
    interface TodoListRepository{
        
        // membuat function save
        function save(TodoList $todoList) : void ;
        
        // membuat function remove
        function remove(int $number) :  bool ;

        // membuat function find all
        function findAll() : array ;
       
        
    }
       // creat show todo list function
       class TodoListRepositoryImpl implements TodoListRepository{

        public array $todoList = array();
        function save(TodoList $todoList): void{

            $number =  sizeof($this->todoList) + 1;
            $this->todoList[$number] = $todoList;
            
        }

        function remove(int $number) : bool {
        if ($number > sizeof($this->todoList)) {
            return false;
        }
        for ($i = $number; $i < sizeof($this->todoList); $i++) { 
            $this->todoList[$i] = $this->todoList[$i + 1];
        }
        // untuk terakhir dihapus datanya
        unset($this->todoList[sizeof($this->todoList)]);
        return true;
        }
        
        function findAll() : array {
            
            return $this->todoList;
        }
    }
    
    
    
}