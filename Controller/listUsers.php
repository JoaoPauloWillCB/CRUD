<?php
    while($user_data = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" .$user_data['id_usuario']. "</td>";
        echo "<td>" .$user_data['nome']. "</td>";
        echo "<td>" .$user_data['email']. "</td>";
        echo "<td>
                <a id='btn-info' href='../View/infoUser.php?id=$user_data[id_usuario]'>
                    <img id='img-info' src='../assets/img/info.png'>
                </a>
                <a id='btn-edit' href='../View/editUser.php?id=$user_data[id_usuario]'>
                    <img id='img-edit' src='../assets/img/editar.png'>
                </a>
                <a id='btn-remove' href='../Model/delete.php?id=$user_data[id_usuario]'>
                    <img id='img-delete' src='../assets/img/excluir.png'>
                </a>
            </td>";
        echo "</tr>";
    }
?>