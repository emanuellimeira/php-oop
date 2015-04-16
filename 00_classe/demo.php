<meta charset="utf-8">
<style>
    body {
        font-family: Helvetica, sans-serif;
        font-size: 13px;
    }
</style>
<?php

require 'class.Endereco.inc';

echo '<h2>Instanciando o Endereço</h2>';
$address = new Address;

echo '<h2>Endereço Vazio</h2>';
echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

echo '<h2>Configurando as propriedades...</h2>';
$address->street_address_1 = 'Rua dos Poetas';
$address->city_name = 'João Pessoa';
$address->subdivision_name = 'Paraíba';
$address->postal_code = '58000000';
$address->country_name = 'Brasil';
echo '<tt><pre>' . var_export($address, TRUE) . '</pre></tt>';

echo '<h2>Mostrando endereço...</h2>';
echo $address->display();