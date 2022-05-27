<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Cadastro Pessoa</title>
</head>
<body>

        <form>

            <div class="row mb-3"> <!-- $id  -->
                <label class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-1">
                        <input type="number" class="form-control" placeholder="select">
                    </div>
            </div>

            <div class="row mb-3"><!-- $status -->
                <label class="col-sm-2 col-form-label">Status:</label>
                    <div class="col-sm-2">
                        <select class="form-select">
                            <option selected>Choose...</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>
            </div>

            <div class="row mb-3"> <!-- $name  -->
                <label class="col-sm-2 col-form-label">Name:</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text">
                    </div>
            </div>
        
            <div class="row mb-3"><!-- $mail -->
                <label class="col-sm-2 col-form-label">E-mail:</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="email">
                    </div>
            </div>

            <div class="row mb-3"><!-- $phone -->
                <label class="col-sm-2 col-form-label">Phone:</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text">
                    </div>
            </div>

            <div class="row mb-3"><!-- $CEP -->
                <label class="col-sm-2 col-form-label">CEP:</label>
                    <div class="col-sm-2">
                        <input class="form-control" type="text">
                    </div>
            </div>

            <div class="row mb-3"><!-- $socialweb -->
                <label class="col-sm-2 col-form-label">Social Web:</label>
                <div class="col-sm-4">
                    <input class="form-control" type="url">
                </div>
            </div>

            <div class="row mb-3"><!-- $foundation / $born  -->
                <label class="col-sm-2 col-form-label">Born/Foundation:</label>
                <div class="col-sm-2">
                    <input class="form-control" type="date">
                </div>
            </div>

            <div>
                <fieldset class="row mb-3"> <!-- $CPF / $CNPJ  -->
                    <legend class="col-form-label col-sm-2 pt-0">Type</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" value="CPF" checked>
                                <label class="form-check-label"> CPF </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" value="CNPJ">
                                <label class="form-check-label"> CNPJ </label>
                            </div>
                            <div class="col-sm-2">
                                <input class="form-control" type="text" placeholder="type the numbers">
                            </div>
                        </div>
                </fieldset>
            </div>

            <div class="row mb-3"><!-- $marital_status -->
            <fieldset class="row mb-3"> <!-- $CPF / $CNPJ  -->
                    <legend class="col-form-label col-sm-2 pt-0">Marietal Status:</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" value="CPF" checked>
                                <label class="form-check-label"> CPF </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" value="CNPJ">
                                <label class="form-check-label"> CNPJ </label>
                            </div>
                            <div class="col-sm-2">
                                <input class="form-control" type="text" placeholder="type the numbers">
                            </div>
                        </div>
                </fieldset>
            </div>
    

            <div class="row mb-3">
                    <div class="col-sm-10 offset-sm-2">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck1">
                            <label class="form-check-label" for="gridCheck1"> Example checkbox </label>
                        </div>
                    </div>
            </div>
            <button type="submit" class="btn btn-primary">Confirm</button>

            
            <div><!-- $RG -->
                <label for="rg">RG:</label>
                <input type="text" id="rg" />
            </div>
            <div><!-- $PIS -->
                <label for="pis">PIS:</label>
                <input type="text" id="pis" />
            </div>
            <div><!-- $gender -->
                <label for="gender">Gender:</label>
                <input type="text" id="gender" />
            </div>
            
            <div><!-- $profession -->
                <label for="$profession">Profession:</label>
                <input type="text" id="$profession" />
            </div>
            <div><!-- $schooling -->
                <label for="$schooling">Schooling:</label>
                <input type="text" id="$schooling" />
            </div>

            <div><!-- $CNAE -->
                <label for="$cnae">CNAE:</label>
                <input type="text" id="$cnae" />
            </div>
        </form>


</body>
</html>