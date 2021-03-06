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
            $attribute = $_GET["sort"];
            $criterion = $_GET["order"];
        } else {
            $attribute = "";
            $criterion = "";
            
        }
        $id_product = $params[":ID"];
        $rating = null;
        if(isset($_GET["rating"])){
            $rating = $_GET["rating"];
        
            $comments = $this->model->getCommentsByRating($id_product, $rating, $attribute, $criterion);
        } else {
            $comments = $this->model->getComments($id_product, $attribute, $criterion);
        }
        return $this->view->response($comments, 200);
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
        // obtengo el body del request (json)
        $body = $this->getBody();

        // TODO: VALIDACIONES -> 400 (Bad Request)

        $id = $this->model->insertComment($body->comment_content, $body->rating, $body->id_product, $body->id_user);
        if ($id != 0) {
            $this->view->response("Comentario enviado", 200);
        } else {
            $this->view->response("No se pudo enviar el comentario", 500);
        }
    }
    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }

}