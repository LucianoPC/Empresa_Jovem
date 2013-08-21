<?php

include '../../exception/ValidacaoException.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Validacao
 *
 * @author luciano
 */
class Validacao {
        
    public function validarCaracteres($caracteres, $caracteresValidos){
        $caracteresInvalidos = "[";
                
        $caracteresInvalidos .= $this->caracteresInvalidos($caracteres, $caracteresValidos);
        $numeroDeCaracteresInvalidos = strlen($caracteresInvalidos) - 1;
        
        $caracteresInvalidos .= "]";
        if($numeroDeCaracteresInvalidos > 0)
            throw new ValidacaoException($caracteresInvalidos);
    }
        
    public function validarNumeroDeCaracteres($caracteres, 
            $tamanhoMinimo, $tamanhoMaximo){
        
        $numeroDeCaracteres = strlen($caracteres);
        
        if( ($numeroDeCaracteres < $tamanhoMinimo) || 
                ($numeroDeCaracteres > $tamanhoMaximo) ){
            throw new ValidacaoException("[", $tamanhoMinimo, ", ",
                                         $tamanhoMaximo, "]");
        }
    }
    
    public function validarIntervalo($valor, $limiteInferior, $limiteSuperior){
        if( ($valor < $limiteInferior) || ($valor > $limiteSuperior) ){
            throw new ValidacaoException("[", $limiteInferior, ", ",
                                         $limiteSuperior, "]");
        }
    }

        private function caracteresInvalidos($caracteres, $caracteresValidos){
        $caracteresInvalidos = "";
        
        $caracteresMinusculos = strtolower($caracteres);
        $caracteresValidosMinusculos = strtolower($caracteresValidos);
        
        for($indiceUm = 0; $indiceUm < strlen($caracteres); $indiceUm++){
            for($indiceDois = 0; $indiceDois < strlen($caracteresValidos); $indiceDois++){
                if($caracteresMinusculos[$indiceUm] == $caracteresValidosMinusculos[$indiceDois]){
                    break;
                }
                if($indiceDois == (strlen($caracteresValidos)-1))
                    $caracteresInvalidos .= $caracteres[$indiceUm];
            }
        }
        
        return $caracteresInvalidos;
    }
}

?>
