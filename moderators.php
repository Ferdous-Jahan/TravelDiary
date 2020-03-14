<!DOCTYPE html>
   
    <?php require('inc/navbar.php'); ?>
    
    <div style="padding-top: 94px;">
        <h1>Moderators</h1>

        <table>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
            <tr>
                <td>Choto</td>
                <td><a href="moderatordetails.html"><button type="button">Details</button></a> <button
                        type="button">Block</button></td>
            </tr>
            <tr>
                <td>Fahim</td>
                <td><a href="moderatordetails.html"><button type="button">Details</button></a> <button
                        type="button">Block</button></td>
            </tr>
        </table>
        
        <div style="cursor: pointer; padding-top: 54px;">
            <div style="margin: 16px; display: flex; justify-content: center;">
              <a href="addmoderator.php">
                <i title="Add Moderators" class="fa fa-plus-circle fa-4x" aria-hidden="true"></i>
              </a>
            </div>
            <p style="margin: 16px; display: flex; justify-content: center;">ADD MODERATORS</p>
          </div>
    </div>
</body>

</html>