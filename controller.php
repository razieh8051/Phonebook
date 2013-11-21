<?php
include "model.php";
include "view.php";
class controller {
private $p;
function __construct() {
$this->p = new model();
}
function load() {
$v = new view();
$v->show($this->p->getdata());
}
}
?>