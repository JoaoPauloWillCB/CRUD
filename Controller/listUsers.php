<?php
    while($user_data = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" .$user_data['id_usuario']. "</td>";
        echo "<td>
                <a id='info-user' href='../View/infoUser.php?id=$user_data[id_usuario]'>".$user_data['nome']."</a>
            </td>";
        echo "<td>" .$user_data['email']. "</td>";
        echo "<td>
                <a id='btn-edit' href='../View/editUser.php?id=$user_data[id_usuario]'>
                    <img id='img-pencil' src='../assets/img/edit.svg'>
                </a>
                <a id='btn-remove' href='../Model/delete.php?id=$user_data[id_usuario]'>
                    <img id='img-trash' src='../assets/img/delete.svg'>
                </a>
            </td>";
        echo "</tr>";
    }
?>