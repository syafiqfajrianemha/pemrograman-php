<?php

require_once "../Helper/Input.php";
require_once "../BusinessLogic/RemoveTodoList.php";

/*
    View untuk menampilkan form hapus todo
*/

function viewRemoveTodoList()
{
    echo "MENGAPUS  TODO" . PHP_EOL;

    $pilihan = (int) input("Nomor (x untuk batal)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = removeTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}
