<h1>Champions</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Type</th>
      <th>Difficulty</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($roles = $role->fetch_assoc()) {
?>
  <tr>
    <td><?php echo $roles['role_id']; ?></td>
    <td><?php echo $roles['role_type']; ?></td>
    <td><?php echo $roles['role_difficulty']; ?></td>
  </tr>
<?php
}
?>
    </tbody>
  </table>
</div>
