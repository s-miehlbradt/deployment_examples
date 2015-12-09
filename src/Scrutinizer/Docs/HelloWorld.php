<?php


namespace Scrutinizer\Docs;


class HelloWorld
{
 function hello($x) {
     print "Hello, $x";
 }

}

$c = new HelloWorld();
$c->hello("world");