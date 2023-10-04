<h1>Champions with roles</h1>
<div class="card-group">

<?php
while ($champions = $champion->fetch_assoc()) {
?>
    <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $champions['champion_name']; ?></h5>
      <p class="card-text">
<?php
  $roles = selectRoleByChampion($champions['champion_id']);
  while ($role = $roles->fetch_assoc()){
?>
<?php
  }
?>
      </p>
      <p class="card-text"><small class="text-body-secondary">Color: <?php echo $champions['champion_color']; ?></small></p>
    </div>
  </div>
<?php
}
?>
</div>
