<head>
    <script src="<?php echo base_url(); ?>public/js/scripts/jquery-3.0.0.js"></script>
    <script   src="https://code.jquery.com/color/jquery.color-2.1.2.js"   integrity="sha256-1Cn7TdfHiMcEbTuku97ZRSGt2b3SvZftEIn68UMgHC8="   crossorigin="anonymous"></script>
    <script src="<?php echo base_url(); ?>public/js/controllers/filtering.js"></script>
    <link rel='stylesheet' type='text/css' href="<?php echo base_url(); ?>public/css/pals.css">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>SASE Pals!</title>

	<script>
		$(document).ready(function() {
		(function animate() {
    			var block = $('.jonahs_special_white_content');
    			block.animate({borderBottomColor: $.Color(block.css('borderBottomColor')).hue('+=100'),
					borderTopColor: $.Color(block.css('borderTopColor')).hue('+=100'),
					borderLeftColor: $.Color(block.css('borderLeftColor')).hue('+=100'),
					borderRightColor: $.Color(block.css('borderRightColor')).hue('+=100')}, 300, animate);
		})();
		});
	</script>

</head>
<body>

<div id='checkbox-wrapper'>
<div class="profile-wrap">

	<h3> Filter By . . . </h3>

  	<p class='titles'><strong>Major:</strong></p>
  	<form>
    	&nbsp;&nbsp;<label class='label'>
    	  <input type="checkbox" name="fl-colour" value="CS" id="Computer Science" />Computer Science</label>
    	<br>
	&nbsp;&nbsp;<label class='label'>
	          <input type="checkbox" name="fl-colour" value="B" id="Business" />Business</label>
        <br>
        &nbsp;&nbsp;<label class='label'>
    	  <input type="checkbox" name="fl-colour" value="M" id="yellow" />Marketing</label>
    	<br>
    	&nbsp;&nbsp;<label class='label'>
    	  <input type="checkbox" name="fl-colour" value="CE" id="yellow" />Computer Engineering</label>
    	<br>
    	&nbsp;&nbsp;<label class='label'>
    	  <input type="checkbox" name="fl-colour" value="EE" id="pink" />Electrical Engineering</label>
    	<br>
    	&nbsp;&nbsp;<label class='label'>
    	  <input type="checkbox" name="fl-colour" value="ME" id="pink" />Mechanical Engineering</label>
    	<br>
    	&nbsp;&nbsp;<label class='label'>
    	  <input type="checkbox" name="fl-colour" value="ChemE" id="purple" />Chemical Engineering</label>
    	<br>
    	&nbsp;&nbsp;<label class='label'>
    	  <input type="checkbox" name="fl-colour" value="Biology" id="green" />Biology</label>
    	<br>
	&nbsp;&nbsp;<label class='label'>
          <input type="checkbox" name="fl-colour" value="F" id="green" />Finance</label>
        <br>

  	</form>

	<p class='titles'><strong>Minor:</strong></p>
	<form>
	&nbsp;&nbsp;<label class='label'>
          <input type="checkbox" name="fl-colour" value="CSmin" id="Computer Science" />Computer Science</label>
        <br>
	&nbsp;&nbsp;<label class='label'>
          <input type="checkbox" name="fl-colour" value="IAmin" id="Computer Science" />International Affairs</label>
        <br>
	&nbsp;&nbsp;<label class='label'>
          <input type="checkbox" name="fl-colour" value="BEmin" id="Computer Science" />Biomedical Engineering</label>
        <br>
	&nbsp;&nbsp;<label class='label'>
          <input type="checkbox" name="fl-colour" value="Mathmin" id="Computer Science" />Mathematics</label>
	<br>
	&nbsp;&nbsp;<label class='label'>
          <input type="checkbox" name="fl-colour" value="Bchemmin" id="Computer Science" />Biochemical Engineering</label>
    <br>
    &nbsp;&nbsp;<label class='label'>
          <input type="checkbox" name="fl-colour" value="BA" id="Computer Science" />Business Administration</label>
    <br>
    &nbsp;&nbsp;<label class='label'>
          <input type="checkbox" name="fl-colour" value="artmin" id="Computer Science" />Art</label>
    <br>
	</form>

  	<p class='titles'><strong>Graduation Year:</strong></p>
  	<form>
  	  &nbsp;&nbsp;<label class='label'>
  	    <input type="checkbox" name="fl-size" value="2017" id="small" />2017</label>
  	  <br>
  	  &nbsp;&nbsp;<label class='label'>
 	    <input type="checkbox" name="fl-size" value="2018" id="medium" />2018</label>
 	   <br>
 	  &nbsp;&nbsp;<label class='label'>
 	     <input type="checkbox" name="fl-size" value="2019" id="large" />2019</label>
 	   <br>
 	  &nbsp;&nbsp;<label class='label'>
 	     <input type="checkbox" name="fl-size" value="2020" id="giant" />2020</label>
 	 </form>

 	<p class='titles'><strong>Number of Co-ops:</strong></p>
 	<form>
		&nbsp;&nbsp;<label class='label'>
                        <input type="checkbox" name="fl-size" value="none" id="yes"/>None</label>
                <br>
 		&nbsp;&nbsp;<label class='label'>
 			<input type="checkbox" name="fl-size" value="1" id="yes"/>1</label>
 		<br>
 		&nbsp;&nbsp;<label class='label'>
 			<input type="checkbox" name="fl-size" value="2" id="no"/>2+</label>
		<br>
	</div>

</div>
</div>

	<h1>The SASE Pals!</h1>
	<p id='disclaimer'>Click each profile to learn more about the mentors!</p>
<div id="Profile-desc">
  	<div class="profile" data-id="Crystal" data-category="CS B 2020 none" onclick="document.getElementById('lightCrystal').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src="<?php echo base_url(); ?>public/palpics/crystal.jpg"></div><br>
		<p class='name'><strong>Crystal Rhee</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Computer Science and Business<br>
			<strong>Minor: </strong>None<br>
			<strong>Graduation Year: </strong>2020<br>
			<strong>Co-ops: </strong>None<br>
			<strong>Email: </strong>rhee.s@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightCrystal" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/crystal.jpg'>
			<p class='light-name'>Crystal Rhee</p>
			<p class='email'>rhee.s@husky.neu.edu<br></p>
			<p class='advice'><i>"Try everything then organize accordingly."</i></p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Why I want to be a SASE Pal </p>
			<p class='light-desc'>I've had mentors throughout high school but always declined when asked to be a mentor. The people I looked up to always seemed to have their life more put together than mine so I didn't dare raise myself to their level. But I also realized, throughout the years, that mentors also grow and mature when they know that someone looks up to them or that they are role models for someone else. I don't know if I sound too selfish but my personal motivation of becoming a mentor is to see growth in myself--my growth has become stagnant as I encountered challenges without preparing myself. With this mentoring program, I hope to be adequately equipped to be a wonderful mentor. I would love for someone to see something they could use as a guide in me. </p>
			<p class='light-headers'> Topics for Advice </p>
			<p class='light-desc'> Switching majors, life, relationships, activities and clubs, network and relationships outside of Northeastern University, dance, time management </p>
			<p class='light-headers'> Work Experience </p>
			<ul>
				<li><p class='light-exp'><strong>Northeastern University DMSB:&nbsp;</strong><i>Computer Operations</i></p></li>
				<li><p class='light-exp'><strong>Northeastern University Snell Library:&nbsp;</strong><i>Digitization Assistant</i></p></li>
				<li><p class='light-exp'><strong>Qalya Labs Inc:&nbsp;</strong><i>Start-up Intern</i></p></li>
			</ul>
			<p class='light-headers'> Campus Involvment </p>
			<p class='light-desc'>Revolve Dance Crew, Freshman Representative for Vietnamese Student ASsociation, Korean American Student Association, Society of Asian Scientists and Engineers, Barkada, Asian Student Union</p>
			<p class='light-headers'> Fun Facts and Hobbies! </p>
                        <p class='light-desc'> I used to own an axolotl :D </p>
		</div>
  	</div>

	<div class="profile" data-id="Liane" data-category="EE BEmin 2017 2" onclick="document.getElementById('lightLiane').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/liane.jpg'></div><br>
		<p class='name'><strong>Liane Wong</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Electrical Engineering<br>
			<strong>Minor: </strong>Biomedical Engineering<br>
			<strong>Graduation Year: </strong>2017<br>
			<strong>Co-ops: </strong>3<br>
			<strong>Email: </strong>wong.li@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightLiane" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/liane.jpg'>
			<p class='light-name'>Liane Wong</p>
			<p class='email'>wong.li@husky.neu.edu<br></p>
			<p class='advice'><i>"Spread out the things you want to achieve over the entirety of your 4-5 years here. Don't try to manage it all at once."</i></p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'> Celine made me do it. But for real: As a 5th year with a fairly hefty list of leadership and professional experience I feel like I can easily answer most questions that an underclassmen might have. I feel a lot of personal fulfillment when I am able help someone. I also want to make sure I stay involved with SASE. </p>
			<p class='light-headers'> Topics for Advice </p>
                        <p class='light-desc'> Co-op, study abroad, AAC programs, other general old person things </p>
			<p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>Micro-Leads Inc:&nbsp;</strong><i>Biomedical Engineering Co-op</i></p></li>
                                <li><p class='light-exp'><strong>MC10 Inc:&nbsp;</strong><i>Biomedical Engineering R&D Co-op</i></p></li>
                                <li><p class='light-exp'><strong>Boston Engineering Corporation:&nbsp;</strong><i>Electrical Engineering Co-op</i></p></li>
                        </ul>		
			<p class='light-headers'> Campus Involvment </p>
			<p class='light-desc'>Secretary for SASE 2014-2015, Co-chair of AASIA Peer Mentoring Program, Co-facilitator of NUGOAL Leadership Development Program</p>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> I've played an instrument for 16ish years. I watch an inordinate amount of YouTube videos.  I collect plush Labbits. </p>
		</div> 
  	</div>

	<div class="profile" data-id="Amanda" data-category="Biology IAmin Mathmin 2017 2" onclick="document.getElementById('lightAmanda').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/amanda.png'></div><br>
		<p class='name'><strong>Amanda Luken</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Biology<br>
			<strong>Minor: </strong>International Affairs and Math<br>
			<strong>Graduation Year: </strong>2017<br>
			<strong>Co-ops: </strong>2<br>
			<strong>Email: </strong>luken.a@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightAmanda" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/amanda.png'>
			<p class='light-name'>Amanda Luken</p>
			<p class='email'>luken.a@husky.neu.edu<br></p>
                        <p class='advice'><i>"There are 168 hours, or 10,080 minutes, in a week. There is always time to take care of your self through exercise, healthy eating, and finding what makes you happy."</i></p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'>As a senior, I would love to help out anyone looking for personal or professional advice. I am constantly seeking ways to improve myself professionally and personally by asking my peers and role models for help, so I'd like to pay it forward. </p>
			<p class='light-headers'> Topics for Advice </p>
			<p class='light-desc'>Dialogue of Civilizations, International Co-op, Self-developed co-ops, research, work study, pre-med, leaving pre-med, self-care, work-life balance, time management, global health, MPH </p>
			<p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>CORE Laboratory:&nbsp;</strong><i>Research Assistant</i></p></li>
                                <li><p class='light-exp'><strong>NEU Department of African American Studies:&nbsp;</strong><i>Research Assistant</i></p></li>
                                <li><p class='light-exp'><strong>Student-Athlete Support Services:&nbsp;</strong><i>Academic Tutor</i></p></li>
                        	<li><p class='light-exp'><strong>NEU Department of Marine and Environmental Sciences:&nbsp;</strong><i>Biostatistics Peer Tutor</i></p></li>
				<li><p class='light-exp'><strong>Roslindale Pediatrics Assoc:&nbsp;</strong><i>Medical Assistant</i></p></li>
				<li><p class='light-exp'><strong>Northeastern University:&nbsp;</strong><i>Undergraduate Lab Assistant</i></p></li>
			</ul>
                        <p class='light-headers'> Campus Involvment </p>
			<p class='light-desc'>VP of SASE 2016, FACE AIDS/Partners in Health Engage, Human Services Organization, Tri Beta National Biological Honors Society</p>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> Hobbies: yoga, reading Eric Barker's blog, reading web comics like Sarah's  Scribbles and Zen Pencils, playing video games, reading books, watching TV, playing piano, planning things<br><br>

			Interests: Global health, Meal Prep Sunday, yoga, volleyball, fitness, playing violin and piano, hiking, Criminal Minds, and Marvel/DC.<br><br>

			Fun Fact: I had my photo in a Tamil newspaper for handing out diplomas and taking photos with 1,200 graduating kindergartners on live TV. </p>


		</div>
  	</div>

	<div class="profile" data-id="Andrew" data-category="CE CS 2020 none" onclick="document.getElementById('lightAndrew').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/andrew.jpg'></div><br>
		<p class='name'><strong>Andrew Tu</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Computer Engineering/Computer Science<br>
			<strong>Minor: </strong>None<br>
			<strong>Graduation Year: </strong>2020<br>
			<strong>Co-ops: </strong>None<br>
			<strong>Email: </strong>tu.a@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightAndrew" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/andrew.jpg'>
			<p class='light-name'>Andrew Tu</p>
			<p class='email'>tu.a@husky.neu.edu<br></p>
                        <p class='advice'><i>"Introspection is the most valuable tool in self-improvement."</i></p>	
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'> Mentorship is a two way learning opportunity that benefits both mentor and mentee. I believe I can help younger, less experienced STEM inclined freshman along their first year away from home while also developing my own skills as a leader and mentor.  </p>
			<p class='light-headers'> Topics for Advice </p>
			<p class='light-desc'> Research, Public Speaking, Professionalism </p>
			<p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>NEU Marine Observatory Network:&nbsp;</strong><i>Undergraduate Research Assistant</i></p></li>
                                <li><p class='light-exp'><strong>NEU Interactive Clustering Engine:&nbsp;</strong><i>Undergraduate Research Assistant</i></p></li>
                                <li><p class='light-exp'><strong>NUCAR Side Channel Attacks:&nbsp;</strong><i>Undergraduate Research Assistant</i></p></li>
                        </ul>
                        <p class='light-headers'> Campus Involvment </p>
                        <p class='light-desc'>NU MONET Research, NUCAR Research, IEEE, MIT Ballroom Dance Team, Toastmasters, Lead 360 Blueprint</p>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> I am both a competitive Ballroom dancer and ultimate frisbee player </p>
		</div>
  	</div>

	<div class="profile" data-id="Dang" data-category="ChemE CSmin 2020 none" onclick="document.getElementById('lightDang').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/dang.jpg'></div><br>
		<p class='name'><strong>Dang Nguyen</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Chemical Engineering/Computer Science<br>
			<strong>Minor: </strong>None<br>
			<strong>Graduation Year: </strong>2020<br>
			<strong>Co-ops: </strong>None<br>
			<strong>Email: </strong>nguyen.dang@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightDang" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/dang.jpg'>
			<p class='light-name'>Dang Nguyen</p>
			<p class='email'>nguyen.dang@husky.neu.edu<br></p>
                        <p class='advice'><i>"Make the effort to reach out to people, whether to hang out or for advice, because they won't reach out first normally."</i></p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'> I get to meet new SASE friends, and I enjoy being able to help others and see them grow. </p>
			<p class='light-headers'> Topics for Advice </p>
                        <p class='light-desc'> Public speaking, making friends in strange places, managing time </p>
			<p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>OoLaLa! Pho and Banh Mi:&nbsp;</strong><i>Shift Manager</i></p></li>
                                <li><p class='light-exp'><strong>SASE:&nbsp;</strong><i>Northeast-Regional Conference Organizer</i></p></li>
                        </ul>
                        <p class='light-headers'> Campus Involvment </p>
                        <p class='light-desc'>Circle-K, SASE, Engineers Without Borders, AiCHe</p>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> Music, hiking, cooking, adventure! I sometimes cook in my sleep. </p>
		</div>
  	</div>

	<div class="profile" data-id="Emily" data-category="Biology Mathmin 2018 2" onclick="document.getElementById('lightEmily').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/emily.jpg'></div><br>
		<p class='name'><strong>Emily Greenhaw</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Biology<br>
			<strong>Minor: </strong>Math<br>
			<strong>Graduation Year: </strong>2018<br>
			<strong>Co-ops: </strong>2<br>
			<strong>Email: </strong>greenhaw.e@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightEmily" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/emily.jpg'>
			<p class='light-name'>Emily Greenhaw</p>
			<p class='email'>greenhaw.e@husky.neu.edu<br></p>
                        <p class='advice'><i>"Keep your options open!  This applies to being flexible to changing your major and to trying new clubs.  Don't feel like you have to commit to something you don't enjoy."</i></p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'> I would like to help incoming students make the most of their experience at Northeastern by having approachable students as resources for advice/help with academic and social concerns. </p>
			<p class='light-headers'> Topics for Advice </p>
                        <p class='light-desc'> Study abroad </p>
			<p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>Pfizer Inc:&nbsp;</strong><i>Co-op Lab Assistant</i></p></li>
                                <li><p class='light-exp'><strong>Bridge to Calculus:&nbsp;</strong><i>Mentor/Tutor</i></p></li>
                                <li><p class='light-exp'><strong>Selecta Biosciences:&nbsp;</strong><i>Immunology Co-op</i></p></li>
                        </ul>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> I like going to shows/concerts and outdoor activities (rock climbing, hiking, camping, skiing, etc.), attended 8 schools prior to Northeastern, and have lived in 12 or so cities. </p>
		</div>
  	</div>


<!--
	<div class="profile" data-id="Michael" data-category="ChemE Bchemmin 2019 none" onclick="document.getElementById('lightMichael').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/michael.jpg'></div><br>
		<p class='name'><strong>Michael Nguy</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Chemical Engineering<br>
			<strong>Minor: </strong>Biochemical Engineering<br>
			<strong>Graduation Year: </strong>2019<br>
			<strong>Co-ops: </strong>None<br>
			<strong>Email: </strong>nguy.m@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightMichael" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/michael.jpg'>
			<p class='light-name'>Michael Nguy</p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'> I like to be helpful </p>
			<p class='light-headers'> Piece of Advice </p>
			<p class='light-desc'> Learn how to manage your time and just do you. </p>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> I like to play volleyball and cook :) </p>
			<p class='light-headers'> Topics for Advice </p>
			<p class='light-desc'> Honors program, getting involved on campus </p>
		</div> 
		<a class='exit' onclick="document.getElementById('lightMichael').style.display='none';document.getElementById('fade').style.display='none'">X</a>
  	</div>

-->
	<div class="profile" data-id="Spenser" data-category="EE CE 2020 none" onclick="document.getElementById('lightSpenser').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/spenser.jpg'></div><br>
		<p class='name'><strong>Spenser Cheung</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Electrical and Computer Engineering<br>
			<strong>Minor: </strong>None<br>
			<strong>Graduation Year: </strong>2020<br>
			<strong>Co-ops: </strong>None<br>
			<strong>Email: </strong>cheung.sp@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightSpenser" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/spenser.jpg'>
			<p class='light-name'>Spenser Cheung</p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'> I would like to share wisdom that I gained myself, with the incoming students. Also, I love to meet new people, and getting to more people in my respective major/field is always a good thing :)  </p>
			<p class='light-headers'> Piece of Advice </p>
			<p class='light-desc'> try everything and find what you like the best </p>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> Planning for CSA, Partying, Listening to music, People don't expect that I used to play competitive Ice Hockey  </p>
		</div> 
		<a class='exit' onclick="document.getElementById('lightSpenser').style.display='none';document.getElementById('fade').style.display='none'">X</a>
  	</div>

	<div class="profile" data-id="Wen" data-category="ME Mathmin 2019 none" onclick="document.getElementById('lightWen').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/wen.jpg'></div><br>
		<p class='name'><strong>Wen Li</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Mechanical Engineering<br>
			<strong>Minor: </strong>Math<br>
			<strong>Graduation Year: </strong>2019<br>
			<strong>Co-ops: </strong>None<br>
			<strong>Email: </strong>li.wen1@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightWen" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/wen.jpg'>
			<p class='light-name'>Wen Li</p>
			<p class='email'>li.wen1@husky.neu.edu<br></p>
                        <p class='advice'><i>"Don't get too involved in your studies. Although it's important to focus on classes a lot due to the difficult adjustment between high school and college classes, it is important to take a break every so often."</i></p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'> Last year as a freshman, I know how difficult it was to find someone to answer all the questions you have. As someone who has a difficult time finding common interests with others, I think this is a great way for incoming students to find someone who they can feel comfortable talking to and I want to be able to help as much as possible. </p>
			<p class='light-headers'> Topics for Advice </p>
                        <p class='light-desc'> declaring a minor, preparing for co-op, arranging schedule of classes </p>
			<p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>International Business and Strategy:&nbsp;</strong><i>Office Assistant</i></p></li>
                                <li><p class='light-exp'><strong>International Village Residence Office:&nbsp;</strong><i>Office Assistant</i></p></li>
                        </ul>
                        <p class='light-headers'> Campus Involvment </p>
                        <p class='light-desc'>SASE, ASME</p>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> Sudoku, watching space documentaries, and collecting panda accessories </p>
		</div>
  	</div>

	<div class="profile" data-id="Meghna" data-category="Biology BA 2020 none" onclick="document.getElementById('lightMeghna').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/meghna.jpg'></div><br>
		<p class='name'><strong>Meghna Kuppuraju</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Biology<br>
			<strong>Mino: </strong>Business Administration<br>
			<strong>Graduation Year: </strong>2020<br>
			<strong>Co-ops: </strong>None<br>
			<strong>Email: </strong>kuppuraju.m@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightMeghna" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/meghna.jpg'>
			<p class='light-name'>Meghna Kuppuraju</p>
			<p class='email'>huppuraju.m@husky.neu.edu<br></p>
                        <p class='advice'><i>"Try to get involved in things that interest you, even if you have no prior experience and don't be afraid to talk to new people! "</i></p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'> I had a lot of people I could count on to give me advice my freshman year (and now), and I would love to be able to be that person for someone else! </p>
			<p class='light-headers'> Topics for Advice </p>
                        <p class='light-desc'> Becoming involved in the PAAC community </p>
			<p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>Waksman Student Scholars Program:&nbsp;</strong><i>Teaching Assistant</i></p></li>
                        </ul>
                        <p class='light-headers'> Campus Involvment </p>
                        <p class='light-desc'>PAAC, South Asian Culteral Organization, SASE, Classical Chinese Dance Troupe</p>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> I love dancing! I'm part of Eon Dance Troupe and participate with UTSAV in their cultural show. I'm also a very big fan of most music genres. Fun Fact: I once got bitten by a ladybug, but the people who saw it happen do not believe me. </p>
		</div>
  	</div>

	<div class="profile" data-id="Akshay Kaushik" data-category="EE CE 2018 2" onclick="document.getElementById('lightAkshay').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/akshay.jpg'></div><br>
		<p class='name'><strong>Akshay Kaushik</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Electrical and Computer Engineering<br>
			<strong>Minor: </strong>None<br>
			<strong>Graduation Year: </strong>2018<br>
			<strong>Co-ops: </strong>2<br>
			<strong>Email: </strong>kaushik.a@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightAkshay" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/akshay.jpg'>
			<p class='light-name'>Akshay Kaushik</p>
			<p class='email'>kaushik.a@husky.neu.edu<br></p>
                        <p class='advice'><i>"Just be yourself, try different things whatever you are passionate about, make friends, learn new things and have fun! College is once in a lifetime experience."</i></p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'> I think it’s the best way to give back to Northeastern, and help the incoming Freshmen; sharing with them my college experiences (classes, clubs, coops) and what helped me get to where I am today. In addition to that, the mentoring experience will help in my own professional growth and strengthen my coaching and leadership skills working with different students. </p>
			<p class='light-headers'> Topics for Advice </p>
                        <p class='light-desc'> I think definitely I can help the students with figuring out what majors they’re interested in (especially if it’s engineering related); being on IEEE Board I can guide them to the right professor for research, help with resume/interviews for coops, different opportunities on campus which’ll help them gain more experience and leadership skills.  </p>
			<p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>State Street Global Advisors:&nbsp;</strong><i>Junior Business Analyst</i></p></li>
                                <li><p class='light-exp'><strong>Benu Networks:&nbsp;</strong><i>Software Engineer</i></p></li>
                        </ul>
                        <p class='light-headers'> Campus Involvment </p>
                        <p class='light-desc'>IEEE, NU Entrepreneurs Club, Intramural Soccer, LEAD360, NU Squash, SASE, Enabling Engineering, Student Government Association, OSCCR</p>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> Football, Books, Coffee, Travelling, Netflix and Music! Fun Fact: I am terrified of heights, and I hiked the Precipice Trail without any gear! Never ever doing that again! :) </p>
		</div>
  	</div>

	<div class="profile" data-id="Deborah" data-category="M artmin 2019 1" onclick="document.getElementById('lightDeborah').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/deborah.jpg'></div><br>
		<p class='name'><strong>Deborah Chen</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Marketing<br>
			<strong>Minor: </strong>Art<br>
			<strong>Graduation Year: </strong>2019<br>
			<strong>Co-ops: </strong>1<br>
			<strong>Email: </strong>chen.deb@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightDeborah" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/deborah.jpg'>
			<p class='light-name'>Deborah Chen</p>
			<p class='email'>chen.deb@husky.neu.edu<br></p>
                        <p class='advice'><i>"It's ok to not know what you're doing with your life!!! Freshman year is a time to relax and ease into college and not stress about too many things!!!!! "</i></p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'> I'm interested in being a mentor because I was once a lost freshman with no one to look up to, and what better way to give back to the community than to share my wisdom and experience? I obviously can't help with anything STEM-related but I can provide excellent knowledge on life in general! Get the perspective from this spunky business major/art minor woohoo </p>
			<p class='light-headers'> Topics for Advice </p>
                        <p class='light-desc'> Study abroad (Dialogues), co-op things (interviews, being profesh 2 death, etc.), food recommendations LOL </p>
			<p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>State Street:&nbsp;</strong><i>Project Support/IMS Business Operations Co-op</i></p></li>
                                <li><p class='light-exp'><strong>SASE:&nbsp;</strong><i>2016 Northeast Regional Conference Co-Chair</i></p></li>
                                <li><p class='light-exp'><strong>D'Amore-McKim School of Business:&nbsp;</strong><i>Office Assistant</i></p></li>
                        </ul>
                        <p class='light-headers'> Campus Involvment </p>
                        <p class='light-desc'>PAAC Rep of SASE 2016, Asian American Students in Action, Asian Student Union, Council for University Programs</p>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> Shopping, music, art, eating out (restaurants, desserts, coffee shops WOW), k-dramas, movies<br><br>
			Fun fact: One time in preschool I got in trouble because I wouldn't stop singing the Jigglypuff song </p>
		</div> 
  	</div>

	<div class="profile" data-id="Jenny" data-category="EE CE 2019 1" onclick="document.getElementById('lightJenny').style.display='block'; document.getElementById('fade').style.display='block'">
		<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/jenny.jpg'></div><br>
		<p class='name'><strong>Jenny Cheung</strong><br></p>
			<p class='toTheLeft'><strong>Major: </strong>Electrical and Computer Engineering<br>
			<strong>Minor: </strong>None<br>
			<strong>Graduation Year: </strong>2019<br>
			<strong>Co-ops: </strong>1<br>
			<strong>Email: </strong>cheung.jen@husky.neu.edu<br></p>
		</div>
	</div>

	<div id="lightJenny" class="white_content">
		<div class='light-side'>
			<img class='light-img' src='<?php echo base_url(); ?>public/palpics/jenny.jpg'>
			<p class='light-name'>Jenny Cheung</p>
			<p class='email'>cheung.jen@husky.neu.edu<br></p>
                        <p class='advice'><i>"Go to office hours and talk to your TAs/Professors! It is important to make good connections with people! Network early! You might need them for a recommendation in the future!"</i></p>
		</div>
		<div class='light-info'>
			<p class='light-headers'> Motivations </p>
			<p class='light-desc'> I really want to help underclassmen feel welcome and help them adjust to the environment of college. I was lost in my freshman year and I have found a very supportive and inspiring community to be apart of. I want to help those that are probably going through the same things as I was. </p>
			<p class='light-headers'> Topics for Advice </p>
                        <p class='light-desc'> Undeclared major, choosing classes, living on or off campus tips, getting involved on campus, good eats around Boston, lifehacks/life advice </p>
			<p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>Bose Corporation:&nbsp;</strong><i>Product Safety Co-op</i></p></li>
                                <li><p class='light-exp'><strong>Pavlok:&nbsp;</strong><i>Hardware Intern</i></p></li>
                                <li><p class='light-exp'><strong>SASE:&nbsp;</strong><i>2016 Northeast Regional Conference Finance Chair</i></p></li>
                        </ul>
                        <p class='light-headers'> Campus Involvment </p>
                        <p class='light-desc'>IEE, AASIA, SASE Corporate Relations 2016</p>
			<p class='light-headers'> Fun Facts! </p>
			<p class='light-desc'> I like eating good food with good company, taking photos of people and things (still learning how to use my camera), jamming out to music, sleeping, being active (at times), catching up on shows, Fun fact: I learned how to swim in the past but then forgot and panic every time I am in a deep body of water. </p>
		</div> 
  	</div>

	<div class="profile" data-id="Vandana" data-category="CS F 2018 1" onclick="document.getElementById('lightVandana').style.display='block'; document.getElementById('fade').style.display='block'">
                <div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/vandana.jpg'></div><br>
                <p class='name'><strong>Vandana Karan</strong><br></p>
                        <p class='toTheLeft'><strong>Major: </strong>Computer Science and Finance<br>
                        <strong>Minor: </strong>None<br>
                        <strong>Graduation Year: </strong>2018<br>
                        <strong>Co-ops: </strong>1<br>
                        <strong>Email: </strong>karan.v@husky.neu.edu<br></p>
                </div>
        </div>
	<div id="lightVandana" class="white_content">
                <div class='light-side'>
                        <img class='light-img' src='<?php echo base_url(); ?>public/palpics/vandana.jpg'>
                        <p class='light-name'>Vandana Karan</p>
                        <p class='email'>karan.v@husky.neu.edu<br></p>
                        <p class='advice'><i>"Be open-minded, and give every experience a fighting chance! The more proactive you are, the fewer regrets you'll have :)"</i></p>
                </div>
                <div class='light-info'>
                        <p class='light-headers'> Motivations </p>
                        <p class='light-desc'>When I came into Northeastern as freshman, I felt very behind in my major, as lots of my peers had previous experience in computer science. Despite these insecurities, I was able to push through and become even nerdier and passionate about computer science! I do however wish that I'd had some advice or a mentor to motivate me through my first year. I'd love to give that experience to someone else!</p>
			<p class='light-headers'> Topics for Advice </p>
                        <p class='light-desc'>Co-op, technical interviews, personal projects, GitHub, Greek life, community involvement, general life advice (ie. time management, planning, cooking, social life, budgeting, mental health)</p>
			<p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>AppNeta:&nbsp;</strong><i>Software Engineering Co-op</i></p></li>
                                <li><p class='light-exp'><strong>Walgreens:&nbsp;</strong><i>IT Planning & Analysis Intern</i></p></li>
                                <li><p class='light-exp'><strong>SetuServ:&nbsp;</strong><i>Sales/Marketing Intern</i></p></li>
                        </ul>
                        <p class='light-headers'> Campus Involvment </p>
                        <p class='light-desc'>VP of Iota Chapter of Delta Phi Omega, Incorporated, Speakers/Workshops Chair SASE Northeaster Regional Conference 2015, Secretary/Webmaster of SASE 2015, AASIA Mentor 2015</p>
                        <p class='light-headers'> Fun Facts! </p>
                	<p class='light-desc'>Biking, Exploring Boston, Cooking, Mental Health awareness, Women's Empowerment, Reddit, Artistic Expression
Fun Fact: I have a senior diploma in Kathak! (North-Indian classical dance)</p>
		</div>
        </div>

	<div class="profile" data-id="Jonah" data-category="CS artmin 2019 1" onclick="document.getElementById('lightJonah').style.display='block'; document.getElementById('fade').style.display='block'">
                <div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/jonah.jpg'></div><br>
                <p class='name'><strong>Jonah Min</strong><br></p>
                        <p class='toTheLeft'><strong>Major: </strong>Computer Science<br>
                        <strong>Minor: </strong>Art<br>
                        <strong>Graduation Year: </strong>2019<br>
                        <strong>Co-ops: </strong>None<br>
                        <strong>Email: </strong>min.j@husky.neu.edu<br></p>
                </div>
        </div>

	<div id="lightJonah" class="jonahs_special_white_content">
                <div class='light-side'>
                        <img class='light-img' src='<?php echo base_url(); ?>public/palpics/waifu.gif'>
                        <p class='light-name'>Jonah Min</p>
			<p class='email'>min.jo@husky.neu.edu<br></p>
                        <p class='advice'><i>"We lie loudest when we lie to ourselves" -Eric Hoffer</i></p>
                </div>
                <div class='light-info'>
                        <p class='light-headers'> Motivations </p>
                        <p class='light-desc'> I guess I've always felt kind of left out as a freshman. Whenever I'd go to different clubs I didn't really know how to conduct myself, and so I never really had any kind of mentor to talk to or learn from. That was until I found SASE, and everyone here made me feel like I was part of a family of people who are just like me. I started to feel like I belonged. I just want to help out people who might have felt like me :) </p>
                	<p class='light-headers'> Topics for Advice </p>
                        <p class='light-desc'> Majors, Classes, getting involved in clubs, travelling around Boston, speaking up </p>
		        <p class='light-headers'> Work Experience </p>
                        <ul>
                        		<li><p class='light-exp'><strong>Rue La La:&nbsp;</strong><i>Full Stack Engineer</i></p></li>
                                <li><p class='light-exp'><strong>College of Computer and Information Science:&nbsp;</strong><i>Junior Sys Admin</i></p></li>
                                <li><p class='light-exp'><strong>University of Pennsylvania:&nbsp;</strong><i>Student Research Assistant</i></p></li>
                        </ul>
                        <p class='light-headers'> Campus Involvment </p>
                        <p class='light-desc'>Upperclassmen Rep of SASE 2016</p>
			<p class='light-headers'> Fun Facts! </p>
                        <p class='light-desc'> I made this website so I have too much power. I am upperclassmen rep for SASE, I have visited Korea every other year of my life, I can do a few different flips (though I haven't practiced in a while). I love drawing, cooking, and playing video games (any Osu! Players out there??)</p>
                </div>
        </div>

  	<div id='fade' class='black_overlay'></div>

	<div class="profile" data-id="Joanne" data-category="EE CE Mathmin 2019 1" onclick="document.getElementById('lightJoanne').style.display='block'; document.getElementById('fade').style.display='block'">
                <div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/joanne.jpg'></div><br>
                <p class='name'><strong>Joanne Truong</strong><br></p>
                        <p class='toTheLeft'><strong>Major: </strong>Electrical and Computer Engineering<br>
                        <strong>Minor: </strong>Mathematics<br>
                        <strong>Graduation Year: </strong>2019<br>
                        <strong>Co-ops: </strong>1<br>
                        <strong>Email: </strong>truong.j@husky.neu.edu<br></p>
                </div>
        </div>

	<div id="lightJoanne" class="white_content">
                <div class='light-side'>
                        <img class='light-img' src='<?php echo base_url(); ?>public/palpics/joanne.jpg'>
                        <p class='light-name'>Jonah Min</p>
			<p class='email'>min.jo@husky.neu.edu<br></p>
                        <p class='advice'><i>Staying motivated and hard work is the best way to succeed. Even if things seem difficult now, nothing is impossible if you work hard enough. </i></p>
                </div>
                <div class='light-info'>
                        <p class='light-headers'> Motivations </p>
                        <p class='light-desc'> Looking back at my past 3 years at Northeastern, I realized how much I've grown. This growth was thanks to SASE and the amazing friends I've met along the way. Although I've never formally had a mentor, I've had upperclassmen friends who have generously provided me with their wisdom, and have helped me get to where I am today. I want to pass on what I learned to new members, and help them grow into leaders :D  </p>
                	<p class='light-headers'> Topics for Advice </p>
                        <p class='light-desc'> Research (I've done an REU & held a research position for a professor at Northeastern), co-op (even though my co-op experience wasn't the greatest, I now know what questions to ask during the interview/ would give advice on things I wish I had done), balancing school-clubs-eboard-work-research </p>
		        <p class='light-headers'> Work Experience </p>
                        <ul>
                                <li><p class='light-exp'><strong>Boston Engineering:&nbsp;</strong><i>Electrical Engineering Intern</i></p></li>
                                <li><p class='light-exp'><strong>Worcester Polytechnic Institute:&nbsp;</strong><i>Research Assistant</i></p></li>
                        </ul>
                        <p class='light-headers'> Campus Involvment </p>
                        <p class='light-desc'>Eta Kappa Nu Honor Society, IEEE, Society of Women Engineers</p>
			<p class='light-headers'> Fun Facts! </p>
                        <p class='light-desc'> :D I've eaten a whole pizza pie by myself in one sitting, and I casually eat pints of ice cream so hmu if you wanna eat </p>
                </div>
        </div>

  	<div id='fade' class='black_overlay'></div>

</form>
<!--<div style='position: absolute' id="gooooooosh">
	<p class='secret'> omg uh excuse me, this is for like guy talk only, gooooosh<br>
			Lindsey, you best talk to the council because like, you're totally not respecting the guy talk<br>
			- Cedric
 </p>
</div-->

</body>
