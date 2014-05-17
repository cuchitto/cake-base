<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $this->element('layout/head'); ?>
</head>
<body>
  <?php echo $this->element('layout/navbar'); ?>
  <div class="container">
  <?php echo $this->element('layout/header') ?>
    <?php echo $this->Session->flash(); ?>
    <?php echo $this->fetch('content'); ?>
  </div>
  <?php echo $this->element('layout/footer'); ?>
  <?php echo $this->Html->script(array('jquery-2.1.1.min', 'bootstrap.min')); ?>
</body>
</html>