"use strict"
let id_prod = document.querySelector("#product").dataset.id;
let admin_rol = document.querySelector("#product").dataset.role;
const API_URL = "api/product/" + id_prod + "/comments";


let commentVue = new Vue({
   
    el: "#app",
    data: {
        titulo: "Comentarios",
        comments: [],
        admin: admin_rol,
    },
    mounted: function(){
      this.getComm();
    },
    methods: {
      getComm: async function () {
        try {
          let response = await fetch(API_URL);
          let comments = await response.json();
          commentVue.comments = comments;
        } catch (e) {
          console.log(e);
        }
      },
      
      deleteComm: async function (id_comm) {
        try {
          let respuesta = await fetch(`api/comments/${id_comm}`, {
            method: "DELETE",
          });
          if (respuesta.ok) {
            console.log("Comentario eliminado");
            this.getComm();
          }
        } catch (error) {
          console.log(error);
        }
      }

    }
}); 


document.querySelector("#filter").addEventListener("click", filter);

async function filter(event) {
    event.preventDefault();
    console.log("function filter");
    let formData = new FormData(form_filtro);
    let rating = formData.get("rating");
    try {
        let response = await fetch(API_URL + "?rating=" + `${rating}`);
        let comments = await response.json();
        commentVue.comments = comments;
    } catch (e) {
        console.log(e);
    }
}
document.querySelector("#orderBy").addEventListener("click", orderBy);

async function orderBy(event) {
    event.preventDefault();
    console.log("function ordenar");
    let formData = new FormData(form_orden);
    let atributo = formData.get("sort");
    let criterio = formData.get("order");
    try {
        let response = await fetch(API_URL + "?sort=" + `${atributo}` + "&order=" + `${criterio}`);
        let comments = await response.json();
        commentVue.comments = comments;
    } catch (e) {
        console.log(e);
    }
}


if (document.querySelector("#formComment") != null) {
  document.querySelector("#formComment").addEventListener("submit", insertComment);
}
async function insertComment(event) {
    event.preventDefault();
    console.log("function insertComment");
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
        if(res.status == 200){

            let comment = await res.json();
            commentVue.comments.push(comment);
            console.log(comment);
            document.querySelector("#formComment").reset();
            commentVue.getComm();

        }
        
    } catch (error) {
        console.log(error)

    }

}

