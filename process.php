<td>
    <form action="process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="action" value="edit">
        <!-- Add input fields for other attributes -->
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <form action="process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="action" value="delete">
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
</td>
