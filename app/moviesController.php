<?php
    include "connectionController.php";

    if (isset($_POST['action'])) {
        $moviesController = new MoviesController();
     
        switch ($_POST['action']) {
           case 'store':
              $name = strip_tags($_POST['name']);
              $description = strip_tags($_POST['description']);
              $status = strip_tags($_POST['status']);
     
              $moviesController->store($name, $description, $status);
              break;
        }
    }


    class MoviesController{

        public function get(){

            $conn=connect();
            if($conn->connect_error==false){

                $query="select * from movies";
                $prepared_query = $conn->prepare($query);
                $prepared_query->execute();

                $results=$prepared_query->get_result();
                $movies=$results->fetch_all(MYSQLI_ASSOC);

                if(count($movies)>0){
                    return $movies;
                }else{
                    return array();
                }
            }else{
                return array();
            }
        }

        public function store($name, $description, $status){
            $conn = connect();
            if ($conn->connect_error == false) {
                if ($name != "" && $description != "" && $status != "") {

                    $query = "insert into movies (name, description, status) values (?,?,?)";
                    $prepared_query = $conn->prepare($query);
                    $prepared_query->bind_param('sss', $name, $description, $status);
                    if ($prepared_query->execute()) {
                         header("Location:" . $_SERVER['HTTP_REFERER']);
                    } else {
                         header("Location:" . $_SERVER['HTTP_REFERER']);
                    }
                } else {
                     header("Location:" . $_SERVER['HTTP_REFERER']);
                }
            } else {
                   header("Location:" . $_SERVER['HTTP_REFERER']);
            }
        }
    }
?>