<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    <title>Estoque</title>
</head>
<body>
    <div>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Sistema - Estoque</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    </div>
    
    <div id="container-e">
    </nav>
      <aside id="menu-esquerdo">
          <h1 id="tm">Menu</h1>
          
          <button type="button" class="btn btn-success mb-4 w-100 border-top-2">Home</button>
          <button type="button" class="btn btn-success  mb-4 w-100">Cadastro de itens</button>
          <button type="button" class="btn btn-success  mb-4 w-100" ><a href="#tabela-div"> Listagem</a></button>
      </aside>

        <div id="corpo">
          <div id="s-estoque">
              <h2>Estoque e Serviços</h2>
          </div>
          <form class="form-cadastro" action="backend/adicionar_produto.php" method="post">
            <div id="cadastro">
              <div>
                  <label for="produto">Produto</label>
                  <input class="cadastro-input" type="text" id="produto" name="produto">
              </div>
              <div>
                  <label for="categoria">Categoria</label>
                  <input class="cadastro-input" type="text" id="categoria" name="categoria">
              </div>
              <div>
                  <label for="fornecedor">fornecedor</label>
                  <input class="cadastro-input" type="text" id="fornecedor" name="fornecedor">
              </div>
              <div>
                  <label for="estoque">Estoque</label>
                  <input class="cadastro-input" type="text" id="estoque" name="estoque">
              </div>
              <div>
                  <label for="codigo">codigo</label>
                  <input class="cadastro-input" type="text" id="codigo" name="codigo">
              </div>
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-primary mt-5 mb-2">Cadastrar</button>
            </div>
          </form>
        
          <div id="tabela-div">
              <div>
                <table  id="tabela" class="table table-dark table-stripeds">
                    <thead>
                        <tr>
                        <th class="p-3" scope="col">ID</th>
                        <th class="p-3" scope="col">Produto</th>
                        <th class="p-3" scope="col">Categoria</th>
                        <th class="p-3" scope="col">Fornecedor</th>
                        <th class="p-3" scope="col">Codigo</th>
                        <th class="p-3" scope="col">Estoque</th>
                        <th class="p-3" scope="col">Ativo</th>

                        <th class="p-3" scope="col">Alterar/Excluir</th>
                        </tr>
                    </thead>
                    <tbody id="tabela-dados">
                        
                    </tbody>
                  </table>
              </div>
          </div>
        </div>
        <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->

        <div class="modal fade" id="action-product-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Ações</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                      <form id="form-action-product">

                          <div class="row">
                            <div class="col-md">
                                <label class="form-label" for="edit-name">Produto</label>
                                <input class="form-control" type="text" name="name" id="edit-action-name" disabled>
                            </div>
                          </div>

                          <div class="row">
                              <div class="col-md">
                                  <label class="form-label" for="edit-manufacturer">Quantidade</label>
                                  <input class="form-control" type="number" name="quantidade" id="edit-action-amount">
                              </div>
                              <div class="col-md">
                                <label for="edit-action">Ação</label>
                                <select class="form-select" id="edit-action" name="acao">
                                  <option value="1">Entrada</option>
                                  <option value="2">Saída</option>
                                </select>
                              </div>
                          </div>

                          <input type="hidden" id="id-produto-acao" name="id-produto-acao">
                      </form>
                  </div>
                  
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Fechar</button>
                      <button type="button" id="form-button-action" class="btn btn-primary" onclick="salvarModal()">Salvar</button>
                  </div>
              </div>
          </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

          
    <script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>

    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>   

    <script src="js/assets/script.js"></script>
    </body>

    </html>