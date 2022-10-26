
$( document ).ready(function() {
    listProduct();
});


const validaLogin = () =>{
    let dados = new FormData($('#form')[0])

    const result = fetch('backend/valida_login.php',{
        method: 'POST',
        body: dados
    }
    )
    .then((response) =>response.json()) //retorna uma promise
    .then((result) => {
        Swal.fire({
          icon: result.retorno == 'ok' ? 'success' : 'error',
          title: result.message,
          showConfirmButton: false,
          timer: 2000
        })
        result.retorno == 'ok' ? window.location.replace("http://localhost/sistema-estoque/paginaInicial.php") : ''

    });
    
}

const listProduct = () => {

    // captura todo usuario e cria um formData
    const result = fetch('backend/listar_produtos.php', {
        method: 'POST',
        body: ''
    })
    .then((response)=>response.json())
    .then((result)=>{
      // aqui é tratado o retorno ao fronto

      // destroi a tabela que foi iniciada
      $("#tabela").dataTable().fnDestroy();

      // limpa os dados da tabela 
      $('#tabela-dados').html('')

      // função que irá molstrar as linhas da tabela , o map é um tipo de laço (for)
      result.map(produto=>{
      $('#tabela-dados').append(`
              <tr>
              
                <td>${produto.id}</td>
                <td>${produto.produto}</td>
                <td>${produto.categoria}</td>
                <td>${produto.fornecedor}</td>
                <td>${produto.codigo}</td>
                <td>${produto.estoque}</td>
                
                <td>
                  <div class="form-check form-switch">
                   <input class = "form-check-input" type="checkbox" role="switch" id="ativo" ${produto.ativo == 1 ? 'checked' : ''} onchange="updateUserActive(${produto.id})">
                  </div>
                </td>
                <td class="text-center">
                  <button type="button" class="btn btn-sm btn-primary   w-30" onclick="listUserID(${produto.id})">Entrada</i></button>
                  <button type="button" class="btn btn-sm btn-primary  w-30"><i class="bi bi-trash" onclick="deleteUser(${produto.id})">Saida</i></button>
                  <button type="button" class="btn btn-sm btn-danger  w-30"><i class="bi bi-trash" onclick="deleteUser(${produto.id})">Alterar</i></button>
                </td>
              </tr>
              `)
              })
              $('#tabela').DataTable({
                "language":{
                  url:'//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json'
                }
              });
          })

          // <button type="button" class="btn btn-sm btn-${usuario.status == 1 ? 'success' : 'danger'}">${usuario.status == 1 ? 'Sim' : 'Não'}</button>
  }

