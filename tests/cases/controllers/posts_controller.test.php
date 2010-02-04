<?php
/* Posts Test cases generated on: 2010-02-04 16:02:41 : 1265318981*/
App::import('Controller', 'Posts');

class TestPostsController extends PostsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PostsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.post', 'app.user');

	function startTest() {
		$this->Posts =& new TestPostsController();
		$this->Posts->constructClasses();
	}

	function endTest() {
		unset($this->Posts);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>