<?php 

namespace Entity{

    class TodoList{
        private string $todo;

        // constructor todo
        public function __construct(string $todo = "") {
            $this->todo = $todo;
        }

        // function getter
        public function getTodo(): string {
            return $this->todo;
        }

        // function seter
        public function setTodo(string $todo) : void {
            $this->todo = $todo;
        }
    }
}