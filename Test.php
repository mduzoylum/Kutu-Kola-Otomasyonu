<?php
include "Dolap.php";

$dolap=new Dolap();

Helper::text("WELCOME");

echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->addProduct();
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->addProduct();
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->buyProduct();
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->buyProduct();
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->buyProduct();
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->checkSolidityRadio();

Helper::LINE();

$dolap->fillShelf(0);
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->addProduct();
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->fillShelf(1);
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->fillShelf(2);
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->addProduct();
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->buyProduct();
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->addProduct();
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->addProduct();
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->checkSolidityRadio();

Helper::LINE();

$dolap->buyProduct();
echo $dolap->displayShelf(0);Helper::EOF();
echo $dolap->displayShelf(1);Helper::EOF();
echo $dolap->displayShelf(2);Helper::EOF();

Helper::LINE();

$dolap->checkSolidityRadio();