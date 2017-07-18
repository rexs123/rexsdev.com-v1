<?php
include("layout/header.php");
?>
<div class="container-fluid">
  <div class="col-md-2 hidden-xs hidden-sm">
    <?php
    include("layout/navbar.php");
    ?>
  </div>
  <div class="col-md-10" id="timeline">
    <?php
    include("layout/closed.php");
    ?>
    <div class="main-panel">
      <h1>
        Soon
        <small class="sub-header">A list of what programs I use and their appropriate nicknames</small>
      </h1>
      <div class="row">
        <div class="divider"></div>
          <div class="col-md-4 col-md-offset-4 text-center">
            <pre>Soon™ = Notepad ++ </pre>
            <pre>Soon™ 2.0 = Atom.io</pre>
            <pre>Soon™ 3.0 = Photoshop</pre>
            <pre>Soon™ 4.0 = Putty</pre>
            <pre>Soon™ 5.0  = Affinity Designer</pre>
            <pre>Soon™ 6.0 = Filezilla</pre>
            <pre>Soon™ 7.0 = Calculator</pre>
            <pre>Soon™ 8.0 = Illustrator</pre>
        </div>
      </div>
    </div>
<?php
include("layout/closed.php");
?>
</div>
</div>
<?php
echo "\r\n";
include("layout/footer.php");
?>
