<?php

App::uses('Controller', 'Controller');

class ContactsController extends Controller {
	public function contact($step='reg'){
		App::uses('CakeEmail', 'Network/Email');
		$this->layout="contact";
		
		if ($this->request->is(array('post','put'))) {

			if($step=='preview'){
			//pr($this->request->data); die();
					if ($this->Contact->save($this->request->data)) {
						//mail send
						$useremail=$this->request->data['Contact']['email'];
						$Email = new CakeEmail();
						$Email->config('default');
						$Email->template('default');
						$Email->emailFormat('html');
						//$Email->from(array('subrata.japan@gmail.com' => 'My Site')); // if SMTP not use then open comment
						$Email->to($useremail);
						//$Email->bcc('subrata.japan@gmail.com');
						$Email->bcc('Admin return email address');
						$Email->subject('LECREUSET Contact mail');
						$Email->viewVars(array('value' => $this->request->data));
						
						$Email->send();
						
						
						$this->Session->setFlash('Contact data saved');
						return $this->redirect(array('action' => 'contactthank'));  
					} else {
					$this->Session->setFlash('Submit Fail');
					$step=='reg';
					}	
				}else{
				if($step=='reg'){
				$step='preview';
				}
			}
		}
		if($step=='preview' && $this->request->is(array('post','put'))){
			$this->render('contactconfirm');
		}
		
	}
	public function contactconfirm(){
$this->layout="contact";
	}
	public function contactthank(){
$this->layout="contact";
	}
}
