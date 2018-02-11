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
</head>
	<script>
		const pals = [
			{
				name: 'Jemin (Jay) Park',
				major: 'CE CS',
				grad: 2021,
				co-ops: 0,
				email: 'park.jem@husky.neu.edu',
				motivations: 'During my freshmen year, I had many upperclassmen mentors and friends helping me grow as they guided me through an unfamiliar environment. I would like to give back to the community by becoming a mentor myself and hopefully becoming someone who could help with the growth of an underclassman.',
				topics: 'Adjusting into an unfamiliar environment, public speaking, becoming part of PAAC, and life in general (lul).',
				work-exp: [
					{
						company: 'CrucialTec Vina Co., Ltd.',
						role: 'Intern',
					},
					{
						company: 'Aeria Games',
						role: 'Online Administrator',
					},
					{
						company: 'Greenville Fire Department',
						role: 'Volunteer Firefighter',
					},
					{
						company: 'Hanoi, Vietnam',
						role: 'English Tutor',
					}
				],
				involvment: 'Involvement Chair of SASE 2017, PAAC Rep 2017, Mentor in Asian American Students in Action 2017, Asian Student Union, Chinese Student Association, Vietnamese Student Association',
				fun: 'I hate icebreakers (especially the "FUN FACTS!" part).'
			}
		];

		for (let i = 0; i < pals.length; i++) {
			console.log(pals[i]);
		}
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
				&nbsp;&nbsp;<label class='label'>
	          <input type="checkbox" name="fl-colour" value="BN" id="green" />Behavioral Neuroscience</label>
	        <br>
	      &nbsp;&nbsp;<label class='label'>
	          <input type="checkbox" name="fl-colour" value="CivE" id="green" />Civil Engineer</label>
	        <br>
	      &nbsp;&nbsp;<label class='label'>
	          <input type="checkbox" name="fl-colour" value="Eman" id="green" />Engineering Management</label>
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
		    &nbsp;&nbsp;<label class='label'>
		          <input type="checkbox" name="fl-colour" value="Smin" id="Computer Science" />Spanish</label>
		    <br>
		    &nbsp;&nbsp;<label class='label'>
		          <input type="checkbox" name="fl-colour" value="AEmin" id="Computer Science" />Architectural Engineering</label>
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
	 	    <br>
	 	   &nbsp;&nbsp;<label class='label'>
	 	    <input type="checkbox" name="fl-size" value="2021" id="giant" />2021</label>
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
			</form>
		</div>
	</div>

	<div id='pals-container'>
		
	</div>

	<script>
		const pals = [
			{
				firstName: 'Jemin',
				name: 'Jemin (Jay) Park',
				major: 'CE CS',
				majorText: 'Computer Engineering/Computer Science',
				minor: '',
				minorText: 'None',
				picture: 'jemin.jpg',
				grad: 2021,
				coops: 0,
				email: 'park.jem@husky.neu.edu',
				motivations: 'During my freshmen year, I had many upperclassmen mentors and friends helping me grow as they guided me through an unfamiliar environment. I would like to give back to the community by becoming a mentor myself and hopefully becoming someone who could help with the growth of an underclassman.',
				topics: 'Adjusting into an unfamiliar environment, public speaking, becoming part of PAAC, and life in general (lul).',
				workExp: [
					{
						company: 'CrucialTec Vina Co., Ltd.',
						role: 'Intern',
					},
					{
						company: 'Aeria Games',
						role: 'Online Administrator',
					},
					{
						company: 'Greenville Fire Department',
						role: 'Volunteer Firefighter',
					},
					{
						company: 'Hanoi, Vietnam',
						role: 'English Tutor',
					}
				],
				involvment: 'Involvement Chair of SASE 2017, PAAC Rep 2017, Mentor in Asian American Students in Action 2017, Asian Student Union, Chinese Student Association, Vietnamese Student Association',
				fun: 'I hate icebreakers (especially the "FUN FACTS!" part).'
			},
			{
				firstName: 'Roshni',
				name: 'Roshni Thyagrajan',
				major: 'BN',
				majorText: 'Behavioral Neuroscience',
				minor: 'Spanish',
				minorText: 'Smin',
				picture: 'roshni.jpg',
				grad: 2020,
				coops: 1,
				email: 'thyagrajan.r@husky.neu.edu',
				motivations: 'My life and career expectations have changed so much since I came to college, and I want to make sure other students know that that\'s okay and normal. What\'s important is that you\'re willing to invest time and energy into finding out what you want to do, and I would love to help on that journey.',
				topics: 'Co-op, Research, Asian-American community, Pre-med',
				workExp: [
					{
						company: 'Boston Children\'s Hospital',
						role: 'Research Assistant (Genetics)',
					},
					{
						company: 'Massachussets Eye and Ear',
						role: 'Volunteer',
					},
					{
						company: 'Beth Israel',
						role: 'Data Analysis research assistant',
					},
				],
				involvment: 'UTSAV, SASE, NU TELLS, Colleges Against Cancer/Relay For Life',
				fun: 'My number one style inspiration is my dad.'
			},
			{
				firstName: 'Jason',
				name: 'Jason Chin',
				major: 'CivE',
				majorText: 'Civil Engineering',
				minor: '',
				minorText: 'None',
				picture: 'jason.jpg',
				grad: 2020,
				coops: 1,
				email: 'chin.ja@husky.neu.edu',
				motivations: 'I never had a direct mentor that I could go to for any class or college related issues, and I think that I missed out on a big opportunity. However, I\'d love to share my experiences with underclassman and help them in their growth and point them in the right direction whenever they need it.',
				topics: 'Organization, trying new things, Dialogues of Civilization, Working off campus',
				workExp: [
					{
						company: 'Howard Stein Hudson Associates',
						role: 'Co-op',
					},
				],
				involvment: 'SASE, American Society of Civil Engineers (ASCE), Northeastern Recreational Climbing Team',
				fun: 'I love rock climbing, volleyball, and honestly any sports (playing and watching) I\'m an Eagle Scout and love to go backpacking/hiking! I once got sat four rows behind home plate at a Red Soxs game for free just by asking for free tickets outside Fenway Park!'
			},
			{
				firstName: 'Matthew',
				name: 'Matthew Lau',
				major: 'ChemE',
				majorText: 'Chemical Engineering',
				minor: '',
				minorText: 'None',
				picture: 'matthew.jpg',
				grad: 2019,
				coops: 2,
				email: 'lau.m@husky.neu.edu',
				motivations: 'I\'m in my 4th year here at Northeastern, and I think I\'ve figured out enough about student life to be a resource and guide for new students here. As an underclassman, I had the opportunity to ask upperclassmen for advice about school, and I would like to help out the current underclassmen in the same way.',
				topics: 'Co-op/Global co-ops, Classes, Keeping Balance in Life :)',
				workExp: [
					{
						company: 'AMAG Pharmaceuticals',
						role: 'Chemical Engineering Co-op, QA Intern',
					},
					{
						company: 'Academia Sinica',
						role: 'Research Intern',
					},
				],
				involvment: 'SASE, Club Badminton',
				fun: 'I like badminton and exercise! Cooking and eating is also awesome and roast duck is probably my favorite food.'
			},
			{
				firstName: 'Andrew',
				name: 'Andrew Tu',
				major: 'CE',
				majorText: 'Computer Engineering',
				minor: 'CSmin',
				minorText: 'Computer Science',
				picture: 'andrew.jpg',
				grad: 2020,
				coops: 1,
				email: 'tu.a@husky.neu.edu',
				motivations: 'Learning and exploring new things in all walks of life!',
				topics: 'Undergraduate Research, Programming, Public Speaking/Interviewing',
				workExp: [
					{
						company: 'MIT Lincoln Labs',
						role: 'Co-op',
					},
					{
						company: '3 Campus Labs',
						role: 'Research',
					},
				],
				involvment: 'Undergraduate Research, SASE, Toastmasters',
				fun: 'I am a competitive ballroom dancer'
			},
			{
				firstName: 'Crystal',
				name: 'Crystal Rhee',
				major: 'CS F',
				majorText: 'Computer Science and Finance',
				minor: '',
				minorText: 'None',
				picture: 'crystal.jpg',
				grad: 2020,
				coops: 1,
				email: 'rhee.s@husky.neu.edu',
				motivations: 'I will always try to be the best version of myself and to make my parents proud.',
				topics: 'Career, computer science, campus involvement',
				workExp: [
					{
						company: 'MullenLowe',
						role: 'Development Co-op',
					},
					{
						company: 'Office of Provost',
						role: 'Digital Content Specialist',
					},
					{
						company: 'NEITPI',
						role: 'Office Assistant',
					},
					{
						company: 'D\'Amore McKim School of Business',
						role: 'Operations Assitant',
					},
					{
						company: 'Snell Library',
						role: 'Digitization Assistant',
					},
					{
						company: 'Qalya Labs',
						role: 'Start-up Intern',
					},
				],
				involvment: 'Revolve Dance Crew, Asian Student Union, Chinese Student Association, Society of Asian Scientists and Engineers, Symphony Family Group',
				fun: 'I\'m half Korean, half Chinese but only speak Korean fluently.'
			},
			{
				firstName: 'Sean',
				name: 'Sean Yu',
				major: 'CivE',
				majorText: 'B.S. in Civil Engineering',
				minor: 'Mathmin AEmin',
				minorText: 'Math and Architectural Engineering',
				picture: 'sean.jpg',
				grad: 2019,
				coops: 1,
				email: 'yu.sea@husky.neu.edu',
				motivations: 'As a mentor I wish to impart the things I learned at Northeastern so that others don\'t have to make the same mistakes as I did. Also, as an international student I know how tough it is to adapt to living in a totally different environment so I want to help other international students adjust to living in the US.',
				topics: 'Finding Co-op, Civil Engineering Classes, Living in Hong Kong, Adapting to Living in America, Building Industry',
				workExp: [
					{
						company: 'Gormon Richardson Lewis Architects',
						role: 'Building Envelope Technician (Co-op)',
					},
				],
				involvment: 'ASCE, Northeastern University Sustainable Building Organisation, Northeastern Badminton Team, Steel Bridge Competition, previously participated in Race to Zero Student competition',
				fun: 'I come from Hong Kong, I am a UK citizen but I have an American accent.'
			},
			{
				firstName: 'Derek',
				name: 'Derek Tran',
				major: 'ME',
				majorText: 'BS/MS Mechanical Engineering',
				minor: '',
				minorText: 'None',
				picture: 'derek.jpg',
				grad: 2019,
				coops: 2,
				email: 'tran.de@husky.neu.edu',
				motivations: 'I am motivated everyday by how passionate my peers are about what they do, whether it is in a club or towards a hobby that they have. Seeing them invest time into things that they love inspire me to do the same.',
				topics: 'Work hard and take plenty of risks now while you are just starting your college career. Experience all the good and bad things at once. You don\'t want to look back after graduating and regret not doing something. But also don\'t worry if you have to say no to someone.',
				workExp: [
					{
						company: 'Siemens Healthcare',
						role: 'Co-op',
					},
					{
						company: 'Biorad',
						role: 'Co-op',
					},
				],
				involvment: 'I have been a part of many Asian American Organizations on campus from VSA, ASU and KASA. I was heavily involved in dance my first two years. I also was both a mentee and mentor in the Asian American Students in Action (AASIA) peer mentoring program. I also did intramural volleyball for 3 years. I am now the current co-president of SASE, having been with the organization for 4 years now!',
				fun: 'I\'ve been creating a scrapbook of things I did and places I\'ve been to for the past year! I also love polaroids. '
			},
			{
				firstName: 'Emily',
				name: 'Emily Po',
				major: 'HS',
				majorText: 'Health Science (Pre-PA)',
				minor: '',
				minorText: 'None',
				picture: 'emily.jpg',
				grad: 2020,
				coops: 1,
				email: 'po.e@husky.neu.edu',
				motivations: 'I remember how lost I felt when I was a freshman and how I had so many questions to ask, but no one to ask them to. I want to be a resource to anyone who ever needs any help or just someone to talk to. I love being able to help others and meeting new SASEFam :)',
				topics: 'Switching majors, Bioengineering, Physician Assistant(major, classes, pre-reqs, schools), preparing for Co-op, general life advice',
				workExp: [
					{
						company: 'Vertex Pharmaceuticals',
						role: 'Molecular Pharmacology co-op',
					},
					{
						company: 'Northeastern University',
						role: 'Undergraduate Lab Assistant',
					},
				],
				involvment: 'SASE, Pre-PA Society',
				fun: 'I have never been to Taco Bell before!'
			},
			{
				firstName: 'Jenny',
				name: 'Jenny Cheung',
				major: 'CE Eman',
				majorText: 'Health Science (Pre-PA)',
				minor: '',
				minorText: 'None',
				picture: 'jenny.jpg',
				grad: 2019,
				coops: 2,
				email: 'cheung.jene@husky.neu.edu',
				motivations: 'I really want to help underclassmen feel welcome and help them adjust to the environment of college. I was lost in my freshman year and I have found a very supportive and inspiring community to be apart of. I want to help those that are probably going through the same things as I was. If you ever want to reach out to ask about the smallest thing, I am only a message away! Feel free to message me on Facebook, email or whatever :)',
				topics: 'Co-ops, AAC programs, time management, undeclared major, choosing classes, living off campus, general life things',
				workExp: [
					{
						company: 'Bose',
						role: 'Product Safety Co-op',
					},
					{
						company: 'GE Transportation',
						role: 'Embedded Software and Project Management',
					},
				],
				involvment: 'Co-President of SASE, Barkada dance, ASU, VSA, CSA, IEEE',
				fun: 'I like pineapple on pizza.'
			},
		];

		let palsContainer = document.getElementById('pals-container');

		for (let i = 0; i < pals.length; i++) {
			const pal = pals[i];
			let palInfo = `
				<div class="profile" data-id="${pal.firstName}" data-category="${pal.major} ${pal.minor} ${pal.grad} ${pal.coops}" onclick="document.getElementById('light${pal.firstName}').style.display='block'; document.getElementById('fade').style.display='block'">
					<div class='img-div'><img class='circle' src='<?php echo base_url(); ?>public/palpics/${pal.picture}'></div><br>
					<p class='name'><strong>${pal.name}</strong><br></p>
						<p class='toTheLeft'><strong>Major: </strong>${pal.majorText}<br>
						<strong>Minor: </strong>${pal.minorText}<br>
						<strong>Graduation Year: </strong>${pal.grad}<br>
						<strong>Co-ops: </strong>${pal.coops}<br>
						<strong>Email: </strong>${pal.email}<br></p>
					</div>
				</div>

				<div id="light${pal.firstName}" class="white_content">
					<div class='light-side'>
						<div class='image-wrapper'><img class='light-img' src='<?php echo base_url(); ?>public/palpics/${pal.picture}'></div>
						<p class='light-name'>${pal.name}</p>
						<p class='email'>${pal.email}<br></p>
					</div>
					<div class='light-info'>
						<p class='light-headers'> Motivations </p>
						<p class='light-desc'> ${pal.motivations} </p>
						<p class='light-headers'> Topics for Advice </p>
			      <p class='light-desc'> ${pal.topics} </p>
			      <p class='light-headers'> Work Experience </p>
			      <ul>`;

			let work = '';

			for (let j = 0; j < pal.workExp.length; j++) {
				const job = pal.workExp[j];
				work = work + `\n<li><p class='light-exp'><strong>${job.company}:&nbsp;</strong><i>${job.role}</i></p></li>`;
			}

			palInfo = palInfo 
								+ work 
								+ `</ul>
									 <p class='light-headers'> Campus Involvment </p>
			             <p class='light-desc'>${pal.involvment}</p>
									 <p class='light-headers'> Fun Facts! </p>
									 <p class='light-desc'>${pal.fun}</p>
								  </div> 
						    </div>`;

			palsContainer.insertAdjacentHTML('beforeend', palInfo);
		}
	</script>
  <div id='fade' class='black_overlay'></div>
</body>
