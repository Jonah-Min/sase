<div class="container">
  <div id="promo">
    <h1>Professional and Cultural Involvement</h1>
    <h2>For Scientists and Engineers</h2>
  </div>
</div>
</header>
<section class="main">

<div class="container light-grey">
  <div class="row">
    <div class="small-12 medium-8 medium-centered columns text-center">
      <h2>The Pillars of SASE</h2>
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="small-12 medium-4 columns">
      <div class="pillar">
        <img src="<?=base_url()?>public/img/site/pillar-professionalism.png" width="200px"/>
        <h3>Professionalism</h3>
        <p>
          Take advantage of workshops, panels, meetings, and conferences to
          connect and network with companies, fellow interns, and SASE members.
        </p>
      </div>
    </div>
    <div class="small-12 medium-4 columns">
      <div class="pillar">
        <img src="<?=base_url()?>public/img/site/pillar-diversity.png" width="200px"/>
        <h3>Diversity</h3>
        <p>
          Explore cultural diversity in the workplace and campus. Get involved
          with the Asian American community and engineering/science activities.
        </p>
      </div>
    </div>
    <div class="small-12 medium-4 columns">
      <div class="pillar">
        <img src="<?=base_url()?>public/img/site/pillar-service.png" width="200px"/>
        <h3>Service</h3>
        <p>
          Give back to the community, while having lots of fun as a group.
          Participate in volunteer work around the Northeastern campus and Boston.
        </p>
      </div>
    </div>
  </div>
</div>

<script>
  // setup homepage background image

  var image = "url(public/img/site/northeastern.png)";
  var shade = "linear-gradient(rgba(0,0,0,0.45),rgba(0,0,0,0.45))";
  var attribute = shade + ", " + image;

  $('header').css("background-image", attribute);
</script>
