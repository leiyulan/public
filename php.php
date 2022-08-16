<?php
# Start Task #1,2 Cost:1h Left:3h
class user extends control
{
    public function register()
    {
        $this->view->header->title = 'getsid';
        $this->view->sid = session_id();
        $this->view->test = $this->misc->test();
        $this->display();
    }
} 

?>
