"use strict"
const API_URL = "api/comments";

document.querySelector(".form-alta").addEventListener("submit", insertcomment());

let commentVue = new Vue({
    //donde se va a renderizar
    el: "#comment",
    data: {
        titulo: "Comentarios",
        comments: [], // this->smarty->assign("tareas",  $tareas)
    },
}); 

async function getComments() {

    try {
        let response = await fetch(API_URL);
        let comments = await response.json();

        app.comments = comments;
    } catch (e) {
        console.log(e);
    }
}



//funcion que se ejecuta al hacer submit en el formulario
getComments();
