<?php

include("layout/header.php");
include("layout/modal.php");
echo "\r\n";
?>
<div class="container-fluid">
  <div class="col-md-2 hidden-xs hidden-sm">
    <?php
      include("layout/navbar.php");
    ?>
  </div>
  <div class="col-md-10">
    <?php
      include("layout/closed.php");
    ?>
    <div class="main-panel" id="partners">
      <h1>
        My Partners
        <small class="sub-header">Each of my awesome partners I work with! (Click on the images!)</small>
      </h1>
      <div class="divider"></div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <a data-toggle="modal" data-target="#tech">
            <img src="/assets/img/partners/tech.png" data-src="/assets/img/partners/tech.png" alt="Graphic Design and Illustrations" class="img-responsive" />
          </a>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <a data-toggle="modal" data-target="#pwign">
            <img src="/assets/img/partners/pwign.png" data-src="/assets/img/partners/pwign.png" alt="Graphic Design" class="img-responsive" />
          </a>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <a data-toggle="modal" data-target="#ozzy">
            <img src="/assets/img/partners/ozzypatel.png" data-src="/assets/img/partners/ozzypatel.png" alt="Web development" class="img-responsive" />
          </a>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <a data-toggle="modal" data-target="#velcro">
            <img src="/assets/img/partners/velcro.png" data-src="/assets/img/partners/velcro.png" alt="Web Design" class="img-responsive" />
          </a>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <a data-toggle="modal" data-target="#is00c">
            <img src="/assets/img/partners/is00c.png" data-src="/assets/img/partners/is00c.png" alt="Web Design" class="img-responsive" />
          </a>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <a data-toggle="modal" data-target="#iamdev">
            <img src="/assets/img/partners/iamdev.png" data-src="/assets/img/partners/iamdev.png" alt="Web Design" class="img-responsive" />
          </a>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <a data-toggle="modal" data-target="#sl00th">
            <img src="/assets/img/partners/slooth.png" data-src="/assets/img/partners/slooth.png" alt="Web Design" class="img-responsive" />
          </a>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <a data-toggle="modal" data-target="#getbukkit">
            <img src="/assets/img/partners/getbukkit.png" data-src="/assets/img/partners/getbukkit.png" alt="Minecraft Jar Repo Host" class="img-responsive" />
          </a>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <a data-toggle="modal" data-target="#shockbite">
            <img src="/assets/img/partners/shockbite.png" data-src="/assets/img/partners/shockbite.png" alt="Minecraft Hosting" class="img-responsive" />
          </a>
        </div>
        <div class="col-md-10 col-md-offset-1">
          <a data-toggle="modal" data-target="#tigernode">
            <img src="/assets/img/partners/tigernode.png" data-src="/assets/img/partners/tigernode.png" alt="Minecraft Hosting" class="img-responsive" />
          </a>
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
