<?php 
/* Classe Abstrata 
Não pode ser instanciada, ou seja,
não é possível criar um objeto a partir desta classe.
Ela é usada apenas como modelo para subclasses com herança. */  
abstract class Cliente {
    
    // Propriedades (ou Atributos)
    private string $nome;
    private string $email;
    private string $senha;
    private string $situacao = "A definir";

    public function exibirDados():void {
        echo "<h3>Método exibirDados - Classe Cliente</h3>";
        echo "<h4> $this->nome </h4>"; // ou
        echo "<h4> ".$this->getNome()." </h4>";

        echo "<p>Situação: $this->situacao </p>";
    }
    
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