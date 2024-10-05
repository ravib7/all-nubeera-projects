<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">

   <title>NubeEra (HRManageralRound.php)</title>
   <link rel="stylesheet" href="../../lib/bootstrap-grid.processed.css">
   <link rel="icon" type="image/png" href="../../img/logo.ico">
   <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css">
   <link rel='stylesheet' href='http://www.microsoft.com/surface/assets/css/fonts/all/fonts.css'>

   <link rel="stylesheet" href="../../styles/style.interviewQnA.css">
   <link rel="stylesheet" href="../../js/searchbox/searchbox.css">

   <script src="../../js/searchbox/searchbox.js"></script>
   <!--START: for Panel-->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <!--END:  for Panel-->

   <!--START: Collapsable-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <!--END: Collapsable-->

   <link rel="stylesheet" href="../../styles/style.processed.css">
   <link rel="stylesheet" href="../../styles/style.footer.css">
   <link rel="stylesheet" href="../../styles/style.nav1.css">
   <link rel="stylesheet" href="../../styles/style.progress.css">
   <link rel="stylesheet" href="../../lib/blog-vendor/bootstrap/css/bootstrap.min.css">

   <style media="screen">
   body {
      padding-top: 56px;
   }

   .size {
      height: 55px;
      width: 55px;
   }

   .size1 {
      height: 300px;
      width: 100%;

   }

   .blockquote1 {
      background-color: #f0f0f0;

   }

   .pad-1 {
      padding-left: 20%;
      padding-right: 20%;
   }
   </style>

   <style>
   table,
   th,
   td {
      border: 1px solid black;
      border-collapse: collapse;
   }

   th,
   td {
      padding: 10px;
   }
   </style>
</head>

<body oncopy="return false" oncut="return false" onpaste="return false">
   <!--<div id="preloader"><?php require '../../templates/preloader.php'; ?></div>-->
   <main class="site-content">

      <!-- ===============================NAVIGATION BAR=========================================== -->
      <?php require '../../templates/folder_navbar.php'; ?>
      <!-- ================================DISPLAY=============================================== -->


      <section>

         <div class="container">

            <!-- Post Content Column -->
            <div class="col-lg-12">

               <!-- Title -->
               <h1 class="mt-4">Python Interview QnA</h1>

               <!-- Author -->
               <center>
                  <h6>
                     by
                     <a href="#">Mujahed</a>
                     Posted on <?php 
                     $timezone =date('d-M-Y'); 
                     echo $timezone
                     ?>
                  </h6>
               </center>
               <!-- Date/Time -->
               <!-- <p>Posted on April Day, year at 00:00 AM</p> -->

               <hr>

               <!-- Preview Image -->
               <!-- <img class="img-fluid rounded size1" style="max-width:60%;" src="../../img/interviews/NGINX_1.jpg" alt=""> -->

               <input type="text" id="myInput" onkeyup="searchTopicsInQuestionNAnswers()"
                  placeholder="Enter Topic..." />

               <!--Start of UL Contents -->
               <ul id="myUL">


                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong> 1) Tell me a little about yourself?</strong> </div><br />
                           <div class="panel-body">
                              <strong>Sample Answer #1</strong><br />
								I am Vishal Pal, a computer graduate from MIT. I like to apply my analytical skills to develop world
								class products in the XYZ domain. When I am not working, I volunteer to NGO’s as it gives me an
								opportunity to serve needy people. I also travel a lot and an active member of XXX travel group or
								club through which I could explore my hobby more.<br />
							    <strong>Sample answer #2</strong><br />
								As a technical project manager, I have more than six years of experience at top Wall Street
								Companies. In recent company, I led the development of an award winning new trading platform. I
								am a person that survives in a fast-paced environment. At moment, I am looking for a chance to apply
								my technical expertize and my creative problem solving skills at an innovative software company like
								this one.<br />
								<strong>Sample Answer #3</strong><br />
								Since last 4-5 years, I am deeply involved with my administrative work. I have always been interested
								and enjoyed working in the computer industry, but I consider myself lucky that I got an opportunity to
								work at different levels like business analyst, programmer and assistant manager. My main strength
								is the ability to maintain a great rapport with the customer and my attention to their details.<br />
								<strong>Sample Answer #4</strong><br />
								I am one of the top graduates of my batch in College. I am known in school as an organizer, having
								held several committees and organizations since my first year. I am a dedicated person who never
								stops working on something until it is perfect. It would be a pleasure for me to discuss how I can be
								such an asset to your company.<br />
								<strong>Tips:</strong><br />
								<ul>
								<li>Try to cover your accomplishment in your answer</li>
								<li>Talk about the work or project that resembles the requirement of the position</li>
								<li>Mention what led you to this point in your career and why job is the perfect match for you</li>
								<li>Don’t narrate anything that is personal</li>
								<li>End your answer by telling them you want the position and why</li>
								<li>Use selective terminology in your answer like problem solving, innovative, fast-paced, creative and so on</li><br />
								</ul>
								<strong>What not to say</strong><br />
								<ul>
									<li>Don’t speak the same thing that is already mention in your resume</li>
									<li>Don’t counter question your interviewer by saying – “What do you want to know?” (Sounds
										Rude)</li>
								</ul>
                           </di>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>2) Why do you want to work in this company?</strong><br />
                           </div>
                           <div class="panel-body">
								<strong>Sample Answer 1:</strong><br />
								I would be proud to work for a company like yours with such a long history of leadership in the
								industry. I have carried out web research and believe that the company’s XYZ products and its future
								projections are very impressive and promising. The XXX team is the team I would take pride to work
								with. A place where my skills or background fits perfectly and can be utilized respectively.<br />
                              <strong>Sample Answer 2:</strong><br />
								Your company made its fortune for making great products that help people do X. But on top of that it
								is the kind of place where I can fit in and excel, so I was thrilled to see you have this opening. Your
								company believes in providing superior service, to which I share the same value and enables me to
								not only fit into your organization but complement the team as well.<br />
								<strong>Sample Answer 3:</strong><br />
								I was delighted to see on your website that your feature employees are talking about how great it is
								to work for your company. These days so many people seem to despise where they work for one
								reason or another. It’s wonderful to see that your employees are proud to talk about how much they
								love their jobs.<br />
								<strong>Sample Answer 4:</strong><br />
								This company is on the list of most admired companies every year. I want to play a role in ensuring
								this company stays on that list. I want to be part of a company that offers no less than quality in
								terms of products and after sales services.<br />
								<strong>Tips</strong>
								<ul>
									<li>Conduct a thorough research of company and company’s top executive before facing interview</li>
									<li>Learn about the company’s vision and how you can contribute to it</li>
									<li>Demonstrate your eagerness to work for the company</li>
									<li>Evidence that you understand the employer’s business</li>
									<li>Mention why you rely on XYZ company for your growth and why it is the best place to utilize
										your skill and experience for the benefit of the company</li>
									<li>Demonstrate your belief in company’s product or service</li>
								</ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong> 3) Do you consider yourself sucessful?</strong><br />
                           </div>
                           <div class="panel-body">
							  <strong>Sample Answer #1</strong><br />
								I feel successful with continuous progress. I find exciting when I am allowed to implement new ideas
								and see its fruition. I would define my success as what I have learned through years and use them
								when circumstances arises or demands.<br />
								<strong>sample answer #2</strong><br />
								I feel successful when I meet my short term as well as the long-term goals. I try to achieve the set
								goals and work hard as much as I can, I try to reach those goals and achieve the desired outcome. I
								want to recognize myself as someone with a progressive attitude who does his best and gives 100%
								to attain goals. To me success is not just my personal achievements but also by the efforts of the
								people around me.<br />
								<strong>sample answer #3</strong><br />
								Success to me is knowing that I am excelling in my performance and filling fulfilled. My work should
								add value to the company and its customers. Knowing that each day I am making the world a better
								place is a success to me. I would define success at work as what I have learned from key job
								assignments experiences.<br />
								<strong>Sample answer #4</strong><br />
								Success to me is spending the majority of the time focused on work that are fulfilling and increasing
								my efficiency to help the organization grow. While I also believe that greater success can be
								achieved while working as a team towards a common goal.<br />
								<strong>Sample answer #5</strong><br />
								Yes. During my ___ year career, I have learned to set goals and to make sure I meet each of it. I make
								sure obstacles do not hinder me from reaching my goals, but instead should inspire me to exert more.
								I believe the new position I am applying for will enable me to reach up higher and be more successful
								<strong>Tips:</strong><br />
							<ul>
								<li>Summarize your career goals</li>
								<li>Don’t say something that sound self-centric</li>
							</ul>
                          </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong> 4) Are you willing to travel?</strong><br />
                           </div>
                           <div class="panel-body">
							Yes. I love traveling. Adjusting in new places and meeting new people would be a delightful
							experience for me.
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>5) What are your salary expectations? ?</strong><br />
                           </div>
                           <div class="panel-body">
							As of now, I haven’t thought much about it. I’m more focused on learning the requirements for this
							position that I am applying for.	
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>6) What would you consider your greatest strengths & weakness?</strong>
                           </div>
                           <div class="panel-body">
							<strong>Sample answer #1</strong><br /><br />
							My strength is my ability to convert negative work environment into a positive and at the same time,
							developing a supportive team. I am also capable of keeping many projects on track and ensuring
							deadlines are met. As far as my weakness is concerned I get impatient sometimes in order to get
							everything done very quickly. To tackle the problem, I am trying to re-consider the to-do list and
							prioritize the tasks.<br />
							<strong>Sample answer #2</strong><br /><br />
							I am very comfortable working with a different group of people. My strength is my analytical and
							planning skills, developed over the years, help me to complete my work before the deadline. I am a
							little bit nervous while speaking in a group, but I have given good number of paper presentation to
							overcome this.
							<strong>Sample answer #3</strong><br />
							I am efficient in a number of programming languages including HTML, C++, Java and AppleScript. I
							have generated over 100% excess revenue for two separate companies through cost cutting
							programming efficiency, and I have leadership experience with a team of five IT professionals working
							on some of the popular iPhone apps online. As far as weakness is concerned I have a tendency to
							remain quiet in meetings, but I am working on speaking up when I feel I have ideas to share.<br />
							<strong>Sample answer #4</strong><br />
							I’m a highly motivated person. I don’t stop until I get things done. I value other people’s time and
							company’s resources. I work to become an asset, not a liability.
							People say I sometimes act too much as a perfectionist. To counter this, I attended seminars that
							teach me how to manage myself well.<br />
							<strong>Tips:</strong>
							<ul>
								<li>Focus mostly on strengths</li>
								<li>Show the interviewer how you are putting effort to overcome the weakness</li>
								<li>Mention about your real weakness but do mention about how you are going to fix it</li>
								<li>Make sure your strength and weakness don’t contradict each other</li>
								<li>Research well about the position you are applying for and identify the area where you can
									apply your strength</li>
								<li>Choose a weakness that is acceptable for the job in hand</li>
								<li>Don’t confuse interests with strength or dislikes with weakness</li>
							</ul>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li>
                     <a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong> 7) What motivates you? </strong>
                           </div>
                           <div class="panel-body">
						   <strong>Sample Answer #1</strong><br />
						    I am very result-oriented person; my primary motivation is to achieve the desired end result. While I
							enjoy working on the project of my own, I am particularly motivated by the buzz of working in a team.
							It’s very exciting working closely with others, who share the same common goal. I also like to take on
							the challenge, and rise to that challenge as part of a concerted team effort.
							<strong>Sample Answer #2</strong><br />
							Primarily, my ability to work hard and delivering result motivates me. But subsequent recognition of
							my efforts gives me the encouragement for my next efforts.
							<strong>Sample Answer #3</strong><br />
							Responsibility towards work motivates me the most and my aim within any company is to move up to
							greater levels of responsibility to achieve each goal with better responsibilities.
							<strong>Sample Answer #4</strong><br />
							Many things motivate me. My goal to be the best of what I can be often motivates me to go beyond
							my own expectations. When I see myself being productive everyday, it motivates me to continue.
							<strong>Tips:</strong><br />
						<ul>
							<li>Sometimes, the best solution is to be honest- you can say money is your motivational factor,
								but it should be your last option</li>
							<li>Mention things like Job satisfaction, working towards a goal, contributing to a team effort or
								developing your skills- provide a specific example that supports your response<li>
							<li>Excitement for new challenges</li>
							<li>Quest for personal development</li><br />
						</ul>
							<strong>What not to say:</strong><br />
						<ul><li>Do not mention that you are motivated by bragging rights, material things or fear of being
								disciplined</li>
                           </div>
                        </div>
                     </a>
                  </li>

                  <li>
                     <a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>8) Tell me about your dream job.</strong>
                           </div>
                           <div class="panel-body">
								The only dream job I’ve always had was a job that keeps me busy, a job wherein I get to contribute to
								the company’success.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>9)Why did you leave your last job?</strong>
                           </div>
                           <div class="panel-body">
								I left my previous job because I feel I want to do more, to get hold of a greater opportunity to serve.		
                           </div>
                        </div>
                     </a>
                  </li>

                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>Q10) What experience do you have in this field? </strong>
                           </div>
                           <div class="panel-body">
                            I have created several systems that are still in used to this day. Some of the systems I’m proud
							include [mention those remarkable ones] 
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>Q11) 12) What do co-workers say about you?</strong>
                           </div>
                           <div class="panel-body">
							My co-worker [name] at [company] never gets tired of telling other people how brilliant I am when it
							comes to [specific task].		
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>Q12) Why should we hire you?</strong>
                           </div>
                           <div class="panel-body">
                            <strong>Sample Answer 1:</strong><br />  
                            In my XXX years of experience as a manager, I have build-up a solid motivational and team-working
							skills. I was awarded twice as the manager-of-the-year for my excellent methodologies for motivating
							employees to encounter challenges and meeting deadlines. If hired, I will carry forward this ability of
							leadership and strategies for achieving profit gains to this position.<br />
							<strong>Sample Answer 2:<strong><br />
							The subjects I chose while working for my degree in XXX subject have prepared me for this particular
							post. Also, my two-year experience working with company X has given me the platform to master the
							skills that I needed to deliver for this position. It seems as if I was prepared all my life to land this job.<br />
							<strong>Sample Answer 3:</strong><br />
							For this particular job, I have the perfect combination of skills and experience that is required. I also
							bring the experience of strong analytical and problem-solving skills that I have gained while working
							with other companies. My dedication to excellent work standards will add value to the team and the
							company.<br />
							<strong>Sample Answer 4:<strong><br />
							I am quite aware of the company’s mission of acquiring the largest consumer base in the area and to
							become the front-runner in supplier’s or provider’s community. My domain knowledge and hold over
							the customer base can make a big contribution towards this. I would really enjoy this challenge of
							growing this business bigger.<br />
							<strong>Sample Answer 5:</strong><br />
							As I have said earlier, my years of experience in this field is something that can truly contribute to this
							company’s success. My sense of dedication in every task that I handle is definitely a big plus. I believe
							my skills and work attitude measures up to your company standards.<br />
							<strong>Tips</strong><br />
						<ul>
							<li>Emphasize on your uniqueness but keep it concise</li>
							<li>Highlight your strength, skills, and your accomplishments</li>
							<li>Give an example that describes you as a quick learner</li>
							<li>State or provide some evidence that shows how you contributed to the growth of the previous
								company in terms of revenue, goodwill, and brand<br />
							<li>Include your research you made on the company- for a smaller company you can say- your
								company is open to new innovative ideas</li>
						</ul>
							<strong>What not to say<strong><br />
						<ul>
							<li>Try to avoid saying- I need a job, money or this place is close to where I live</li>
							<li>Focus on what can you do for the company rather than what they can do for you</li>
							<li>NEVER DO THIS- comparing your skills to others. The natural instinct to this question is we
								usually start comparing our skills to others, when this question is put through.</li>
						</ul>
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>Q13) 14) Are you a team player?</strong><br />
                           </div>
                           <div class="panel-body">
								Yes, definitely. While I will deny the fact that I can work independently with minimal supervision, I’m
								also one companion every leader would ever wanted to be in his team. Whatever task is assigned to
								me, I make sure it meets and exceeds what is expected of me. I also make it a point to reach out to
								teammates whenever needed.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>14) What is your philosophy towards work?</strong>
                           </div>
                           <div class="panel-body">
								I have only one philosophy when it comes to work: every piece of work, regardless of size, has to be
								done on time and in the right manner. 
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>15)What have you learned from mistakes on the job?</strong>
                           </div>
                           <div class="panel-body">
								I learned that without proper coordination, even the simplest task could cause problems in a project. I
								had this problem during my first job. From that time on, I made sure every I thing follows every detail
								and coordination.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>16)Describe your management style.</strong>
                           </div>
                           <div class="panel-body">
								Basically, my management style comes with promptness and flexibility. To make sure goals are
								achieved, I religiously study and make plans down to the smallest detail. While I do implement a strict
								sense of being time bounded, I also add reasonable allowances and make room for contingencies.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>17) How would you know you were successful on this job?</strong>
                           </div>
                           <div class="panel-body">
								Being successful means goals that are set are met. Being successful also means standards are not
								only reach, but also even exceeded wherever possible.	
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>18) Are you willing to work overtime? Nights? Weekends? </strong>
                           </div>
                           <div class="panel-body">
								I understand that being asked to work for an extended number of hours comes with a good reason in
								the first place, so I’m ok with it. It an extra effort means something for the company, I’ll be happy to
								do it.	
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>19) What will you do if you don’t get this position?</strong>
                           </div>
                           <div class="panel-body">
								I have high hopes that I will be hired. In case it turns the other way around, I would have to move on
								and search for another job.
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>20)What have you done to improve your knowledge in the last year?</strong>
                           </div>
                           <div class="panel-body">
								I have attended in several self-improvement, time management and personality development
								seminars. I have also participated in training workshops related to [industry].
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>21) How you would be an asset to this company?</strong>
                           </div>
                           <div class="panel-body">
								My skills in […] are outstanding. I have earned a lot of awards and certifications from my past
								employers. As an employee, I handle pressure with ease and can work with minimal supervision.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>22)How long would you expect to work for us in case you are hired?</strong>
                           </div>
                           <div class="panel-body">
								As much as possible I would like to be in this company for a long time. For as long as management
								sees me as an asset, I am willing to stay.
                           </div>
                        </div>
                     </a>
                  </li>
				   <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>23) Describe your ability to work under pressure.</strong>
                           </div>
                           <div class="panel-body">
								I understand the nature of this position that I am applying for quite well, along with the pressure that
								comes with it. Being under pressure doesn’t discourage me, it motivates me more.	
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>24) Tell me about a problem you had with a supervisor.</strong>
                           </div>
                           <div class="panel-body">
								I’m sorry but I can’t recall any instance when I had such a problem with a supervisor.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>25) Why do you think you would do well at this job?</strong>
                           </div>
                           <div class="panel-body">
								Because, I love this job. I feel very confident of myself and my ability to delivery nothing short of
								quality output. My years of experience helped me develop these skills.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>26) What irritates you about co-workers?</strong>
                           </div>
                           <div class="panel-body">
								I always get along fine with my co-workers. I tend to be open minded and very considerate.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>27) Do your skills match this job or another job more closely?</strong>
                           </div>
                           <div class="panel-body">
								I feel my skills are best fit for this job.
                           </div>
                        </div>
                     </a>
                  </li>
				   <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>28) What has disappointed you about a job?</strong>
                           </div>
                           <div class="panel-body">
								I once felt that I was not being given enough challenges to work on. I was a bit disappointed because I
								was so eager to go for more.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>29) If you were hiring a person for this job, what would you look for?</strong>
                           </div>
                           <div class="panel-body">
								I would look into two essential things: the ability to do the job right and the proper attitude to do it.
								Skills without the right attitude will not contribute to a productive output.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>30) What role do you tend to play in a team?</strong>
                           </div>
                           <div class="panel-body">
								I tend to be versatile when it comes to being a team player. I can act as a leader, an assistant, a
								communicator, a secretary, whatever role that will ensure the success of the team. That’s because
								understanding the different roles will allow each player to take on the roll of the other in times of
								need.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>31) What was the most difficult decision for you made?</strong>
                           </div>
                           <div class="panel-body">
								It was a time when I had to choose between joining a group of employees protesting some issues in
								the company, and staying away from the issue. I ended up being a mediator between the employees
								and our immediate supervisor, and I was glad I made that decision because it all ended well and
								without further conflicts in the work place.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>32) Are you willing to make sacrifices for this company?</strong>
                           </div>
                           <div class="panel-body">
								I would be willing to do that to the best of my ability. I can manage personal matters on my own
								without causing conflicts when management needs me most. However, I will not comprise on my
								values.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>33) What qualities do you look for in a boss?</strong>                              <strong>33) </strong>
                           </div>
                           <div class="panel-body">
								I look into my boss as a person who can easily relate with me, can make firm decisions, and is
								transparent. A boss with a sense of humor would also be a delightful idea.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>34) Are you applying in other companies as well?</strong>
                           </div>
                           <div class="panel-body">
								Yes. I have submitted my applications in some of the best companies like [….]. Above all, my priority
								and hope is that I be able to land a job in your company.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>35) Do you know anyone who works in our company?</strong>
                           </div>
                           <div class="panel-body">
								No. I found your ads in a popular job posting website.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>36) How do you propose to compensate for your lack of experience?</strong>
                           </div>
                           <div class="panel-body">
								I am a quick learner. Every time there is something new to me, I take time to study it at the soonest
								time.	
                           </div>
                        </div>
                     </a>
                  </li>
                  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>37) Have you ever worked in a job that you hated?</strong>
                           </div>
                           <div class="panel-body">
								Not exactly hated. I once had a job that does not exactly match my qualification. Nevertheless, I was
								glad I took the job because it was an opportunity to learn something new and added to my list of
								experience.
                           </div>
                        </div>
                     </a>
                  </li>
				   <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>38) What would your previous supervisor say your best point is?</strong>
                           </div>
                           <div class="panel-body">
								Some of my strongest points at work are being hardworking, patient and a quick learner.
                           </div>
                        </div>
                     </a>
                  </li>
				   <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>39) What is the most difficult thing about working with you?</strong>
                           </div>
                           <div class="panel-body">
								My co-workers often say I’m too serious about my work. However, I have attended some personality
								enhancing seminars to blend better with co-leagues. 
                           </div>
                        </div>
                     </a>
                  </li>
				   <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>40) What suggestion/s have you made in your previous employment that was
										implemented?</strong>
                           </div>
                           <div class="panel-body">
								I once suggested that management and staff should have more regular meetings instead of quarterly
								meetings. I was happy that management took note of this and even commended me for making a
								good initiative. 
                           </div>
                        </div>
                     </a>
                  </li>
				   <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>41) Would you rather be liked or feared?</strong>
                           </div>
                           <div class="panel-body">
								I would like to be liked, but more importantly, I would prefer to be respected. Being feared does not
								necessarily command respect.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>42) How do you cope with stress?</strong>
                           </div>
                           <div class="panel-body">
								I pause for a few minutes, look out into the window. Brief pauses in enough to get me charged again. I
								can manage stress well enough and does not decrease my productivity level.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>43) Would you rather work for money or job satisfaction?</strong>
                           </div>
                           <div class="panel-body">
								Job satisfaction is more important for me. Working just for the money may not be fulfilling if I don’t
								like the job in the first place. Job satisfaction makes me stay productive; money would naturally come
								along well.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>44) Describe your work ethics.</strong>
                           </div>
                           <div class="panel-body">
								Always give your best in every job, if not, don’t do it at all.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>45) What was your biggest challenge with your previous boss?</strong>
                           </div>
                           <div class="panel-body">
								My previous boss was very strict when it came to deadlines and output. It was a challenge for me to
								meet every expectation he made. It was also a good learning experience for me because it only made
								me better at what I do.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>46) Do you enjoy working as part of a team?</strong>
                           </div>
                           <div class="panel-body">
								Yes, I enjoy it very much. Being part of a team means you get to contribute for the good of all, while
								at the same time there’s are members who can support you and share more knowledge with you.
                           </div>
                        </div>
                     </a>
                  </li>
				  <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>47) Why should we hire you?</strong>
                           </div>
                           <div class="panel-body">
								Because I believe my talents and skills will definitely be a big contribution to your company’s
								continuing pursuit of excellence. I’m a fast worker and hardworking person who can be very reliable
								asset to this company.
                           </div>
                        </div>
                     </a>
                  </li>
				   <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>48) Has anything ever irritated you about people you’ve worked with?</strong>
                           </div>
                           <div class="panel-body">
								I go along fine with co-workers. When I feel the other guy’s attitude is a negative one, I try my best to
								approach him and talk things over. I always make it a point to stay positive and transparent with
								people around me.
                           </div>
                        </div>
                     </a>
                  </li>
				   <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>49) Do you have any questions for me?</strong>
                           </div>
                           <div class="panel-body">
								I would like to know what are the next step for me. I would also be interested to know more about the
								details of this position I am applying for.
                           </div>
                        </div>
                     </a>
                  </li>
				   <li><a href="#">
                        <div class="panel panel-primary">
                           <div class="panel-heading">
                              <strong>50) Where do you see yourself in 5 years?</strong>
                           </div>
                           <div class="panel-body">
								<strong>Sample Answer 1:</strong><br />
								In five years’ time, I see myself growing along with the team, developing and using new skills to the
								benefit of the organization. I find this position extremely motivating and exciting. I can imagine many
								challenges lying ahead of me, which I am excited to experience. And therefore, I am eager to invest
								my five years time learning all facets of the job towards professional advancement.<br />
								<strong>Sample Answer 2:</strong><br />
								I am flexible with others and enjoy the roles that involves leadership. Although, my initial focus and
								priority would be to involve actively in the job I am applying for, I would very much keen to take
								management or supervisory role in 3-5 years…or less. I enjoy supporting my team members, and
								always try to set a good example for others.<br />
								<strong>Sample Answer 3:<strong><br />
								I am obsessed to be the best at whatever I do. I would like to work in an organization where I’ll have
								the best chances to enhance my skills, doing interesting projects, and work along with team members
								that I can actually learn from. Some of the most innovative peers in the industry work here and that’s
								one of the reasons why I would love to built a career overhere.<br />
								<strong>Tips:</strong><br />
							<ul>
								<li>Analyze a reasonable career path which will flow from the position you are applying</li>
								<li>Try emphasize your interest and goal in your answer</li>
								<li>Talk in terms of responsibilities and achievements</li>
								<li>Try mentioning things that bring value to an organization</li>
								<li>Fresher’s can put forward their plan for next one or two years instead of five or ten years</li>
								<li>Show your long term interest in the position</li>
							</ul>
								<strong>What not to say<strong><br />
							<ul>
								<li>Don’t say this- I am not sure, I am thinking about xyz…</li>
								<li>Don’t portray yourself overly ambitious by saying something like……I want to be CEO in next
									five years</li>
								<li>Don’t say that you wanted to be in the interviewer’s role or I want your job some-day</li>
								<li>Don’t put your personal plan like buying a new car or going for a long tour etc.</li>
							</ul>
                           </div>
                        </div>
                     </a>
                  </li>
                  <!-- All Question Completed -->
               </ul>
           
         <!--END of UL Contents -->
         <!-- Comments Form -->
         <div class="card my-4">
            <h6 class="card-header">Leave a Comment:</h6>
            <div class="card-body">
               <form>
                  <div class="form-group">
                     <textarea class="form-control" rows="3"></textarea>
                  </div>
                  <button type="submit" class="btn-primary">Submit</button>
               </form>
            </div>
         </div>

         <!-- Single Comment -->
         <div class="media mb-4">
            <img class="d-flex mr-3 size rounded-circle" src="../../img/sample.png" alt="">
            <div class="media-body">
               <h6 class="mt-0">Commenter Name</h6>
               Text
            </div>
         </div>

         <div class="media mb-4">
            <img class="d-flex mr-3 size rounded-circle" src="../../img/sample.png" alt="">
            <div class="media-body">
               <h6 class="mt-0">Commenter Name</h6>
               Text
            </div>
         </div>



         </div>

         </div>
         </div>
         
      </section>

      <?php require "../../templates/footer_outer.php" ?>
      <!-- ==================================================Script Section============================================== -->

      <script type="text/javascript" src="../../lib/vanilla-tilt.min.js"></script>
      <!-- ======================================================================================================== -->
      <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>

      <!-- <script type="text/javascript" src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script> -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
      <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
      <!-- ======================================================================================================== -->
      <script src="../../js/main.js"></script>

      <script src="../../js/navmenu.js"></script>


      <script src="../../lib/blog-vendor/jquery/jquery.min.js"></script>
      <script src="../../lib/blog-vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>