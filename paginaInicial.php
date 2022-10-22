<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
                
                <button type="button" class="btn btn-success mb-4 w-100 border-top-2">sdwdwdsdsd</button>
                <button type="button" class="btn btn-success  mb-4 w-100">sdwdwdsdsd</button>
                <button type="button" class="btn btn-success  mb-4 w-100">sdwdwdsdsd</button>
                <button type="button" class="btn btn-success  mb-4 w-100">sdwdwdsdsd</button>
            </aside>
            <div id="corpo">
                <div id="s-estoque">
                    <h2>Estoque e Serviços</h2>
                </div>
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
                        <label for="preço">preço</label>
                        <input class="cadastro-input" type="text" id="preco" name="preco">
                    </div>
                    <div>
                        <label for="estoque">Estoque</label>
                        <input class="cadastro-input" type="text" id="estoque" name="estoque">
                    </div>
                </div>
                <div id="tabela-div">
                    <div id="tabela-">
                    <table class="table table-dark table-stripeds">
                        <thead>
                            <tr>
                            <th class="p-3" scope="col">ID</th>
                            <th class="p-3" scope="col">Produto</th>
                            <th class="p-3" scope="col">Categoria</th>
                            <th class="p-3" scope="col">Preço</th>
                            <th class="p-3" scope="col">Estoque</th>
                            <th class="p-3" scope="col">Alterar/Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th class="p-3"  scope="row">1</th>
                            <td class="p-3">Mark</td>
                            <td class="p-3">Otto</td>
                            <td class="p-3">12</td>
                            <td class="p-3">99</td>
                            <td>
                                <button id="btn-g" class="btn btn-primary ">Alterar</button>
                                <button id="btn-lg"class="btn btn-danger ">excluir</button>
                            </td>
                            </tr>
                            <tr>
                            <th class="p-3" scope="row">2</th>
                            <td class="p-3">Jacob</td>
                            <td class="p-3">Thornton</td>
                            <td class="p-3">12</td>
                            <td class="p-3">99</td>
                            <td>
                                <button id="btn-g" class="btn btn-primary ">Alterar</button>
                                <button id="btn-lg" class="btn btn-danger ">excluir</button>
                            </td>
                            </tr>
                            <tr>
                            <th class="p-3" scope="row">3</th>
                            <td class="p-3">Larry the Bird</td>
                            <td class="p-3">12asaasasa</td>
                            <td class="p-3">12</td>
                            <td class="p-3">99</td>
                            <td>
                                <button id="btn-g" class="btn btn-primary ">Alterar</button>
                                <button id="btn-lg" class="btn btn-danger">Excluir</button>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
           
            </div>
        </div>
    </body>
    </html>