<h1>Champions with roles</h1>
<div class="card-group">

<?php
while ($champions = $champion->fetch_assoc()) {
?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $champions['champion_name']; ?></h5>
      <p class="card-text">
        <ul class="list-group">
<?php
  $roles = selectRoleByChampion($champions['champion_id']);
  while ($role = $roles->fetch_assoc()){
?>
      <li class="list-group-item"><?php echo $roles['role_type']; ?> - <?php echo $roles['lane']; ?> - <?php echo $roles['damage']; ?> - <?php echo $roles['powerspike']; ?></li>
<?php
  }
?>
    </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Color: <?php echo $champions['champion_color']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
