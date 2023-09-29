<?php
namespace Tabajara;
abstract class Cliente {

    private string $nome;
    private string $email; 
    private string $senha;
    private string $situacao = "a definir";
   
    public function exibirDados():void {      
        echo "<h3>".$this->getNome()."</h3>";
        echo "<p>Situação:". $this->getSituacao(). "</p>";
    }


    public function setNome(string $nome):void {
        $this->nome = $nome;
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

    /* Visibilidade protected
    Estes getters e setters poderão ser usados APENAS
    aqui (classe Cliente) e nas subclasses 
    (PessoaFisica e PessoaJuridica) */ 
    protected function getSituacao(): string
    {
        return $this->situacao;
    }


    protected function setSituacao(string $situacao): self
    {
        $this->situacao = $situacao;

        return $this;
    }
}