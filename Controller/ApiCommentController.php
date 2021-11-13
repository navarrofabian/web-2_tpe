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

    function showCommentsApi(){
        $comments = $this->model->getComments();
        if(!$comments){
            return $this->view->showComments("No comments found", 404);
        }else{
            return $this->view->showComments($comments, 200);
        }
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

    /**
     * Devuelve el body del request
     */
    private function getBody() {
        $bodyString = file_get_contents("php://input");
        return json_decode($bodyString);
    }

}