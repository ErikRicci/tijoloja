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
    .header {
        background: #ff5c1d;
    }

    .no-bg {
        background: black;
    }

    .fixed_button {
        position: absolute;
        bottom: 5px;
        right: 5px;
        width: 50px;
        height: 50px;
        background: white;
        border: 5px solid #ff5c1d;
    }
</style>
<body>
    <!-- Adicionar novo material -->
    <button type="button" class="fixed_button rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img class="img-fluid" src="{{ asset('img/add.svg') }}" alt="ADD">
    </button>

    {{-- NavBar --}}
    <ul class="nav justify-content-end no-bg p-4">
        <div class="nav-item">
            <a class="navbar-brand text-white" href="#">registrar-se</a>
            <a class="navbar-brand text-white" href="#">entrar</a>
        </div>
    </ul>
    <div class="container-fluid">
        <div class="row header pt-3">
            <div style="background: white"  class="pt-3 col-6 m-auto rounded-top">
                {{-- Título --}}
                <h1 style="text-align: center; font-family: 'PT Sans', sans-serif;">
                    TIJOLOJA
                </h1>
                <hr>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-sm">
                <a href="">
                    <img class="img-fluid" src="https://static.wikia.nocookie.net/naruto/images/3/33/Naruto_Uzumaki_%28Parte_I_-_HD%29.png/revision/latest?cb=20160316113315&path-prefix=pt-br" alt="">
                </a>
            </div>
            <div class="col-sm">
                <a href="">
                    <img class="img-fluid" src="https://static.wikia.nocookie.net/naruto/images/3/33/Naruto_Uzumaki_%28Parte_I_-_HD%29.png/revision/latest?cb=20160316113315&path-prefix=pt-br" alt="">
                </a>
            </div>
            <div class="col-sm">
                <a href="">
                    <img class="img-fluid" src="https://static.wikia.nocookie.net/naruto/images/3/33/Naruto_Uzumaki_%28Parte_I_-_HD%29.png/revision/latest?cb=20160316113315&path-prefix=pt-br" alt="">
                </a>
            </div>
            <div class="col-sm">
                <a href="">
                    <img class="img-fluid" src="https://static.wikia.nocookie.net/naruto/images/3/33/Naruto_Uzumaki_%28Parte_I_-_HD%29.png/revision/latest?cb=20160316113315&path-prefix=pt-br" alt="">
                </a>
            </div>
            <div class="col-sm">
                <a href="">
                    <img class="img-fluid" src="https://static.wikia.nocookie.net/naruto/images/3/33/Naruto_Uzumaki_%28Parte_I_-_HD%29.png/revision/latest?cb=20160316113315&path-prefix=pt-br" alt="">
                </a>
            </div>
            <div class="col-sm">
                <a href="">
                    <img class="img-fluid" src="https://static.wikia.nocookie.net/naruto/images/3/33/Naruto_Uzumaki_%28Parte_I_-_HD%29.png/revision/latest?cb=20160316113315&path-prefix=pt-br" alt="">
                </a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
