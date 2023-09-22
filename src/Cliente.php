<?php 
class Cliente {
    
    // Propriedades (ou Atributos)
    public string $nome;
    public string $email = "";
    public string $senha;
    public array $telefones;

    // Métodos (ou comportamentos)
    public function exibirDados():void {
        echo "<section>";
        echo "<h2> $this->nome </h2>";
        echo "<p> $this->email </p>";
        echo "</section>";
    }
}