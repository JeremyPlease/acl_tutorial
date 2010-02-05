<h2>Login</h2>
<?php
echo $form->create('User', array('url' => array('controller' => 'users', 'action' =>'login')));
echo $form->input('User.username');
echo $form->input('User.password');
echo $form->end('Login');

function login() {
	if ($this->Session->read('Auth.User')) {
		$this->Session->setFlash('You are logged in!');
		$this->redirect('/', null, false);
	}
}     
?>
