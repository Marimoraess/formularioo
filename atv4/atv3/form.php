<?php
if  {
    $estado = $_POST['estado'];
    $capitais = [
        "acre" => "Rio Branco",
        "alagoas" => "Maceió",
        "amapá" => "Macapá",
        "amazonas" => "Manaus",
        "bahia" => "Salvador",
        "ceará" => "Fortaleza",
        "distrito federal" => "Brasília",
        "espírito santo" => "Vitória",
        "goiás" => "Goiânia",
        "maranhão" => "São Luís",
        "mato grosso" => "Cuiabá",
        "mato grosso do sul" => "Campo Grande",
        "minas gerais" => "Belo Horizonte",
        "pará" => "Belém",
        "paraíba" => "João Pessoa",
        "paraná" => "Curitiba",
        "pernambuco" => "Recife",
        "piauí" => "Teresina",
        "rio de janeiro" => "Rio de Janeiro",
        "rio grande do norte" => "Natal",
        "rio grande do sul" => "Porto Alegre",
        "rondônia" => "Porto Velho",
        "roraima" => "Boa Vista",
        "santa catarina" => "Florianópolis",
        "são paulo" => "São Paulo",
        "sergipe" => "Aracaju",
        "tocantins" => "Palmas"
    ];

    if {
        $capital = $capitais[$estado];
        echo "<h2>A capital de " . $estado . " é " . $capital) . ".</h2>";
    } else {
        echo "<h2>Estado não encontrado. Por favor, verifique o nome do estado e tente novamente.</h2>";
    }
} else {
    echo "";
}
?>