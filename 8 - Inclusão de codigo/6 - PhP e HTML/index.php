<?php
    include_once "backend.php";

?>
<h1>seja bem vindo ao nosso site</h1>
<p><?= $nome; ?> Veja as nossas ofertas </p>

<h2> confira nossos princiais produtoos: </h2>
    <ul>
        <?php foreach($produtos as $produto): ?>
            <li><?= $produto; ?></li>
        <?php endforeach; ?>
    </ul>

