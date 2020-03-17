<?php
    session_start();
    $id = $_SESSION['id'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];

    if (!isset($role)) {
        header('Location: login.php');
    }
?>
<!DOCTYPE html>

    <?php require('inc/navbar.php'); ?>

    <div style="cursor: pointer; padding-top: 54px;">
        <div style="margin: 16px; display: flex; justify-content: center;">
            <a href="pending.php">
                <i title="pending" class="fa fa-edit fa-4x" aria-hidden="true"></i>
            </a>
        </div>
        <p style="margin: 16px; display: flex; justify-content: center;">Pending Posts</p>
    </div>

    <div style="cursor: pointer; padding-top: 54px;">
        <div style="margin: 16px; display: flex; justify-content: center;">
            <a href="userlist.html">
                <i title="users" class="fa fa-users fa-4x" aria-hidden="true"></i>
            </a>
        </div>
        <p style="margin: 16px; display: flex; justify-content: center;">User List</p>
    </div>

    <?php if ($role === "admin"): ?>
        <div style="cursor: pointer; padding-top: 54px;">
        <div style="margin: 16px; display: flex; justify-content: center;">
            <a href="moderators.php">
                <i title="moderator" class="fa fa-shield fa-4x" aria-hidden="true"></i>
            </a>
        </div>
        <p style="margin: 16px; display: flex; justify-content: center;">Moderators</p>
    </div>
    <?php endif ?>
</body>

</html>