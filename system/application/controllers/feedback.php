<?php
class Feedback extends CI_Controller
{
  public function index()
  {	  	
		$mail = new Mail();
			$mail->protocol = $this->config->get('config_mail_protocol');
			$mail->parameter = $this->config->get('config_mail_parameter');
			$mail->hostname = $this->config->get('config_smtp_host');
			$mail->username = $this->config->get('config_smtp_username');
			$mail->password = $this->config->get('config_smtp_password');
			$mail->port = $this->config->get('config_smtp_port');
			$mail->timeout = $this->config->get('config_smtp_timeout');				
			//$mail->setTo($this->config->get('config_email'));
			$mail->setTo('rashmi@treewalker.in');
			$mail->setFrom($_POST['email']);
			$mail->setSender($_POST['email']);
			$subject = $_POST['category'];
			//$appendemail = "<br /> EMAIL FROM : ".$_POST['email'];
			$message = $_POST['message'];
			//$appendemail = $_POST['email'];
			$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));			
			$mail->setText(html_entity_decode($message, ENT_QUOTES, 'UTF-8'));		
			$mail->send();
			
			//echo "success";
  }
}	


?>

