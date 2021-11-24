"use strict"
let id_prod = document.querySelector("#product").dataset.id;
const API_URL = "api/product/" + id_prod + "/comments";


let commentVue = new Vue({
   
    el: "#app",
    data: {
        titulo: "Comentarios",
        comments: [],
    },

});

 async function getComm() {
  try {
    let response = await fetch(API_URL);
    let comments = await response.json();
    commentVue.comments = comments;
  } catch (e) {
    console.log(e);
  }
}

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
document.querySelector("#getComm").addEventListener("click", getComm);
getComm();

/*async function getComments() {

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
}*/

//funion para ordenar los comentarios de manera ascendente o descendente
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

