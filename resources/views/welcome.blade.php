<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tijoLoja</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap');

    body {
        background: rgb(255,92,29);
        background: linear-gradient(180deg, rgba(255,92,29,1) 45%, rgba(255,255,255,1) 55%);
    }

    #is_mobile_materials {
        display: none;
    }

    #materials {
        display: block;
    }

    .header {
        background-size: 10%;
        background-image: url({{ asset('img/tijolos_bg.png') }});
        background-repeat: repeat;
    }

    .no-bg {
        background: black;
    }

    .fixed_button {
        position: fixed;
        bottom: 5px;
        right: 5px;
        width: 80px;
        height: 80px;
        background: white;
        border: 12px solid #ff5c1d;
    }

    /* PARA MOBILE */
    @media only screen and (max-device-width: 1150px) {

        body {
            background: rgb(255,92,29);
            background: linear-gradient(180deg, rgba(255,92,29,1) 25%, rgba(255,255,255,1) 51%);
        }

        #is_mobile_materials {
            display: block;
        }

        #materials {
            display: none;
        }

        #loja_title {
            width: 60vw;
        }

        .header {
            background-size: 20%;
            background-image: url({{ asset('img/tijolos_bg.png') }});
            background-repeat: repeat;
        }

        .no-bg {
            background: black;
        }

        .fixed_button {
            position: fixed;
            bottom: 5px;
            right: 5px;
            width: 80px;
            height: 80px;
            background: white;
            border: 12px solid #ff5c1d;
        }
    }

</style>
<body>
    <!-- Adicionar novo material -->
    <button type="button" style="z-index: 1" class="fixed_button rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img class="img-fluid" src="{{ asset('img/add.svg') }}" alt="ADD">
    </button>

    {{-- NavBar --}}

    <div class="container-fluid">
        <div class="row header pt-3">
            <div id="loja_title" class="pt-3 col-6 m-auto">
                {{-- Título --}}
                <h1 style="text-align: center; font-family: 'PT Sans', sans-serif;">
                    <img class="img-fluid" src="{{ asset('img/tijoloja_logo.png') }}" alt="">
                </h1>
            </div>
        </div>
    </div>
    <div id="materials" class="container-fluid">
        <div class="row mt-2 mx-4 table-responsive">
            <table class="table table-hover bg-white" style="border-top-left-radius: 8px; border-top-right-radius: 8px">
                <thead>
                  <tr>
                    <th class="text-center" scope="col">código</th>
                    <th class="text-center" scope="col">nome</th>
                    <th class="text-center" scope="col">descrição</th>
                    <th class="text-center" scope="col">qtd. estoque</th>
                    <th class="text-center" scope="col">preço</th>
                    <th class="text-center" scope="col">ações</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($materials as $material)
                        <tr class="align-middle">
                            <th class="text-center" scope="row">{{ $material->id }}</th>
                            <td>{{ $material->name }}</td>
                            <td>{{ $material->description }}</td>
                            <td class="text-center">
                                @if ($material->qty >= 50)
                                <div class="badge bg-success">
                                    {{$material->qty}}
                                </div>
                                @elseif ($material->qty <= 0)
                                <div class="badge bg-danger">
                                    sem estoque!
                                </div>
                                @else
                                <div class="badge bg-warning">
                                    {{$material->qty}}
                                </div>
                                @endif
                            </td>
                            <td class="text-center">R$ @php echo number_format($material->price, 2) @endphp</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-primary">
                                    Editar
                                </button>
                                <button class="btn btn-sm btn-danger">
                                    Excluir
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="height: 60px">
            </div>
        </div>
    </div>
    <div id="is_mobile_materials" class="container-fluid">
        <div class="row">
            {{-- COLUNA MATERIAIS --}}
            <div class="col-sm mt-2">
                @foreach ($materials as $material)
                <div class="card mb-2">
                    <div class="card-header">
                        @if ($material->created_at >= date('Y-m-d')) <div class="badge bg-info">novidade!</div>@endif
                        @if ($material->qty >= 50)
                        <div class="badge bg-success">
                            {{$material->qty}} unidades
                        </div>
                        @elseif ($material->qty <= 0)
                        <div class="badge bg-danger">
                            sem estoque!
                        </div>
                        @else
                        <div class="badge bg-warning">
                            somente {{$material->qty}} unidades restantes!
                        </div>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <div class="card-body">
                                <h5 class="card-title">{{ $material->name }}</h5>
                                <p class="card-text text-muted">{{ $material->description }}</p>
                            </div>
                        </div>
                        <div class="col-5 align-middle">
                            <div class="card-body">
                                <h2 style="text-align: right" class="card-title fs-5">Preço unitário</h2>
                                <h2 style="text-align: right" class="card-text fs-5">R$ @php echo number_format($material->price, 2) @endphp</h2>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div style="height: 60px">
            </div>
        </div>
    </div>

    <footer class="footer fixed-bottom" style="height: 60px; background-color: rgb(255,92,29); z-index: 0;">
        <h6 class="text-white text-center fw-light p-2" style="font-size: 1rem">
            Site em desenvolvimento! (ou não)
        </h6>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Adicionar um novo material</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="api/material" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input required type="text" class="form-control" placeholder="placeholder" id="floatingName" name="name">
                            <label for="floatingName">Nome do material</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input required type="text" class="form-control" placeholder="placeholder" id="floatingBrand" name="brand">
                            <label for="floatingBrand">Marca do material</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea required class="form-control" placeholder="placeholder" id="floatingDesc" name="description" style="height: 100px"></textarea>
                            <label for="floatingDesc">Descrição do material...</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input required type="number" class="form-control" placeholder="placeholder" id="floatingQty" name="qty">
                            <label for="floatingQty">Quantidade do material no estoque</label>
                        </div>
                        <div class="form-floating">
                            <input required type="text" class="form-control" placeholder="placeholder" id="floatingPrice" name="price">
                            <label for="floatingPrice">Preço unitário do material</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-warning text-white">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
