<?php 

function readCustomers($customers, $delete = null) {
    if (isset($delete)) {
        ?>
            <div class="alert">
                Você tem certeza que deseja excluir?
                <a href="?page=delete&delete=<?=$delete?>">Confirmar</a>
                <a href="?page=list">Cancelar</a>
                <span class="close" onclick="this.parentElement.style.display='none'">&times;</span>
            </div>
        <?php 
    }
    $customersTable = "
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>DDD</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        </tbody>
    ";
    foreach($customers as $customer){
        $customersTable .= "<tr>
            <td>" . $customer["id"] . "</td>
            <td>" . $customer["name"] . "</td>
            <td>" . $customer["surname"] . "</td>
            <td>" . $customer["ddd"] . "</td>
            <td>" . $customer["phone"] . "</td>
            <td><a href='?page=create&edit=" . $customer["id"] . "'><i class='fa-solid fa-pen-to-square'></i></a><a href='?page=list&del=" . $customer["id"] . "'><i class='fa-solid fa-trash' style='color: red;'></i></a></td>
        </tr>
        ";
    }
    echo "$customersTable </tbody></table>";
}