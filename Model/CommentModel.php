<?php


class CommentModel{

    private $db;
    function __construct(){
        $this->db = new PDO ('mysql:host=localhost;'.'dbname=product_btx_db;charset=utf8', 'root', '');
    }

    function getComments($id_product, $orderBy, $asc = false)
{
    $order_querys = [
        "id_comment" => "ORDER BY id_comment",
        "rating" => "ORDER BY rating",
    ];
    if(isset($order_querys[$orderBy])){
        $order_query = $order_querys[$orderBy];
        if($asc){
            $order_query .= " ASC";}
        else{
            $order_query .= " DESC";
        }
    }
    else{
        $order_query = "";
    }

    $sql = "SELECT comment.*, user.userName FROM comment LEFT JOIN user ON comment.id_user = user.id_user WHERE id_product = ? $order_query";
    $query = $this->db->prepare($sql);
    $query->execute(array($id_product));
    $comments = $query->fetchAll(PDO::FETCH_OBJ);
    return $comments;
}

    function getCommentsByRating($id_product, $rating, $attribute, $criterion)
    {
        $sql = "SELECT comment.*, user.userName FROM comment LEFT JOIN user ON comment.id_user = user.id_user WHERE id_product = ? AND rating = ? ORDER BY $attribute $criterion";
        $query = $this->db->prepare($sql);
        $query->execute(array( $id_product, $rating));
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
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