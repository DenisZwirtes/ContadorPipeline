<?php

$pipelineString = '';
function contadorPipeline($pipelineString)
{
    $pipelineArray = explode('|', $pipelineString, -1);

    //$pipelineArray[14] = '1';
    foreach ($pipelineArray as $indice => $valor) {
        $indice++;
        echo "coluna $indice = $valor  \n";
    }
    return $pipelineArray;
}
function convPipeString($pipelineArray)
{
    $pipelineString = implode("|", $pipelineArray);
    echo "\n\n $pipelineString";
    return $pipelineString;
}



$pipelineArray = contadorPipeline($pipelineString);
$pipelineString = convPipeString($pipelineArray);
