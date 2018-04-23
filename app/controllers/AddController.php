<?php
use Phalcon\Mvc\View;
class AddController extends ControllerBase{
 
 public function indexAction(){
  if($this->request->isPost()){
    $temp=new event();
  $temp->name=trim($this->request->getPost('event_name'));
  $temp->date=trim($this->request->getPost('event_date'));
  $temp->detail=trim($this->request->getPost('event_detail'));
  $temp->picture=trim($this->request->getPost('event_picture'));
  $temp->save();
  $this->response->redirect('event');
  }
  
  }

}