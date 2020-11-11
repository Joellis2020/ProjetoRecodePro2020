function exibe_lista(lista){
  let elementos = document.getElementsByClassName("box-produto");
  console.log(elementos);
  for (let quantidade=0; quantidade<elementos.length; quantidade++){
    console.log(elementos[quantidade].id);
    if(lista === elementos[quantidade].id){
      elementos[quantidade].style = "display: inline-block";
      
    }
    else{
      elementos[quantidade].style = "display: none";
    }
  }
}

let exibir_todos = () => {
  let elementos = document.getElementsByClassName("box-produto");
  for (let quantidade=0; quantidade<elementos.length; quantidade++){
    elementos[quantidade].style="display: inline=block"; 
  }
}


let destaque = (imagem) => {
  console.log(imagem);
  if(imagem.width === 240){
    imagem.width = 120;
  }
  else{
    imagem.width = 240;
  }
}

