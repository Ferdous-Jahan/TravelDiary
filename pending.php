<?php
    session_start();
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
    if (!isset($id)) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
    
    <?php require('inc/navbar.php'); ?>

    <div style="padding-top: 94px;">
        <h1>Pending Posts</h1>

        <table>
            <tr>
                <th>Title</th>
                <th>User</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>Bandarban</td>
                <td>Choto</td>
                <td> <a href="postdetails.html"><button type="button">Details</button></a> <button type="button">Approve</button> <button type="button">Block</button></td>
            </tr>
            <tr>
                <td>Rangamati</td>
                <td>Fahim</td>
                <td><button type="button">Details</button> <button type="button">Approve</button> <button type="button">Block</button></td>
            </tr>

        </table>
    </div>
</body>
</html>