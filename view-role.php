<h1>Role</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Difficulty</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
<?php
while ($roles = $role->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $roles['role_id']; ?></td>
    <td><?php echo $roles['role_type']; ?></td>
    <td><?php echo $roles['role_difficulty']; ?></td
    <td>
      <form method="post" action="playstyle-by-role.php">
        <input type = "hidden" name="cid" value="<?php echo $roles['role_id']; ?>">
        <button type="submit" class="btn btn-primary">Playstyle</button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
