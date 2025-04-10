
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- getbootstrap.com > include via CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Microbiologia</title>

    <style>
        body {
            background-color: lightcyan; /* cor de fundo da página */
        }
        .bg{
            background-color :#f2ffff
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="post" action="resultado.php" class="p-4 border rounded shadow-sm bg">
                <h5 class="mb-4">Você optou pela Microbiologia, responder: <span class="text-danger">*</span></h5>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="microbiologia" value="urocultura" id="urocultura">
                    <label class="form-check-label" for="urocultura">
                        Urocultura com antibiograma
                    </label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="microbiologia" value="swab" id="swab">
                    <label class="form-check-label" for="swab">
                        Swab ocular
                    </label>
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="microbiologia" value="escarro" id="escarro">
                    <label class="form-check-label" for="escarro">
                        Escarro para exame de Micobacterium tuberculosis
                    </label>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="radio" name="microbiologia" value="nao_solicitado" id="nao_solicitado">
                    <label class="form-check-label" for="nao_solicitado">
                        Não foi solicitado
                    </label>
                </div>

                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>

