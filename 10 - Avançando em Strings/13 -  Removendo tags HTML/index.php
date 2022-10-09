<?php
    $textohtml = "<p>testando paragrafo.</p><div> uma div</div><p>outro paragrafo </p>";
    
    echo $textohtml;
    $salvar_texto_banco = strip_tags($textohtml);
    echo $salvar_texto_banco;




?>