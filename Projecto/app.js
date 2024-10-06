function validarForm(){
    const formNome = document.querySelector("#formNome");
    const formEmail = document.querySelector("#formEmail");
    const formMensagem = document.querySelector("#formMensagem");
   
    const formNewsletter = document.querySelector("#formNewsletter");

    const formNomeValue = formNome.value;
    const formEmailValue = formEmail.value;
    const formMensagemValue = formMensagem.value;
   
    const formNewsletterValue = formNewsletter.value;

    let flagFocus = false;
    let textoErro = "";
    

    if (formEmailValue == ""){
        textoErro += "\nFalta preencher e-mail.";
        formEmail.classList.add("input-vermelho");
        formEmail.focus();
        flagFocus = true;
    }else{
        formEmail.classList.remove("input-vermelho");
    }

    if(formMensagemValue == ""){
        textoErro += "\nFalta preencher Mensagem.";
        formMensagem.classList.add("input-vermelho");
        if (!flagFocus){
            formMensagem.focus();
            flagFocus = true;
        }
    }else if (formMensagemValue.length <= 10){
        textoErro += "\nMensagem deve ter 10 ou mais caracteres.";
        formMensagem.classList.add("input-vermelho");
        if (!flagFocus){
            formMensagem.focus();
            flagFocus = true;
        }
        
    } else {
        formMensagem.classList.remove("input-vermelho");
    }

    
    
    if(textoErro != ""){
        alert(textoErro);
        return false;
    }
    
}

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    const logs = document.querySelector("#logs");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}


