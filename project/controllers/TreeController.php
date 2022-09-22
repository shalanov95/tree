<?php
namespace Project\Controllers;
use \Core\Controller;
use \Project\Models\Tree;

class TreeController extends Controller
{
	public $title = 'Tree';

	public function index() {
		$tree = (new Tree)->getTree();
		return $this->render('tree/index' , ['tree' => $tree]);
	}
	
	public function addBranch() {
		$tree = (new Tree)->addBranch($_POST);
		return $this->index();
	}

	public function updBranch() {
		$tree = (new Tree)->updBranch($_POST);
		return $this->index();
	}

	public function delBranch() {
		$tree = (new Tree)->delBranch($_POST);
		return $this->index();
	}

}
