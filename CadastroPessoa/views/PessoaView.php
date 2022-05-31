<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Cadastro Pessoa</title>
</head>
    <body>
        <div class="col-md-10">
    <form class="col-md-12">
           
            <div class="row mb-3"> <!-- $id  -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">ID</label>
                    <div class="col-md-2 col-sm-12">
                        <input type="number" class="form-control" placeholder="select">
                    </div>
            </div>

            <div class="row mb-3"><!-- $status -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">Status:</label>
                    <div class="col-md-2 col-sm-12">
                        <select class="form-select">
                            <option selected>Choose...</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>
            </div>

            <div class="row mb-3"> <!-- $name  -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">Name:</label>
                    <div class="col-md-3 col-sm-12">
                        <input class="form-control" type="text">
                    </div>
            </div>
        
            <div class="row mb-3"><!-- $mail -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">E-mail:</label>
                    <div class="col-md-3 col-sm-12">
                        <input class="form-control" type="email">
                    </div>
            </div>

            <div class="row mb-3"><!-- $phone -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">Phone:</label>
                    <div class="col-md-2 col-sm-12">
                        <input class="form-control" type="text">
                    </div>
            </div>

            <div class="row mb-3"><!-- $CEP -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">CEP:</label>
                    <div class="col-md-2 col-sm-12">
                        <input class="form-control" type="text">
                    </div>
            </div>

            <div class="row mb-3"><!-- $socialweb -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">Social Web:</label>
                <div class="col-md-3 col-sm-12">
                    <input class="form-control" type="url">
                </div>
            </div>

            <div class="row mb-3"><!-- $foundation / $born  -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">Born/Foundation:</label>
                    <div class="col-md-2 col-sm-12">
                        <input class="form-control" type="date">
                    </div>
            </div>

            <div class="row mb-0">
                <fieldset class="row mb-3"> <!-- $CPF / $CNPJ  -->
                    <legend align="center" class="col-form-label col-md-2 col-sm-12 pt-0">Type</legend>
                        <div class="col-md-10 col-sm-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios1" value="CPF" checked>
                                <label class="form-check-label"> CPF </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios1" value="CNPJ">
                                <label class="form-check-label"> CNPJ </label>
                            </div>
                            <div class="col-md-2 col-sm-12">
                                <input class="form-control" type="text" placeholder="type the numbers">
                            </div>
                        </div>
                </fieldset>
            </div>

            <div class="row mb-0"><!-- $marital_status -->
                <fieldset class="row mb-3"> 
                    <legend align="center" class="col-form-label col-md-2 col-sm-12 pt-0">Marietal Status:</legend>
                        <div class="col-md-10 col-sm-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios2" value="CPF" checked>
                                <label class="form-check-label"> Single</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios2" value="CNPJ">
                                <label class="form-check-label"> Relationship </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios2" value="CNPJ">
                                <label class="form-check-label"> I'm a company </label>
                            </div>
                        </div>
                </fieldset>
            </div>

            <div class="row mb-0"><!-- $gender -->
                <fieldset class="row mb-3"> 
                    <legend align="center" class="col-form-label col-md-2 col-sm-12 pt-0">Gender:</legend>
                        <div class="col-md-10 col-sm-12">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios3" value="CPF" checked>
                                <label class="form-check-label"> Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios3" value="CNPJ">
                                <label class="form-check-label"> Female </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios3" value="CNPJ">
                                <label class="form-check-label"> I'm a company </label>
                            </div>
                        </div>
                </fieldset>
            </div>

            <div class="row mb-3"><!-- $RG -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">RG:</label>
                    <div class="col-md-2 col-sm-12">
                        <input class="form-control" type="text">
                    </div>
            </div>

            <div class="row mb-3"><!-- $PIS -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">PIS:</label>
                    <div class="col-md-2 col-sm-12">
                        <input class="form-control" type="text">
                    </div>
            </div>

            <div class="row mb-3"><!-- $profession -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">Profession:</label>
                    <div class="col-md-2 col-sm-12">
                        <input class="form-control" type="text">
                    </div>
            </div>

            <div class="row mb-3"><!-- $CNAE -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">CNAE:</label>
                    <div class="col-md-2 col-sm-12">
                        <input class="form-control" type="text">
                    </div> 
            </div>
            
            <div class="row mb-3"><!-- $schooling -->
                <label align="center" class="col-md-2 col-sm-12 col-form-label">Schooling:</label>
                    <div class="col-md-2 col-sm-12">
                        <select class="form-select">
                            <option selected>Choose...</option>
                            <option value="1">Primary School</option> 
                            <option value="2">Secondary School</option>
                            <option value="3">Graduated</option>
                            <option value="4">Post Graduated</option>
                        </select>
                    </div>
            </div>
        
            <!-- <button type="submit" class="btn btn-primary">Confirm</button> -->
           
        </form>
        </div>
    </body>
</html>