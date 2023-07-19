<?php

function mascaraTelefone($telefone) {
    $telefone = preg_replace("/[^0-9]/", "", $telefone); // Remove caracteres não numéricos
    $telefone = substr($telefone, 0, 11); // Limita a string a 11 caracteres
    $telefoneFormatado = "(".substr($telefone, 0, 2).") ".substr($telefone, 2, 4)."-".substr($telefone, 6);

    return $telefoneFormatado;
  }

  function limparTelefone($telefone) {
    $telefone = preg_replace("/[^0-9]/", "", $telefone); // Remove caracteres não numéricos
    return $telefone;
  }


  function mascaraCPF($cpf) {
    $cpf = preg_replace("/[^0-9]/", "", $cpf); // Remove caracteres não numéricos
    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT); // Preenche com zeros à esquerda
    $cpfFormatado = substr($cpf, 0, 3).".".substr($cpf, 3, 3).".".substr($cpf, 6, 3)."-".substr($cpf, 9);

    return $cpfFormatado;
  }

  function limparCPF($cpf) {
    $cpf = preg_replace("/[^0-9]/", "", $cpf); // Remove caracteres não numéricos
    return $cpf;
  }


  function tratarCampoDecimal($valor) {
    // Remove pontos
    $valor = str_replace('.', '', $valor);

    // Substitui vírgula por ponto
    $valor = str_replace(',', '.', $valor);

    return $valor;
  }


  function limparCEP($cep) {
    $cep = preg_replace("/[^0-9]/", "", $cep); // Remove caracteres não numéricos
    return $cep;
  }

  function mascaraCNPJ($cnpj) {
    $cnpj = preg_replace("/[^0-9]/", "", $cnpj); // Remove caracteres não numéricos

    $mascara = "##.###.###/####-##";
    $indice = 0;

    for ($i = 0; $i < strlen($mascara); $i++) {
      if ($mascara[$i] == "#") {
        $mascara[$i] = $cnpj[$indice];
        $indice++;
      }
    }

    return $mascara;
  }

  function limparCNPJ($cnpj) {
    $cnpj = preg_replace("/[^0-9]/", "", $cnpj); // Remove caracteres não numéricos

    return $cnpj;
  }

  function formatar_data($data) {
    $timestamp = strtotime($data);
    return date('d/m/Y', $timestamp);
  }


  function formatar_moeda($valor) {
    return 'R$ ' . number_format($valor, 2, ',', '.');
  }

  function formatar_taxa_juros($valor) {
    return  round($valor, 2);
  }

  function getDateTimeBR($date)
  {
      if (isset($date)) {
          return date('d/m/Y H:i', strtotime($date));
      }
  }

  function formatar_moeda_brasileira($valor)
{
    return 'R$ ' . number_format($valor, 2, ',', '.');
}
