<?php

// $pessoa_fisica = new Pessoa_Fisica();

//     $pessoa_fisica->id = 1;
//     $pessoa_fisica->CPF = "01299237029";
//     $pessoa_fisica->RG = "5099009531";
//     $pessoa_fisica->PIS = "020397804231";
//     $pessoa_fisica->gender = "MALE";
//     $pessoa_fisica->marital_status = "SINGLE";
//     $pessoa_fisica->born = "30/03/1990";
//     $pessoa_fisica->profession = "PROGRAMADOR";
//     $pessoa_fisica->schooling = "PÓS GRADUAÇÃO";

// $pessoa_juridica = new Pessoa_Juridica();

//     $pessoa_juridica->id = 2;
//     $pessoa_juridica->CNPJ = "08199996006230";
//     $pessoa_juridica->fundation = "01/10/2022";
//     $pessoa_juridica->CNAE = "159753";


// $pessoa = new Pessoa();
// $pessoa->create($pessoa_juridica);
// $pessoa->create($pessoa_fisica);

$idPessoa = $_REQUEST["id"] ?? 0;
$pessoa = [];

$dadosPessoa = [   
                [
                        "id" => 10,
                        "nome" => "Odair",
                        "email" => "odair@curso.com",
                        "phone" => "54 912345678",
                        "gender" => "M",
                        "type" => "CPF",
                        "cep" => "95720123",
                        "social" => "https://linkedin.com",
                        "status" => "1",
                        "born_fundation" => "1990-03-30",
                        "cpf_cnpj" => "2",
                        "sing_rel_comp" => "3",
                        "male_fema_comp" => "3",
                        "rg" => "1234567891",
                        "pis" => "78962842",
                        "prof" => "Procurando",
                        "cnae" => "0123456789",

                ],
                [
                        "id" => 5,
                        "nome" => "Júnior",
                        "email" => "junior@curso.com",
                        "phone" => "54 987618526",
                        "gender" => "M",
                        "type" => "CPF",
                        "cep" => "78549000",
                        "social" => "https://linkedin.com",
                        "status" => "2"
                        
                ]
            ];


            foreach($dadosPessoa as $dado){
                if($dado['id'] == $idPessoa){
                    $pessoa = $dado;
                    break;
                }
        
            }
           

header('Content-Type: application/json; charset=utf-8');
echo json_encode($pessoa);
exit();