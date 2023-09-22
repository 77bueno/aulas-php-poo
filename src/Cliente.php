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

    public function getNome():string {
        return $this->nome; 
    }

    public function setEmail(string $email):void {
        $this->email = filter_var($email, FILTER_SANITIZE_EMAIL);
    }

    public function getEmail():string {
        return $this->email;
    }

    public function setSenha(string $senha):void {
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function getSenha():string {
        return $this->senha;
    }
}