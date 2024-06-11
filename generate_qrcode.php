<?php

include "./phpqrcode/qrlib.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dados = $_POST['dados'];

    $tamanho = 10;
    $nivelCorrecao = 'L';
    $imagemType = 'png';

    $nomeArquivo = uniqid() . '.png';
    $caminhoImagem = './qrcodes/' . $nomeArquivo;

    QRcode::png($dados, $caminhoImagem, $nivelCorrecao, $tamanho, 2);

    header("Location: index.php?qrcode=" . urlencode($caminhoImagem));
    exit();
}
