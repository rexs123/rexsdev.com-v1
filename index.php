<?php
include("layout/header.php");
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
    <div class="main-panel">
      <h1>
        About Me
        <small class="sub-header">A litte into my personal and professional life.</small>
      </h1>
      <div class="divider"></div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <p>Hi! I'm Rama, otherwise known as <span class="text-gold">'rexs123'</span>. I'm an <?php echo $age;?> year old developer, currently residing in <span class="text-gold">Hamilton, Ontario</span> in my first year at Mohawk College. I am currently studying <span class="text-gold">Network Engineering</span>, <span class="text-gold">Web Development</span> and <span class="text-gold">Business management</span>. I expect to graduate in 2020.</p>
			     <p> My passion for designing and developing websites started when I was 12 years old. I started with a minecraft server named <span class="text-gold">Blinkcraft</span>. I initially started with Wordpress then decided to pursue how to create my own sites as I wanted to venture further.</p>
			     <p> I soon moved onto building my own company which I've since sold, to chase after grander dreams and ideas. Nearing the end of grade 12, shortly after moving on from my company, I started <span class="text-gold">Rexsdev</span>, again to get back into web design &amp; development, however now fulltime.</p>
			     <p> I currently work for <a href="https://shockbyte.com">Shockbyte</a>, <a href="https://nuclearnode.com">Nuclearnode</a> and also manage <span class="text-gold">tactserv.com</span>. I am the lead web developer at <span class="text-gold">Nuclearnode</span>, a support analyst at <span class="text-gold">Shockbyte</span>, and the system Admin at tactserv.com. Some of my hobbies consist of <span class="text-gold">airsoft</span>, <span class="text-gold">gaming</span>,
			     <span class="text-gold">meme browsing </span>, and listening to <span class="text-gold">loud music</span>. I am generally very free and easy going. Feel free to contact me for anything you may need. Such as a helping hand on a project of yours! I will be glad to help.</p>
        </div>
      </div>
    </div>
    <div class="main-panel">
      <h1>
        Pricing
        <small class="sub-header">A quick intro to some of my services and a short break down of my pricing.</small>
      </h1>
      <div class="divider"></div>
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Web Design
                  </a>
          				<small class="pull-right hidden-xs">Starting at $75</small>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          			<ul class="list-group">
          			  <li class="list-group-item">
          					One page sites
          					<span class="pull-right">Starting at $75</span>
          				</li>
          				<li class="list-group-item">
          					Hosting sites
          					<span class="pull-right">Starting at $75</span>
          				</li>
          				<li class="list-group-item">
          					WHMCS
          					<span class="pull-right">Starting at $35</span>
          				</li>
          				<li class="list-group-item">
          					Multicraft
          					<span class="pull-right">Starting at $45</span>
          				</li>
          				<li class="list-group-item">
          					Enjin
          					<span class="pull-right">Visit My <a href="./partners">Partners</a></span>
          				</li>
          				<li class="list-group-item">
          					Xenforo
          					<span class="pull-right">Visit My <a href="./partners">Partners</a></span>
          				</li>
          				<li class="list-group-item">
          					Buycraft
          					<span class="pull-right">Visit My <a href="./partners">Partners</a></span>
          				</li>
          			</ul>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Web Development
                  </a>
          				<small class="pull-right hidden-xs">Starting at $175</small>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
          			<ul class="list-group">
          				<li class="list-group-item">
          					Simple Scripts
          					<span class="pull-right">Starting at $100</span>
          				</li>
          				<li class="list-group-item">
          					Adv. Script
          					<span class="pull-right">Starting at $150</span>
          				</li>
          				<li class="list-group-item">
          					Custom Script
          					<span class="pull-right">Starting at $175</span>
          				</li>
          				<li class="list-group-item">
          					 Custom backend
          					<span class="pull-right">Starting at $200</span>
          				</li>
          			</ul>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    System Administration
                  </a>
          				<small class="pull-right hidden-xs">Starting at $25/hr</small>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
          			<ul class="list-group">
          				<li class="list-group-item">
          					Onetime
          					<span class="pull-right">Starting at $25/hr</span>
          				</li>
          				<li class="list-group-item">
          					Part-time
          					<span class="pull-right">Starting at $250/wk</span>
          				</li>
          				<li class="list-group-item">
          					Full-time
          					<span class="pull-right">Starting at $500/wk</span>
          				</li>
          				<li class="list-group-item">
          					Custom bash Script
          					<span class="pull-right">Starting at $150</span>
          				</li>
          			</ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-panel">
      <h1>
        Portfolio
        <small class="sub-header">Some of my work I've completed in the past.</small>
      </h1>
      <div class="divider"></div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1" id="portfolio">
          <div class="row">
            <div class="col-md-4">
                <img src="/assets/img/portfolio/exerforge.png" data-src="/assets/img/portfolio/exerforge.png" alt="exerforge" class="img-responsive" />
            </div>
            <div class="col-md-4">
                <img src="/assets/img/portfolio/nuclearnode.png" data-src="/assets/img/portfolio/nuclearnode.png" alt="nuclearnode" class="img-responsive" />
            </div>
            <div class="col-md-4">
                <img src="/assets/img/portfolio/techb.png" data-src="/assets/img/portfolio/techb.png" alt="techB" class="img-responsive" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <img src="/assets/img/portfolio/vexnode.png" data-src="/assets/img/portfolio/vexnode.png" alt="vexnode" class="img-responsive" />
            </div>
            <div class="col-md-4">
                <img src="/assets/img/portfolio/lyhmehosting.png" data-src="/assets/img/portfolio/lyhmehosting.png" alt="lyhmehosting"  class="img-responsive" />
            </div>
            <div class="col-md-4">
                <img src="/assets/img/portfolio/ploxhost.png" data-src="/assets/img/portfolio/ploxhost.png" alt="ploxhost" class="img-responsive" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <img src="/assets/img/portfolio/snowstorm.png" data-src="/assets/img/portfolio/snowstorm.png" alt="snowstorm" class="img-responsive" />
            </div>
            <div class="col-md-4">
                <img src="/assets/img/portfolio/getspigotmc.png" data-src="/assets/img/portfolio/getspigotmc.png" alt="getspigotmc" class="img-responsive" />
            </div>
            <div class="col-md-4">
                <img src="/assets/img/portfolio/getbukkit.png" data-src="/assets/img/portfolio/getbukkit.png" alt="getbukkit" class="img-responsive" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <img src="/assets/img/portfolio/minecube.png" data-src="/assets/img/portfolio/minecube.png" alt="minecube" class="img-responsive" />
            </div>
            <div class="col-md-4">
                <img src="/assets/img/portfolio/vpsflame.png" data-src="/assets/img/portfolio/vpsflame.png" alt="vpsflame" class="img-responsive" />
            </div>
            <div class="col-md-4">
                <img src="/assets/img/portfolio/mcj.png" data-src="/assets/img/portfolio/mcj.png" alt="mcjars" class="img-responsive" />
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
                <img src="/assets/img/portfolio/mineovation.png" data-src="/assets/img/portfolio/mineovation.png" alt="mineovation" class="img-responsive" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="main-panel">
      <h1>
        Contact Me
        <small class="sub-header">Looking to get in touch? Shoot me an email!</small>
      </h1>
      <div class="divider"></div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">

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
