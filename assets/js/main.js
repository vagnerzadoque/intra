/* URL dos metodos MVC */
const URL = 'http://localhost/intra/'
const DP = fetch('')
  /* Pegar perfil */

 
   
  
   
  
  /* Fim Pegar Perfil */

// Floating Action Button
const elemsBtns = document.querySelectorAll(".fixed-action-btn");
const floatingBtn = M.FloatingActionButton.init(elemsBtns, {
    direction: "left",
    hoverEnabled: false
});

// Navbar
const elemsDropdown = document.querySelectorAll(".dropdown-trigger");
const instancesDropdown = M.Dropdown.init(elemsDropdown, {
    coverTrigger: false
});
const elemsSidenav = document.querySelectorAll(".sidenav");
const instancesSidenav = M.Sidenav.init(elemsSidenav, {
    edge: "left"
});

// Modal
const elemsModal = document.querySelectorAll(".modal");
const instancesModal = M.Modal.init(elemsModal);

// Tooltip
const elemsTooltip = document.querySelectorAll(".tooltipped");
const instanceTooltip = M.Tooltip.init(elemsTooltip, {
    html: "Olha essa dica!",
    position: "right"
});

// Toast
/* const elemnsToast = document.querySelector("#toast");
const instanceToast = () => {
    M.toast( {
        html: "Também sou uma notificação",
        classes: "rounded"
    })
}

elemnsToast.addEventListener("click", () => {
    instanceToast();
}); */

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
  });

  var elem = document.querySelector('.tabs'); var instance = M.Tabs.init(elem, {});





  /* Deletar Usuario */
  function delUser(event){
      console.log(event.target.id)
      const ev = event.target.id
        var id_dados = {'id':event.target.id}
      /* r = confirm('Quer Realmente deletar')
      console.log(r) */

      Swal.fire({
        title: 'Quer realmente deletar?',
        text: "Você não podera reverter",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Deletar'
      }).then((result) => {
        if (result.value == true) {


            const option = {
                method: 'POST',
                body: new URLSearchParams(id_dados)
              }
              fetch(URL+'Cad_user/delUser', option)
              
              .then((json) => {
                  var d = document.querySelector(`.card.horizontal.m${ev}`)
                  d.classList.toggle('quadro1')
                  setTimeout(function(){
                    location.reload()

                },1000)
              })


         
        }
      })

  }
  /* Fim-Deletar Usuario */

  /* UPDATE usuario */
  function UdateUser(event){
    console.log(event.target.id)
    const ev = event.target.id
      var id_up_user = {'id':event.target.id}
        console.log(id_up_user )

        const optionUser = {
            method: 'POST',
            body: new URLSearchParams(id_up_user)

        }
        fetch(URL+'Cad_user/pegarUsuario', optionUser)
        .then((r)=> r.json())
        .then(json =>{
            console.log(json)
            Swal.fire({ 
                showCancelButton:true, 
                html:`  
                        <div class="form-group">
                        <label>Perfil</label>
                            <div class="input-field col12 s12">
                        <select id="inputPerfil" class="browser-default">
                        <option value="" disabled >Perfil</option>
                        
                        <option style="color: red;"value="${json.perfil}" selected>${json.perfil}</option>
                        <option value="admin">Admin</option>
                        <option value="usuario">Usuário</option>
                        
                            </select>
                        </div>
                        </div>

                        <div class="form-group">
                        <label>Departamento</label>
                            <div class="input-field col12 s12">
                        <select id="inputDEP2" class="browser-default">
                        <option value="" disabled >Departamento</option>
                        
                        <option style=" color: red; value="${json.dep}" selected>${json.dep}</option>
                        <option style=" value="${json.dp[0]['departamento']}" >${json.dp[0]['departamento']}</option>
                        <option style=" value="${json.dp[1]['departamento']}" >${json.dp[1]['departamento']}</option>
                        <option style=" value="${json.dp[2]['departamento']}" >${json.dp[2]['departamento']}</option>
                        <option style=" value="${json.dp[3]['departamento']}" >${json.dp[3]['departamento']}</option>
                        <option style=" value="${json.dp[4]['departamento']}" >${json.dp[4]['departamento']}</option>
                        <option style=" value="${json.dp[5]['departamento']}" >${json.dp[5]['departamento']}</option>
                        <option style=" value="${json.dp[6]['departamento']}" >${json.dp[6]['departamento']}</option>
                        <option style=" value="${json.dp[7]['departamento']}" >${json.dp[7]['departamento']}</option>
                        <option style=" value="${json.dp[8]['departamento']}" >${json.dp[8]['departamento']}</option>
                        <option style=" value="${json.dp[9]['departamento']}" >${json.dp[9]['departamento']}</option>
                        <option style=" value="${json.dp[10]['departamento']}" >${json.dp[10]['departamento']}</option>
                        <option style=" value="${json.dp[11]['departamento']}" >${json.dp[11]['departamento']}</option>
                        <option style=" value="${json.dp[12]['departamento']}" >${json.dp[12]['departamento']}</option>
                        <option style=" value="${json.dp[13]['departamento']}" >${json.dp[13]['departamento']}</option>
                        <option style=" value="${json.dp[14]['departamento']}" >${json.dp[14]['departamento']}</option>
                   
                       
                        
                        
                       
                        
                            </select>
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="input-field"> 
                                <label for="inputID">ID</label><br>
                                <input id="inputID" type="text" value="${json.id}" disabled> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-field"> 
                            <label for="inputNome">Nome:</label><br>
                                <input id="inputNome" type="text" value="${json.nome}"> 
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-field"> 
                                    <label for="inputLogin">Login:</label><br>
                                    <input id="inputLogin" type="text" value="${json.email}"> 
                            </div>
                       </div>

                       <div class="form-group">
                       <div class="input-field"> 
                             <label for="inputSenha">Senha:</label><br>
                             <input id="inputSenha" type="password" value="${json.senha}"> 
                       </div>
                       </div>
                       
                       
                       `, 
                      preConfirm:function(){ 
                          id1= document.getElementById('inputID').value; 
                          nome1= document.getElementById('inputNome').value; 
                          email2= document.getElementById('inputLogin').value; 
                          senha3 = document.getElementById('inputSenha').value; 
                          perfil3 = document.getElementById('inputPerfil').value; 
                          dp2 = document.getElementById('inputDEP2').value; 
                          dadosUpUsers = {'id':id1, 
                                          'nome':nome1, 
                                          'email':email2, 
                                          'senha':senha3, 
                                          'perfil':perfil3,
                                          'dep':dp2 }
                          console.log(id1,nome1,email2,senha3, dp2) }
                        }).then((result)=>{
                            if(result.value == true){
                                
                                const optionUPuser = {
                                    method: 'POST',
                                    body: new URLSearchParams(dadosUpUsers)
                                  }
                                  fetch(URL+'Cad_user/updateUsuario', optionUPuser )
                                  .then((r)=> r.json())
                                  .then((json) => {
                                    location.reload()
                                   
                                    console.log('Enviando'+json)
                                  })
                             
                            }else{
                                console.log(result)
                            }
                        })



        })
        
  }
  /* FIM Update Usuario */

  /* Botoes Classificar */


  document.addEventListener('DOMContentLoaded', ()=>{

    let bt_classificar = document.querySelectorAll('[btn_classificar]')
    console.log(bt_classificar)
    
    bt_classificar.forEach((c,v)=>{
       console.log(c)
        c.addEventListener('click', ()=>{
            alert('Aqui---'+c.getAttribute('btn_classificar'))
        })
    })

  })

  /* Botoes Classificar FIM */