<?php 
class Cliente {
    
    // Propriedades (ou Atributos)
    private string $nome;
    private string $email;
    private string $senha;
    
    // Métodos getters e setters
    public function setNome(string $valorDoNome):void {
        $this->nome = $valorDoNome;
    }

}