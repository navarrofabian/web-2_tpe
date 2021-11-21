"use strict"
const API_URL = "api/comments";


let commentVue = new Vue({
   
    el: "#app",
    data: {
        titulo: "Comentarios",
        comments: [],
    },
}); 

async function getComments() {

    try {
        let response = await fetch(API_URL);
        let comments = await response.json();

        commentVue.comments = comments;
    } catch (e) {
        console.log(e);
    }
    
}
if (document.querySelector("#formComment") != null) {
  document.querySelector("#formComment").addEventListener("submit", insertComment);
}

//async function agregar comentario nuevo usando fetch
async function insertComment() {
    let comment_content = document.querySelector("#comment_id").value;
    let rating = document.querySelector("#rating_id").value;
    let id_product = document.querySelector("#id_product").value;
    let id_user = document.querySelector("#id_user").value;


    let comment = {
        "comment_content": comment_content,
        "rating": rating,
        "id_product": parseInt(id_product),
        "id_user": parseInt(id_user)
    }

    try {
        let res = await fetch(API_URL, {
            "method": "POST",
            "headers": { "Content-type": "application/json" },
            "body": JSON.stringify(comment)

        });
        
    } catch (error) {
        console.log(error)

    }

}
getComments();
