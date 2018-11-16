<link rel="stylesheet" href="../public/css/home.css">
<div class="main">

  <div class="pictureFrame">
    <div class="picHolder">
      <img id="myPic" src="../public/img/daanfoto1.jpg" alt="Daan Hansen">
    </div>

    <div class="textToPic">
      <h3 id="pageTitle">Daan Hansen</h3>
      <h5 id="underTitle">Junior Web Developer</h5>
      <button  onclick="scrollToBottom()" name ="cButton" id="cButton" type="button">Contact Me</button>
    </div>
  </div>

    <div class="arrow"><p id="downArrow">&#9660;</p></div>

</div>
<div class="content">
  <div class="aboutMeHolder">
    <div class="aboutMe meText">

      <div class="aBlock">
        <h2 class="meText">About Me</h2>
        <p class="meText">Hello there! I am Daan Hansen, an 18 year old Web Development Student at Mediacollege Amsterdam.
          I am a very calm and open minded person and I like to talk with people. I like to learn new things, anything! I enjoy listening to music and podcasts in my free time and helping people makes me happy and is nothing new for me.</p>
      </div>

      <div class="aBlock">
        <h2 class="meText">My Abilities</h2>
        <p class="meText">I primarily use HTML5, PHP, CSS3, SQL and ofcourse, Javascript. I also know a little Java and Python, but I so far I only used those langauges for personal small projects. I have worked with Bootstrap and I am familiar with the MVC Model.</p>
      </div>

      <div class="aBlock">
        <h2 class="meText">My Future</h2>
        <p class="meText">I aspire to be a  front end developer because then I get to use more of my creativity and I think that is a good thing as I want to use all my best qualities. Being able to express my creativity makes me feel better and being able to combine that with my job is amazing to me.</p>
      </div>

    </div>
    <div class="myProjects meText">
      <h2>My Projects:</h2>

      <div class="projectUnit">
        <div class="pText">
          <h3 id="pTitle">The Wall</h3>
          <p>The wall was one of my first projects. The task was to create a website together with a classmate wich has the basic features of instagram like posting pictures and text, storing them and desplaying them. Altough we where supposed to do it as a team I made the website myself. It was a great opportunity to learn about back-end and front-end and I did learned a lot from it.<br>
            <a target="_blank" href="#SiteUrl">— Go To Website</a> </p>
        </div>
        <div class="pImage">
          <a target="_blank" href="#SiteUrl"><img  src="../public/img/wallt.png" alt="Project Picture"></a>
        </div>
      </div>


      <div class="projectUnit">
        <div class="pText">
          <h3 id="pTitle">Project IK</h3>
          <p>"Project IK" (translates to Project ME) was my first website. It was quite a task for me back then. Luckily I have learned a lot since then and I am still proud of it myself.<br>
            <a target="_blank" href="#SiteUrl">— Go To Website</a> </p>
        </div>
        <div class="pImage">
          <a target="_blank" href="#SiteUrl"><img  src="../public/img/ikt.png" alt="Project Picture"></a>
        </div>
      </div>

      <div class="projectUnit">
        <div class="pText">
          <h3 id="pTitle">Media Mages</h3>
          <p>"The Media Mages" is a fictional company me and three other classmates started and are still working on today. Our class was divided into teams that all had to create a website for their fictional company. After that we had a day where potential clients would come and visit our stand where we presented our company. We ended up working for TheFullMonty workshop where we are still working on today. This has been the most fun and interesting project so far. I will keep this post updated as time progresses.<br>
            <a target="_blank" href="#SiteUrl">— Go To Website</a> </p>
        </div>
        <div class="pImage">
          <a target="_blank" href="#SiteUrl"><img  src="../public/img/mmt.png" alt="Project Picture"></a>
        </div>
      </div>

    </div>
  </div>

</div>

<div id="contactMe"class="contactHolder">

  <div class="contact">

    <div class="cText">
      <h2>Contact me</h2>
      <p>It would be amazing to work with you! Just get in touch with me via one of the following social media by clicking on it down below and I will get right back to you!</p>
    </div>

    <div class="smLogoHolder">
      <a target="_blank" href="https://api.whatsapp.com/send?phone=31642146475"><img class="smLogo" src="../public/img/phoneLogo.png" alt="Linked In"></a>
      <a target="_blank" href="mailto:daanhansen2k@gmail.com"><img class="smLogo" src="../public/img/mailLogo.png" alt="E-mail"></a>
      <a target="_blank" href="https://www.linkedin.com/in/daan-hansen-927144153/"><img class="smLogo" src="../public/img/linkedInLogo.png" alt="Whatsapp"></a>
    </div>
  </div>

</div>
<script type="text/javascript">
// Defines
function scrollToBottom() {
  window.scrollBy(0, 10000);
}



function UpnDown(){
  let arrow = document.getElementById('downArrow');
  arrow.style.transform = "translateY(100px)";
  setTimeout(DownnUp, 2000);}
  function DownnUp(){
    let arrow = document.getElementById('downArrow');
    arrow.style.transform = "translateY(55px)";
    setTimeout(UpnDown, 2000);}
    // Calls
    UpnDown();
    </script>
