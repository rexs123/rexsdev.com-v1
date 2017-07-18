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
        Order Timeline
        <small class="sub-header">A short list of my orders and how long I should be working on them for.</small>
      </h1>
      <div class="divider"></div>
      <div class="row">
        <h3>Completed Commissions / Projects</h3>
        <div class="col-md-4 blue green">
          <h4>PHPC</h4>
          <small>Completed</small>
        </div>
        <div class="col-md-4 green">
          <h4>NikDev.net</h4>
          <small>Completed</small>
        </div>
        <div class="col-md-4 green">
          <h4>Private Customer #2</h4>
          <small>Feb 26th to March 5th</small>
        </div>
        <div class="col-md-4 green">
          <h4>Supreme builds</h4>
          <small>March 29th to April 5th</small>
        </div>
        <div class="col-md-4 green">
          <h4>Mineovations</h4>
          <small>April 10th to April 11th</small>
        </div>
      </div>
      <br>
      <div class="row vdivide">
        <h3>Commissions</h3>
        <div class="col-md-4 blue">
        <h4>GetBukkit 2.0</h4>
        <small>March 2nd to TBD</small>
        </div>
        <div class="col-md-4 blue">
          <h4>Private Customer #3 <? //LADYRUBY  ?></h4>
          <small>April 1st to April 25th</small>
        </div>
        <div class="col-md-4 red">
          <h4>Private Client #4 <? //KENNY  ?></h4>
          <small>April 5th to April 12th</small>
        </div>
      </div>
      <br>
      <div class="row vdivide">
        <div class="col-md-4 red">
          <h4>SoolsArtSoup</h4>
          <small>TBH</small>
        </div>
        <div class="col-md-4 red">
          <h4>Thomooses Birthday Gift</h4>
          <small>On Hold</small>
        </div>
      </div>
      <br>
      <div class="row vdivide">
        <div class="col-md-4 yellow">
          <h4>Private Client #1 <? //HOSTFAX  ?></h4>
          <small>On Hold</small>
        </div>
      </div>
      <br>
      <div class="row vdivide">
        <h3>Personal Projects</h3>
        <div class="col-md-4 yellow">
          <h4>TactSERV Manager</h4>
          <small>On Hold</small>
        </div>
        <div class="col-md-4 yellow">
          <h4>Simplex v2</h4>
          <small>ON HOLD</small>
        </div>
        <div class="col-md-4 yellow">
          <h4>Rexsdev.com</h4>
          <small>On Hold</small>
        </div>
      </div>
      <div class="row vdivide">
        <div class="col-md-4 yellow">
          <h4>Simplex-Manager v2*</h4>
          <small>Dec 1st to TBD</small>
        </div>
        <div class="col-md-4 yellow">
          <h4>Rama-patel.com</h4>
          <small>Activly working on</small>
        </div>
        <div class="col-md-4 yellow">
          <h4>Simplex-blog v2</h4>
          <small>On Hold</small>
        </div>
      </div>
      <br><br><br>
      <span class="row text-center">
        <div class="col-md-3">
          <h4 class="red">Pending -> not started</h4>
        </div>
        <div class="col-md-3">
          <h4 class="yellow">On Hold -> Started but on hold.</h4>
        </div>
        <div class="col-md-3">
          <h4 class="blue">In progress -> Started and working on it</h4>
        </div>
        <div class="col-md-3">
          <h4 class="green">Completed -> Its done &amp; delivered</h4>
        </div>
      </span>
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
