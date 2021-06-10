<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Syafiq");
addTodoList("Fajrian");
addTodoList("Emha");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();
