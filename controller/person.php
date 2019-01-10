<?php 

class Person
{
    /**
     * index action
     */
    public function index() {
        // create the model object
        include "model/users.php";
        $usersModel = new Users();

        // get info for the view
        $users = $usersModel->getUsers();

        // include the view
        include "view/person.php";
    } 

    /**
     * submit action
     */
    public function submit() {
        echo "my submit page";
    }
}
