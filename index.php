
<!DOCTYPE html>
<html>

<head>
  <title>Nitin rajput - Resume / Personal Portfolio</title>
  <link rel="stylesheet" type="text/css" href="/styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<style>
  /* https://newtodesing.com/ 
v2.0 | 20110126
License: none (public domain)
*/



  /*Load google font*/
  @import url('https://fonts.googleapis.com/css?family=Lato:300,400,700');



  /* Reset Styles */

  html,
  body,
  div,
  span,
  applet,
  object,
  iframe,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6,
  p,
  blockquote,
  pre,
  a,
  abbr,
  acronym,
  address,
  big,
  cite,
  code,
  del,
  dfn,
  em,
  img,
  ins,
  kbd,
  q,
  s,
  samp,
  small,
  strike,
  strong,
  sub,
  sup,
  tt,
  var,
  b,
  u,
  i,
  center,
  dl,
  dt,
  dd,
  ol,
  ul,
  li,
  fieldset,
  form,
  label,
  legend,
  table,
  caption,
  tbody,
  tfoot,
  thead,
  tr,
  th,
  td,
  article,
  aside,
  canvas,
  details,
  embed,
  figure,
  figcaption,
  footer,
  header,
  hgroup,
  menu,
  nav,
  output,
  ruby,
  section,
  summary,
  time,
  mark,
  audio,
  video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
  }

  /* HTML5 display-role reset for older browsers */
  article,
  aside,
  details,
  figcaption,
  figure,
  footer,
  header,
  hgroup,
  menu,
  nav,
  section {
    display: block;
  }

  a {
    text-decoration: none;
    text-transform: none;
    color: #4A90E2;
  }

  .tagcloud {
    display: table
  }

  .tagcloud a {
    background: #fff;
    border: 1px solid #e5e5e5;
    display: inline-block;
    float: left;
    font-size: 13px;
    font-weight: 400;
    margin: 7px 7px 0 0;
    padding: 2px 11px 3px;
  }

  .tagcloud a:hover {
    background: #000;
    border: 1px solid #000;
    color: #FFF;
  }

  body {
    line-height: 1;
    font-family: lato, ubuntu, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen, Ubuntu, Cantarell, Open Sans, Helvetica Neue, sans-serif;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    font-size: 19px;
    background-color: #FEFEFE;
    color: #04143A;
  }

  ol,
  ul {
    list-style: none;
  }

  blockquote,
  q {
    quotes: none;
  }

  blockquote:before,
  blockquote:after,
  q:before,
  q:after {
    content: '';
    content: none;
  }

  table {
    border-collapse: collapse;
    border-spacing: 0;
  }

  p {
    color: #15171a;
    font-size: 17;
    line-height: 31px;
  }

  strong {
    font-weight: 600;
  }

  div,
  footer {
    box-sizing: border-box;
  }

  /* Reset ends */


  /*Hero section*/

  .container {
    max-width: 1100px;
    height: auto;
    margin: 60px auto;
  }

  .hero {
    margin: 50px auto;
    position: relative;
  }

  h1.name {
    font-size: 70px;
    font-weight: 300;
    display: inline-block;
  }

  .job-title {
    vertical-align: top;
    background-color: #D9E7F8;
    color: #4A90E2;
    font-weight: 600;
    margin-top: 5px;
    margin-left: 20px;
    border-radius: 5px;
    display: inline-block;
    padding: 15px 25px;
  }

  b {
    font-weight: bold;
  }

  .email {
    display: block;
    font-size: 24px;
    font-weight: 300;
    color: #81899C;
    margin-top: 10px;
  }

  .lead {
    font-size: 24px;
    font-weight: 300;
    margin-top: 60px;
    line-height: 25px;
  }

  /*hero ends*/

  /*skills & intrests*/

  .sections {
    vertical-align: top;
    display: inline-block;
    width: 49.7%;
    height: 50px;
  }

  .section-title {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 15px;
  }

  .list-card {
    margin: 7px 0;
  }

  .list-card .exp,
  .list-card div {
    display: inline-block;
    vertical-align: top;
  }

  .list-card .exp {
    margin-right: 15px;
    color: #4A90E2;
    font-weight: 600;
    width: 100px;
  }

  .list-card div {
    width: 70%;
  }

  .list-card h3 {
    font-size: 20px;
    font-weight: 600;
    color: #5B6A9A;
    line-height: 26px;
    margin-bottom: 8px;
  }

  .list-card div span {
    font-size: 16px;
    color: #81899C;
    line-height: 22px;
  }

  /*skill and intrests ends*/

  /* Achievements */


  .cards {
    max-width: 1120px;
    display: block;

  }

  .card {
    width: 47.9%;
    height: 200px;
    background-color: #EEF0F7;
    display: inline-block;
    margin: 7px 5px;
    vertical-align: top;
    border-radius: 10px;
    text-align: center;
    padding-top: 50px
  }

  .card-active,
  .card:hover {
    transform: scale(1.02);
    transition: 0.5s;
    background-color: #fff;
    box-shadow: 0px 5px 50px -8px #ddd;
    cursor: pointer;
  }


  .skill-level {
    display: inline-block;
    max-width: 160px;
  }

  .skill-level span {
    font-size: 35px;
    font-weight: 300;
    color: #5B6A9A;
    vertical-align: top;
  }

  .skill-level h2 {
    font-size: 95px;
    font-weight: 300;
    display: inline-block;
    vertical-align: top;
    color: #5B6A9A;
    letter-spacing: -5px;
  }

  .skill-meta2 {



    text-align: left;

    margin-left: 15px;
  }

  .skill-meta2 h3 {
    font-size: 20px;
    font-weight: 800;
    color: #5B6A9A;
    margin-bottom: 5px;
  }

  .skill-meta2 span {
    color: #81899C;
    line-height: 20px;
    font-size: 16px;
  }

  .skill-meta {
    vertical-align: top;
    display: inline-block;
    max-width: 300px;
    text-align: left;
    margin-top: 15px;
    margin-left: 15px;
  }

  .skill-meta h3 {
    font-size: 20px;
    font-weight: 800;
    color: #5B6A9A;
    margin-bottom: 5px;
  }

  .skill-meta span {
    color: #81899C;
    line-height: 20px;
    font-size: 16px;
  }

  /* Achievements ends */



  /* Timeline styles*/


  ol {
    position: relative;
    display: block;
    margin: 100px 0;
    height: 2px;
    background: #EEF0F7;

  }

  ol::before,
  ol::after {
    content: "";
    position: absolute;
    top: -10px;
    display: block;
    width: 0;
    height: 0;
    border-radius: 10px;
    border: 0px solid #31708F;
  }

  ol::before {
    left: -5px;
  }

  ol::after {
    right: -10px;
    border: 0px solid transparent;
    border-right: 0;
    border-left: 20px solid #31708F;
    border-radius: 3px;
  }

  /* ---- Timeline elements ---- */
  li {
    position: relative;
    display: inline-block;
    float: left;
    width: 25%;
    height: 50px;
  }

  li .line {
    position: absolute;
    top: -47px;
    left: 1%;
    font-size: 20px;
    font-weight: 600;
    color: #04143A;
  }

  li .point {
    content: "";
    top: -7px;
    left: 0%;
    display: block;
    width: 8px;
    height: 8px;
    border: 4px solid #fff;
    border-radius: 10px;
    background: #4A90E2;
    position: absolute;
  }

  li .description {
    display: none;
    padding: 10px 0;
    margin-top: 20px;
    position: relative;
    font-weight: normal;
    z-index: 1;
    max-width: 95%;
    font-size: 18px;
    font-weight: 600;
    line-height: 25px;
    color: #5B6A9A;
  }

  .description::before {
    content: '';
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 5px solid #f4f4f4;
    position: absolute;
    top: -5px;
    left: 43%;
  }


  .timeline .date {
    font-size: 14px;
    color: #81899C;
    font-weight: 300;
  }

  /* ---- Hover effects ---- */
  li:hover {
    color: #48A4D2;
  }

  li .description {
    display: block;
  }

  /*timeline ends*/



  /* Media queries*/

  @media(max-width: 1024px) {
    .container {
      padding: 15px;
      margin: 0px auto;
    }

    .cards {
      margin-top: 250px;
    }
  }

  @media(max-width: 768px) {
    .container {
      padding: 15px;
      margin: 0px auto;
    }

    .cards {
      margin-top: 320px;
    }

    .card {
      padding: 15px;
      text-align: left;
    }

    .card h2 {
      font-size: 70px;
    }

    .card,
    .sections {
      width: 100%;
      height: auto;
      margin: 10px 0;
      float: left;
    }

    .timeline {
      border: none;
      background-color: rgba(0, 0, 0, 0);
    }

    .timeline li {
      margin-top: 70px;
      height: 150px;
    }
  }


  @media(max-width: 425px) {
    h1.name {
      font-size: 40px;
    }

    .card,
    .sections {
      width: 100%;
      height: auto;
      margin: 10px 0;
      float: left;
    }

    .timeline {
      display: none;
    }

    .job-title {
      position: absolute;
      font-size: 15px;
      top: -40px;
      right: 20px;
      padding: 10px
    }

    .lead {
      margin-top: 15px;
      font-size: 20px;
      line-height: 28px;
    }

    .container {
      margin: 0px;
      padding: 0 15px;
    }

    footer {
      margin-top: 2050px;
    }
  }


  /* End of all :P*/
</style>

<body>

  <div class="container">
    <div class="hero">
     
            <h1 class="name"><strong> Nitin </strong> Rajput</h1>
      <span class="job-title">Sr. Software Developer</span>
      <span class="email">nitinrajput591@gmail.com, 7701980884,7503786896</span>



      <p class="lead">

      <h2 class="section-title">Professional Profile</h2>
      Software Developer with 5+ years of experience in structuring, developing and implementing interactive
      web applications.<br /><br />
      Proficient in understanding the user requirements and implementing them as per the business needs using
      the latest technologies. <br /><br />
      Good analytical skills, focused on customer satisfaction and ability to translate business requirements
      into technical solutions.
      <br /><br />Work directly with client on a day on day basis to gather requirements, decide estimates and delivery timelines.
            
      </p>
    </div>
  </div>

  <!-- Skills and intrest section -->
  <div class="container">

    <div class="sections">
      <h1 class="section-title" style="font-size:30px;">Skills</h1>

      <div class="list-card">
        <!--<span class="exp"> +7 years</span>-->
        <div>
          <h3>Angular, TypeScript, Angular Material</h3>

        </div>
      </div>
      <div class="list-card">
        <!--<span class="exp"> +7 years</span>-->
        <div>
          <h3>Microsoft Azure, Mapbox, Agile</h3>

        </div>
      </div>

      <div class="list-card">
        <!--<span class="exp">+ 3 years</span>-->
        <div>
           <h3>Javascript, HTML</h3>

        </div>
      </div>



    </div>
    <div class="sections">
      <h2 class="section-title"><br /></h2>

      <div class="list-card">
        <!--<span class="exp">2 years</span>-->
        <div>
          <h3>Node Js, Express, MongoDB, Rest Services</h3>

        </div>
      </div>

      <div class="list-card">
        <!--<span class="exp">6 months</span>-->
        <div>
          <h3>DB Querying, MySql, Ionic framework</h3>

        </div>
      </div>
	   <div class="list-card">
        <!--<span class="exp">6 months</span>-->
        <div>
          <h3>PHP, Codeigniter</h3>

        </div>
      </div>


    </div>
  </div><br />
  <div class="container cards">
    <div class="card">
      <div class="skill-level">
        <span>+</span>
        <h2>15</h2>
      </div>

      <div class="skill-meta">
        <h3>Projects</h3>
        <span>Adapting and creating solutions for customer's needs</span>
      </div>
    </div>
    <div class="card">
      <div class="skill-level">

        <h2>6</h2>
        <span>/10</span>
      </div>

      <div class="skill-meta">
        <h3>Backend Technologies</h3>
        <span>I rate myself 6/10 in Nodejs, PHP, Codeignitor</span>
      </div>
    </div>


    <div class="card">
      <div class="skill-level">
        <h2>6</h2>
        <span>/10</span>
      </div>

      <div class="skill-meta">
        <h3>Frontend Technologies</h3>
        <span>I rate myself 6/10 in Angular, Javascript, Typescript</span>
      </div>
    </div>

    <div class="card">
      <div class="skill-level">
        <h2>6</h2>
        <span>/10</span>
      </div>

      <div class="skill-meta">
        <h3>Database Technologies</h3>
        <span>I rate myself 6/10 in MySql, MongoDB</span>
      </div>
    </div>





    <!-- Timeeline -->


  </div>

  <div class="container">




    <p class="lead">

    <h1 class="section-title" style="font-size:30px;">Experience +5 Years</h1>
    <p><br />Expertise in full system development lifecycle including design, development, testing and
      deployment.<br />
      Proven Proficiency in business use case creation, analysis and solution generation.<br />
      Designed algorithms and codes by deploying Object-Oriented Design methodology & various design
      pattern.<br />
      Project management essentials including initiating and collaborating on sprint planning using agile
      methodology.<br />
      Writing end to end tests and maintaining the code coverage of the applications.<br />
      Testing & Performance Optimization.<br />
      Configuration & Documentation. <br />
      Played crucial role in development and deployment of Software as a full stack developer. <br />
<!--      Developed token based rest API, designed to integrate a common application for mobile and web
      both e.g. UrbanPiper API's, Twilio Video calling, Google clander, outlook clander, Iphone clander sync<br />-->

      Undergo CMMI Level Training.
    </p>

  </div>
  <!-- Achievements -->
  <div class="container cards">
    <div class="card" style="width: 100%;margin-top:3px;  transform: scale(1.02);
    transition: 0.5s;
    background-color: #fff;
    box-shadow: 0px 5px 50px -8px #ddd;
    cursor: pointer;padding-top:20px">


      <div class="skill-meta2">
        <h3>Coforge</h3>
        <h4>Sr. Software Engineer, Dec-2021 to Present</h4> <br />
        <span> Worked as a Senior Software Engineer on GPRS Sitemap project for U.S. client using
          technologies
          like <br /><b>Angular 11,Microsoft Azure,DevOps,CI/CD,Mapbox,
            Javascript,Typescript,HTML,CSS </b><br /><br />
        </span>
      </div>
    </div>

    <div class="card" style="width: 100%;margin-top:35px;  transform: scale(1.02);
    transition: 0.5s;
    background-color: #fff;
    box-shadow: 0px 5px 50px -8px #ddd;
    cursor: pointer;padding-top:20px">


      <div class="skill-meta2">
        <h3>Kreate Technologies</h3>
        <h4>Software Developer, Sept-2016 to Oct-2021</h4> <br />
        <span> Worked as a software Developer on different projects for different clients using
          technologies
          like <br /><b>Angular,Node js,Express js, MongoDb, PHP, MySql,
            Angular, Javascript, </b><br /><br />
        </span>
      </div>
    </div>

  </div>




  <div class="container cards">
    <h1 class="section-title" style="font-size:30px;">&nbsp;Education</h1>

    <div class="card" style="width: 32%; background-color: #EEF0F7;padding-top:20px;transform: scale(1.02);
    transition: 0.5s;
 
    box-shadow: 0px 5px 50px -8px #fff;">


      <div class="skill-meta2">
        <h5>JSS Academy of Technical Education</h5>
        <span>Noida, U.P</span>
        <br /> <br />
        <h4>B.TECH</h4>
        <span>2010 - 2014</span>
      </div>
    </div>
    <div class="card" style="width: 32%; background-color: #EEF0F7;padding-top:20px;transform: scale(1.02);
    transition: 0.5s;
  
    box-shadow: 0px 5px 50px -8px #fff;">


      <div class="skill-meta2">
        <h5>KV AMC</h5>
        <span>Lucknow, U.P</span> <br /> <br />
        <h4>Intermediate (CBSE)</h4>
        <span> 2009</span>
      </div>
    </div>
    <div class="card" style="width: 32%; background-color: #EEF0F7;padding-top:20px;transform: scale(1.02);
    transition: 0.5s;
  
    box-shadow: 0px 5px 50px -8px #fff;">


      <div class="skill-meta2">
        <h5>
          Kendriya Vidyalaya No.1</h5>
        <span>Ahmednagar,Maharashtra</span><br /> <br />
        <h4>High School (CBSE)</h4>
        <span>2007 </span>
      </div>
    </div>
  </div>

  <div class="container">




    <p class="lead">

    <h1 class="section-title" style="font-size:30px;">&nbsp;Projects</h1><br />
    
    <div class="card skill-meta2" style="width: 100%; background-color: #fff;height: auto;padding:10px;transform: scale(1.02);
    transition: 0.5s;
    background-color: #fff;
    box-shadow: 0px 5px 50px -8px #ddd;
    cursor: pointer;">
        <p>
            GPRS Sitemap
            <br />
            Client: GPRS(U.S.)
        </p>
        <div class="tagcloud"> <a href="javascript:void(0)">Angular 11</a> <a href="javascript:void(0)">TypeScript

            </a>
            <a href="javascript:void(0)">Microsoft Azure</a> <a href="javascript:void(0)">CI/CD Pipeline</a> <a
                href="javascript:void(0)">Mapbox</a>
            <a href="javascript:void(0)">DevOps</a>
            <a href="javascript:void(0)">HTML</a>

        </div>
        <p>
            <br/>
            <span>

                <strong> Role</strong> - Work as a Senior Software Engineer to handle the team member and interact with the BA team for new requirement and development.<br/>
                <strong>Summary</strong> - Ground Penerating Radar System(GPRS) Sitemap is GIS based project that provide comprehensive view of site infrastructure for the clients using Map providers<br /><br />
            </span>

        </p>
    </div>
	
	
	<div class="card skill-meta2" style="width: 100%; background-color: #fff;height: auto;padding:10px;transform: scale(1.02);
    transition: 0.5s;
    background-color: #fff;
    box-shadow: 0px 5px 50px -8px #ddd;
    cursor: pointer;">
        <p>
            eHRMS
            <br />
            Client: REC Power Development and Consultancy Limited
        </p>
        <div class="tagcloud"> <a href="javascript:void(0)">Angular</a> <a href="javascript:void(0)">Javascript

            </a>
            <a href="javascript:void(0)">PHP</a> <a href="javascript:void(0)">MySql</a> <a
                href="javascript:void(0)">Codeigniter</a>
            <a href="javascript:void(0)">Ionic</a>
            <a href="javascript:void(0)">GeoFencing</a>

        </div>
        <p>
            <br/>
            <span>

                <strong> Role</strong> - Work as a Senior Software Developer to handle the team member and interact with the client for new requirement and development.<br/>
                <strong>Summary</strong> - eHRMS is human resources management system used to manage human resources and related processes throughout the employee lifecycle.eHRMS run on mutiple platform i.e web and mobile for attendance management and tracking system,payroll system.<br /><br />
            </span>

        </p>
    </div>
    <div class="card skill-meta2" style="width: 100%; background-color: #fff;height: auto;padding:10px;transform: scale(1.02);
    transition: 0.5s;
    background-color: #fff;
    box-shadow: 0px 5px 50px -8px #ddd;
    cursor: pointer;">
        <p>
            Xellant
            <br />
            Client: Yuwaiting Technologies Pvt Ltd.
        </p>
        <div class="tagcloud"> <a href="javascript:void(0)">Angular 8</a> <a href="javascript:void(0)">Express js

            </a>
            <a href="javascript:void(0)">NodeJs</a> <a href="javascript:void(0)">MongoDB</a> <a
                href="javascript:void(0)">MEAN</a>
            <a href="javascript:void(0)">Javascript</a>

        </div>
        <p>
            <br/>
            <span>

                <strong> Role</strong> - Work with Software team as a software developer for development and  deployment of software.<br/>
                <strong>Summary</strong> - Xellant is a tutoring platform which provide direct interaction with teachers and students.Students can find local teachers, online teachers, and teachers to help with tutoring, coaching, assignments, academic projects, and dissertations for over 1000+ subjects.<br /><br />
            </span>

        </p>
    </div>
    <div class="card skill-meta2" style="width: 100%; background-color: #fff;height: auto;padding:10px;transform: scale(1.02);
    transition: 0.5s;
    background-color: #fff;
    box-shadow: 0px 5px 50px -8px #ddd;
    cursor: pointer;">
        <p>
             Activity portal
            <br />
            Client: Kreate Technologies (In House)
        </p>
        <div class="tagcloud"> <a href="javascript:void(0)">NodeJs</a> <a href="javascript:void(0)">MEAN

            </a>
            <a href="javascript:void(0)">Angular</a> <a href="javascript:void(0)">MongoDB</a> <a
                href="javascript:void(0)">Express.js</a>
            <a href="javascript:void(0)">Javascript</a>

        </div>
        <p>
            <br/>
            <span>

                <strong> Role</strong> - Work as a software developer for development and  deployment of software<br/>
                <strong>Summary</strong> - It is used for filling the daily activity,target,achievements and employee rating for the current month with approval from manager to track the monthly reports.<br /><br />
            </span>

        </p>
    </div>
    <div class="card skill-meta2" style="width: 100%; background-color: #fff;height: auto;padding:10px;transform: scale(1.02);
    transition: 0.5s;
    background-color: #fff;
    box-shadow: 0px 5px 50px -8px #ddd;
    cursor: pointer;">
        <p>
            Hello Meal (Online Food Ordering App)
            <br />
            Client: FOODZITO
        </p>
        <div class="tagcloud"> <a href="javascript:void(0)">Angular</a> <a href="javascript:void(0)">Javascript

            </a>
            <a href="javascript:void(0)">Hybrid App</a> <a href="javascript:void(0)">MySql</a>
                        <a href="javascript:void(0)">PHP</a>

            <a
                href="javascript:void(0)">Codeigniter</a>

        </div>
        <p>
            <br/>
            <span>

                <strong> Role</strong> - Work as a team lead for development and deployment of software and direct interact with client for requirements and changes.<br/>
                <strong>Summary</strong> - Hello Meal is Hybrid Mobile App which is used to order food online and Admin portal is used to manage all the orders and report generation.<br /><br />
            </span>

        </p>
    </div>
    <div class="card skill-meta2" style="width: 100%; background-color: #fff;height: auto;padding:10px;transform: scale(1.02);
    transition: 0.5s;
    background-color: #fff;
    box-shadow: 0px 5px 50px -8px #ddd;
    cursor: pointer;">
        <p>
            skool24
            <br />
            Client: Brainworm Technologies
        </p>
        <div class="tagcloud"> <a href="javascript:void(0)">AngularJs</a> <a href="javascript:void(0)">Javascript

            </a>
            <a href="javascript:void(0)">PHP</a> <a href="javascript:void(0)">MySql</a> <a
                href="javascript:void(0)">Codeigniter</a>
            <a href="javascript:void(0)">HTML</a>
             <a href="javascript:void(0)">CSS</a>
           

        </div>
        <p>
            <br/>
            <span>

                <strong> Role</strong> - Work as a software developer for development and deployment of software and work independently in full system development lifecycle including design ,development,testing.<br/>
                <strong>Summary</strong> - Skool24 is a Online School Management Software with Simple and Powerful Interface that enables any School, Institute, Coaching Center or Other Educational Institutions to manage their Operations with in this Online School Management Software.<br /><br />
            </span>

        </p>
    </div>
     <div class="card skill-meta2" style="width: 100%; background-color: #fff;height: auto;padding:10px;transform: scale(1.02);
    transition: 0.5s;
    background-color: #fff;
    box-shadow: 0px 5px 50px -8px #ddd;
    cursor: pointer;">
        <p>
            Edumentis
            <br />
            Client: Kreate Technologies (In House)
        </p>
        <div class="tagcloud"> <a href="javascript:void(0)">AngularJs</a> <a href="javascript:void(0)">Javascript

            </a>
            <a href="javascript:void(0)">PHP</a> <a href="javascript:void(0)">MySql</a> <a
                href="javascript:void(0)">Codeigniter</a>
            <a href="javascript:void(0)">HTML</a>
             <a href="javascript:void(0)">CSS</a>
           

        </div>
        <p>
            <br/>
            <span>

                <strong> Role</strong> - Work as a  team member for development of fees modules and REST Api for mobile application and web portal.<br/>
                <strong>Summary</strong> - Edumentis  is a platform which allows schools to manage their entire administrative process through web, anytime anywhere across the world includes student,admission and fee management.<br /><br />
            </span>

        </p>
    </div>
      <div class="card skill-meta2" style="width: 100%; background-color: #fff;height: auto;padding:10px;transform: scale(1.02);
    transition: 0.5s;
    background-color: #fff;
    box-shadow: 0px 5px 50px -8px #ddd;
    cursor: pointer;">
        <p>
            Lead Management System
            <br />
            Client: Kreate Global 
        </p>
        <div class="tagcloud"> <a href="javascript:void(0)">AngularJs</a> <a href="javascript:void(0)">Javascript

            </a>
            <a href="javascript:void(0)">PHP</a> <a href="javascript:void(0)">MySql</a> <a
                href="javascript:void(0)">Codeigniter</a>
            <a href="javascript:void(0)">HTML</a>
             <a href="javascript:void(0)">CSS</a>
           

        </div>
        <p>
            <br/>
            <span>

                <strong> Role</strong> - Work as a  team member for development of lead generate,activities modules and REST Api for mobile application and web portal.<br/>
                <strong>Summary</strong> - LMS is software application to manage all your leads, their activities, your salespeople, their performance, sales automation and revenue tracking with lead management system.<br /><br />
            </span>

        </p>
    </div>


  </div>
  <br><br>




</body>

</html>
