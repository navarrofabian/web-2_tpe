<?php


class CommentModel{

    private $db;
    function __construct(){
        $this->db = new PDO ('mysql:host=localhost;'.'dbname=product_btx_db;charset=utf8', 'root', '');
    }

    function getComments(){
        $sentence = $this->db->prepare( "select * from comment");
        $sentence->execute();
        $comments = $sentence->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    } 

    function getComment($id){
        $sentence = $this->db->prepare( "select * from comment WHERE id_comment=?");
        $sentence->execute(array($id));
        $comment = $sentence->fetch(PDO::FETCH_OBJ);
        return $comment;
    }
    function deleteCommentFromDB($id){
        $sentence = $this->db->prepare("DELETE FROM comment WHERE id_comment=?");
        $response = $sentence->execute(array($id));
    }



    function insertComment($comment_content, $rating, $id_product, $id_user){
        $sentence = $this->db->prepare("INSERT INTO `comment`(`comment_content`, `rating`, `id_product`, `id_user`) VALUES(?, ?, ?, ?)");
        $sentence->execute(array($comment_content, $rating, $id_product, $id_user));
        return $this->db->lastInsertId();
    }
    
}