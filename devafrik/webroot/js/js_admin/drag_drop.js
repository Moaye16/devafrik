

//Sélection de tous les éléments réquis
const dropArea =  document.querySelector('.drag-area');
form = document.querySelector("#form")
dragText = dropArea.querySelector("header"),
button = dropArea.querySelector("#buttonfile"),
input = dropArea.querySelector("#inputfile");

let file; //C'est une variable globale et nous l'utiliserons dans plusieurs fonctions

button.onclick = ()=>{
    input.click();  //si l'utilisateur clique sur le bouton alors le bouton parcourrir est également cliqué
}

input.addEventListener("change", function(){
    //Obtenir le fichier de sélection de l'utilisateur et [0] cela signifie que si l'utilisateur sélectionne plusieurs fichiers, nous ne sélectionnerons que le premier
    file = this.files[0];
    showFile();     //Appel de la fonction
    dropArea.classList.add("drag-area-hover");
});

//Si l'utilisateur faire glisser le fichier
dropArea.addEventListener('dragover', (event)=>{
    event.preventDefault();     //empêcher le comportement par défaut
    dropArea.classList.add("drag-area-hover");
    dragText.textContent = "Relâcher pour télécharger le fichier";
});

//Si l'utilisateur laisse le fichier traîner
dropArea.addEventListener("dragleave", ()=>{
    dropArea.classList.remove("drag-area-hover");
    dragText.textContent = "Glissez et déposez l'image à insérer";
});

//si l'utilisateur dépose le fichier
dropArea.addEventListener("drop", (event)=>{
    event.preventDefault();     //empêcher le comportement par défaut
    //Obtenir le fichier de sélection de l'utilisateur et [0] cela signifie que si l'utilisateur sélectionne plusieurs fichiers, nous ne sélectionnerons que le premier
    file = event.dataTransfer.files[0];
    showFile();     //Appel de la fonction
});


function showFile(){

    let fileType = file.type;
    
    let validExtensions = ["image/jpeg","image/jpg","image/png"]; //Ajouter des extensions d'image valides dans le tableau

    if(validExtensions.includes(fileType)){
        //Si l'utilisateur selectionne une image
        let fileReader = new FileReader();  //Création d'une nouvel objet FileReader
        fileReader.onload = ()=>{
            let fileURL = fileReader.result;  //passer la source du fichier utilisateur dans la variable fileURL
            let imgTag = '<img src='+fileURL+' alt="">';  //créer une balise img et transmettre la source de fichier sélectionnée par l'utilisateur dans l'attribut src
            dropArea.innerHTML = imgTag;    //ajouter cette balise img créée dans le conteneur dropArea
        }
        fileReader.readAsDataURL(file);        
    }else{
        dropArea.classList.remove("drag-area-hover");
        dragText.textContent = "Glissez et déposez l'image à insérer";
    }
}
