<!DOCTYPE html>
   
    <?php require('inc/navbar.php'); ?>

    <div style="display: flex; justify-content: center; padding-top: 94px;">
        <form action="">

            <label style="align-items: center;" for="fname">Blog Title:</label><br>
            <input style="width: 360px; height: 40px;" type="text" id="title" name="fname" value=""><br>
            <label for="lname">Description:</label><br>
            <input style="height: 160px; width: 360px;" type="text" id="description" name="lname" value=""><br>
            <label for="fname">Upload Image:</label><br>
            <input type="file" id="image" name="image" value=""><br><br>
            <input style="height: 46px; width: 360px;" type="submit" value="Submit">

        </form>
    </div>
</body>

</html>