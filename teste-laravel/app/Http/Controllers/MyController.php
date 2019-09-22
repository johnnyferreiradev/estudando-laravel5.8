<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    

    public function products() {
        echo "<h1>Produtos</h1>";
        echo "<ol>";
        echo "<li>Notebook</li>";
        echo "<li>Impressora</li>";
        echo "<li>Mouse</li>";
        echo "</ol>";
    }

    public function getName() {
        return "Johnny";
    }

    public function getAge() {
        return 21;
    }

    public function multi($n1, $n2) {
        return $n1 * $n2;
    }
}
