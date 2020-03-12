if(session === '0'){
    document.querySelector('.fullpage-senha').style.display = 'block'
}else{
    document.querySelector('.fullpage-senha').style.display = 'none'
}


var senha1 = document.querySelector('#senha1')
var senha2 = document.querySelector('#senha2')


console.log(senha1, senha2)
senha2.addEventListener('keyup', function(){
 
    console.log(senha1.value)
    console.log(senha2.value)
    btn = document.querySelector('#enviar')
        if(senha1.value === senha2.value){

            btn.removeAttribute('disabled')
        }else{
            btn.setAttribute("disabled", "disabled")

        }
})