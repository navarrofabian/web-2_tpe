<?php 
require_once "./Model/ProductModel.php";
require_once "./Model/CommentModel.php";
require_once "./Model/UserModel.php";
require_once "./View/ApiView.php";

class ApiCommentController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new CommentModel();
        $this->view = new ApiView();
    }
    function getComments($params = null)
    {
      
        if(isset($_GET["sort"]) && isset($_GET["order"])){
            $sort = $_GET["sort"];
            $order = $_GET["order"];
        } else {
            $sort = "";
            $order = "";
            
        }
        $id_product = $params[":ID"];
        $rating = null;
        if(isset($_GET["rating"])){
            $rating = $_GET["rating"];
        
            $comments = $this->model->getCommentsByRating($id_product, $rating, $sort, $order);
        } else {
            $comments = $this->model->getComments($id_product, $sort, $order);
        }
        return $this->view->response($comments, 200);
    }

    function getCommentById($params = null) {
        $idComment = $params[":ID"];
        $comment = $this->model->getComment($idComment);
        if ($comment) {
            return $this->view->response($comment, 200);
        } else {
            return $this->view->response("Este comentario no existe", 404);
        }
    }

    function deleteComment($params = null) {
        $idComment = $params[":ID"];
        $comment = $this->model->getComment($idComment);

        if ($comment) {
            $this->model->deleteCommentFromDB($idComment);
            return $this->view->response("El comentario $idComment ha sido eliminado", 200);
        } else {
            return $this->view->response("Este Comentario no existe", 400);
        }
    }

    function saveComment($params = null) {
        $body = $this->getBody();
        if(!empty($body->comment_content && !empty($body->rating) &&  !empty($body->id_product) &&  !empty($body->id_user))){
            $comment_content = $body->comment_content;
            $rating = $body->rating;
            $id_product = $body->id_product;
            $id_user = $body->id_user;
            $date = getdate();
            $date = $date["year"]."-".$date["mon"]."-".$date["mday"];
            $comment = $this->model->insertComment($comment_content, $rating, $id_product, $id_user, $date);
            return $this->view->response($comment, 200);
        } else {
            return $this->view->response("Faltan datos", 400);
        }
    }
    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }

}