<?php
namespace Test\Controller;
use Common\Controller\AdminbaseController;
class IndexadminController extends AdminbaseController{
	function index(){
		$this->display(":index");
	}
}