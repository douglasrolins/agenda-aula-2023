<?php

class ServicoView
{

    // Método para exibir a lista de serviços
    public function exibirServicos()
    {

        echo "<h3>Lista de Serviços</h3>";
        echo "<table border='1'>";

        echo "<tr> 
                <th>Logo</th>
                <th>Nome</th> 
                <th>Tempo</th>
                <th>Preço</th>
                <th>Ações</th>
              </tr>    
        ";
        echo "</table>";
    }


}



?>