<?php
    require_once 'Product.php';
    require_once 'Logger.php';




    $p = new Product;
    $l = new Logger;

    $p->name = 'Test Product 1';
    $p->attach($l);

    echo (count($l->getEvents()) == 0);
    $p->foo = 'bar';
    echo (count($l->getEvents()) == 1);
