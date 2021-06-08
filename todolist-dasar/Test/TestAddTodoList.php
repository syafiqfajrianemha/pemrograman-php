<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Syafiq");
addTodoList("Fajrian");
addTodoList("Emha");

var_dump($todoList);
