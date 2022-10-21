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
