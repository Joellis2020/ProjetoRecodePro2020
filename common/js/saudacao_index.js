let saudacao = () => {
  let data = new Date();
  let hora = data.getHours();

  if (hora < 12) {
    document.getElementById("abertura").innerHTML = "Bom dia, ";
  }
  else if (hora < 18) {
    document.getElementById("abertura").innerHTML = "Boa tarde, ";
  }
  else {
    document.getElementById("abertura").innerHTML = "Boa noite, ";

  }
}

