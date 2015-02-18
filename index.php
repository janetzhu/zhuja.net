<?php 
	require_once 'header.php'; 
?>
    <div class="container-fluid">
        <div id="welcome" class="row">
            <span id="welcome-text">
                <span id="title">Janet Zhu</span><br>
                <span>DEVELOPER&nbsp;&nbsp;|&nbsp;&nbsp;DESIGNER&nbsp;&nbsp;|&nbsp;&nbsp;DREAMER</span>
            </span>
            <a class="down-btn" href="#feature">
                <img class="arrow" src="img/arrow-down.svg">
            </a>
        </div>
        <div id="feature" class="row">
        	<img class="headshot" src="img/feature-small.png">
        </div>
        <div id="greeting">
            Hi, I'm Janet
        </div>

        <div id="bio" class="row">
        	<p>I am a senior studying computer science at Georgetown University, looking forward to working as a software development engineer at Amazon.com in Seattle post-graduation.</p>
            <p>I have a passion for coding, designing, crafting and doing anything fun and creative.</p>
        </div>

    	<div id="about" class="row info-box">
        	<h1 class="cursive">About</h1>
        	<section id="education">
                <aside><h4>EDUCATION</h4></aside>
                <article>
                    <h4 class="article-header">
                        Georgetown University
                        <div class="date-loc">Washington, DC<br>2011-2015</div>
                    </h4>
                    <h5>Computer Science, B.S.</h5>
                    Programming with a focus on C++ and Java. Specialized coursework include Network Security, Introduction to Databases, Artificial Intelligence and Data Science.
                </article>
                <article>
                    <h4 class="article-header">
                        Montgomery Blair High School
                        <div class="date-loc">Silver Spring, MD<br>2007-2011</div>
                    </h4>
                    <h5>Science, Mathematics, and Computer Science Magnet Program</h5>
                    Magnet program offered accelerated courses in interdisciplinary courses for highly able students. Specialized coursework included Data Structures & Algorithms, Graphics, 3D Graphics, Quantum Physics, Thermodynamics, and Biochemistry.
                </article>
            </section>
        </div>

    	<div id="experience" class="row info-box">
        	<h1 class="cursive">Experience</h1>
        	<section id="experience">
                <aside><h4>WORK</h4></aside>
                <article>
                    <h4 class="article-header">
                        Amazon.com
                        <div class="date-loc">Seattle, WA<br>Summer 2014</div>
                    </h4>
                    <h5>Software Development Engineer Intern</h5>
                    Worked on the Search Experience Mobile team. Project involved manipulating product titles to improve appearance on mobile devices.
                </article>
                <article>
                    <h4 class="article-header">
                        National Center for Student Success
                        <div class="date-loc">Washington, DC<br>2013-2015</div>
                    </h4>
                    <h5>Web Developer</h5>
                    Helped create <a href="http://altstudentsuccess.com" target="_blank">website</a>.
                </article>
            </section>
        </div>

        <div id="portfolio" class="row info-box">
            <h1 class="cursive">Portfolio</h1>
            <p>Look at some pretty things I made.</p>
        </div>

        <div id="map" class="row info-box">
            <h1 class="cursive">Follow Me</h1>
            <div class="overlay">click to interact with map</div>
            <div id="mapbox-map">
                <iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/janetzoo.l88niphk/attribution,zoompan,zoomwheel,geocoder,share.html?access_token=pk.eyJ1IjoiamFuZXR6b28iLCJhIjoiVHotVWhndyJ9.2tfc6cagHZvrhy5oH2nwhA'></iframe>
            </div>
        </div>

    	<div id="contact" class="row info-box">
        	<h1 class="cursive">Contact</h1>
        	<p>e-mail: janet@zhuja.net</p>
        </div>
    </div>
	
<?php	
	require_once 'footer.php';
?>

	