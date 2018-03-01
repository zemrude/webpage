<?php include("header.html")?>

<div class="expanded row">

<h2 id="course-description">Course Description</h2>

<p>This course is a survey of the emerging field of high-energy particle astrophysics and is primarily intended for students pursuing a master’s degree in physics.  Phenomena studied in this field are among the most energetic in Universe and include the theory and observation of particles accelerated in supernovae remnants, super-massive black holes, active galaxies, and gamma ray bursts. </p>
<p>This course will feature an emphasis on problem solving using numerical techniques. Although certainly is not a requirement to understand the physical processed involved in astroparticle phenomena, it is benefitial to resolve numerically some of the proposed problems in order to better assimilate the concepts discussed during this course. The Python programming language is used as a tool for constructing these numerical solutions.  There exist complete mathematical libraries (NumPy/SciPy) for Python as well as powerful interactive tools and graphical visualization frameworks which make it possible to easily construct problem solvers in a matter of minutes along with graphical output.
as the programing language. The idea is also to familiarize the student with what has become one of the most popular analysis tools in the high energy physics as well as astronomy communities.

<h2> Table of Content </h2>

<p>The course nominally includes 14 hours of lecture and 14 hours of exercises.  These hours will be divided (approximately) among 7 lectures, 7 exercise sessions. Material of the course can be found below. The notebooks can found found as well as on my <a href="https://github.com/zemrude/PHYS-F-467">github</a></p>

<p>The lectures will are divide by topics:</p>

<dl class="accordion" data-accordion>
  <!--PA1 -->
  <dd class="accordion-navigation">
    <a href="#panel1b"><span><i class="fa fa-plus fa-lg fa-fw"></i><i class="fa fa-minus fa-lg"></i></span><h5>PA1: Introduction  </h5><span class="alert label">new</span></a>
      <div id="panel1b" class="content"> 
<ul class ="disc">
<li>Introduction to Cosmic Rays.</li>
<li>Historical remarks </li>
</ul>
        <ul class="no-bullet">
          <li><b>Material:</b></li>
<ul class="no-bullet">
          <li>Slides [<a href="https://www.dropbox.com/s/7v9ijh9xc061jh7/slides-PA1.pdf?dl=0">PDF</a>]</li>
        </ul>
</ul>
      </div>
  </dd>

  <!--PA2 -->
  <dd class="accordion-navigation">
    <a href="#panel2b"><span><i class="fa fa-plus fa-lg fa-fw"></i><i class="fa fa-minus fa-lg"></i></span><h5>PA2: The computation framework  </h5><span class="alert label">new</span></a>
    <div id="panel2b" class="content">
      <ul class="disc">
				<li>Natural units</li>
				<li>Coordinates and time</li>
				<li>Special Relativity and relativistic kinematics</li>
				<li>Cosmology</li>
    	</ul>
     
      <ul class="no-bullet"> 
     <li><b>Material:</b></li>
     <ul class ="no-bullet">
   <li>Slides [<a href="https://www.dropbox.com/s/ar3aevy4szavrgf/slides-PA2.pdf?dl=0" target="_blank">PDF</a>]</li>
     <li>Notes [<a href="https://www.dropbox.com/s/nx5o9zrx2hm8se0/PA2.pdf?dl=0" target="_blank">PDF</a>] [<a href="https://github.com/zemrude/PHYS-F-467/blob/master/PA2.ipynb">IPYNB</a>] [<a href="http://nbviewer.jupyter.org/github/zemrude/PHYS-F-467/blob/master/PA2.ipynb">HTML</a>]</li>
      </ul>
</ul>
    </div>
  </dd>

  <!--Exercises 1 -->
  <dd class="accordion-navigation">
    <a href="#panel1a"><span><i class="fa fa-plus fa-lg fa-fw"></i><i class="fa fa-minus fa-lg"></i></span><h7>Exercises 1  </h7><span class="alert label">new</span></a>
    <div id="panel1a" class="content">

      <ul class="no-bullet">   
     <li><b>Material:</b></li> 
<ul class="no-bullet">
<li>Exercises [<a href="https://www.dropbox.com/s/btrvy8sizshyusl/Exercises1.pdf?dl=0" target="_blank">PDF</a>]</li>

<!--
        <li><a href="PHYS-467/Exercises1_solutions.pdf" target="_blank">Solutions (pdf)</a><span class="[success alert secondary] [round radius] label"><i class="fa fa-key"></i>Password required</span></li>
        <li><a href="https://www.dropbox.com/s/aqzxr0jfd3z3qf8/Exercises1.ipynb?dl=0" target="_blank">Solutions (iPython notebook)</a><span class="[success alert secondary] [round radius] label"><i class="fa fa-key"></i>Password required</span></li>
-->
      </ul>
</ul>
    </div>
  </dd>

  <!-- Cosmic Rays -->
  <dd class="accordion-navigation">
    <a href="#panel3b"><span><i class="fa fa-plus fa-lg fa-fw"></i><i class="fa fa-minus fa-lg"></i></span><h5>PA3: Cosmic Rays</h5></a>
    <div id="panel3b" class="content">
      <ul>
	      <li>Cosmic Ray composition</li>
	      <li>Diffusion of CR in the Galaxy</li>
	      <li>Sources – cosmic ray acceleration mechanisms</li>
				<li>Cosmic rays above the Knee</li>
				<li>Air Shower and detection techniques</li>
      </ul>
<!--   
   <ul class="inline-list">
        <li><b>Material:</b></li>
        <li><a href="PHYS-467/PA3.slides.html" target="_blank">Slides (html)</a></li>
        <li><a href="PHYS-467/PA3.html" target="_blank">Notes (html)</a></li>
        <li><a href="PHYS-467/PA3.pdf" target="_blank">Notes (pdf)</a></li>
        <li><a href="https://www.dropbox.com/s/04hdac40kq451rv/PA3.ipynb?dl=0">Notes (iPython notebook)</a></li>
      </ul>
-->
    </div>
  </dd>


  <!-- Muons -->
  <dd class="accordion-navigation">
    <a href="#panel4b"><span><i class="fa fa-plus fa-lg fa-fw"></i><i class="fa fa-minus fa-lg"></i></span><h5>PA4: Muons and Neutrinos</h5></a>
    <div id="panel4b" class="content">
        <ul class="no-bullet">
		  		<li>Muons and neutrinos at sea level and underground</li>
					<li>Muon interactions</li>
					<li>Neutrino interactions</li>
					<li>Neutrino Oscillations</li>
<!--
					<ul class="inline-list">
					  <li><b>Material:</b></li>
					  <li><a href="PHYS-467/PA4.slides.html" target="_blank">Slides (html)</a></li>
            <li><a href="PHYS-467/PA4.html" target="_blank">Notes (html)</a></li>
            <li><a href="PHYS-467/PA4.pdf" target="_blank">Notes (pdf)</a></li>
            <li><a href="https://www.dropbox.com/s/0d0a6hc4d3uulsd/PA4.ipynb?dl=0">Notes (iPython notebook)</a></li> </ul>
        	</ul>
-->
    </div>
  </dd>

  <!--Exercises 2 -->
  <dd class="accordion-navigation">
    <a href="#panel2a"><span><i class="fa fa-plus fa-lg fa-fw"></i><i class="fa fa-minus fa-lg"></i></span><h7>Exercises 2</h7></a>
    <div id="panel2a" class="content">
<!--   
   <ul class="inline-list"> <li><b>Material:</b></li>
        <li><a href="PHYS-467/Exercises2.pdf" target="_blank">Exercises (pdf)</a></li>
        <li><a href="PHYS-467/Exercises2_solutions.pdf" target="_blank">Solutions (pdf)</a><span class="[success alert secondary] [round radius] label"><i class="fa fa-key"></i>Password required</span></li>
        <li><a href="https://www.dropbox.com/s/lif28o2tgv02hxz/Exercises2.ipynb?dl=0" target="_blank">Solutions (iPython notebook)</a><span class="[success alert secondary] [round radius] label"><i class="fa fa-key"></i>Password required</span></li>
      </ul>
-->
    </div>
  </dd>
  <!-- Multimessenger -->
  <dd class="accordion-navigation">
    <a href="#panel5b"><span><i class="fa fa-plus fa-lg fa-fw"></i><i class="fa fa-minus fa-lg"></i></span><h5>PA5: Multimessenger Astronomy</h5></a>
    <div id="panel5b" class="content">
       <ul>
					<li>Astrophysical sources of Gamma-rays and neutrinos</li>
					<li>The Cosmic Ray, gamma-ray and neutrino conexion</li>
					<li>Neutrino astronomy</li>
					<li>Gamma-ray astronomy</li>
	  		</ul>
<!--   
     <ul class="inline-list"> <li><b>Material:</b></li>
          <li><a href="PHYS-467/PA5.pdf">Slides (pdf)</a></li>
          <li><a href="PHYS-467/PA5.html">Notes (html)</a></li>
          <li><a href="PHYS-467/PA5_notes.pdf">Notes (pdf)</a></li>
          <li><a href="PHYS-467/PA5.ipynb">Notes (iPython notebook)</a></li>
        </ul>
-->
    </div>
  </dd>

  <!--Exercises 3-->
  <dd class="accordion-navigation">
    <a href="#panel3a"><span><i class="fa fa-plus fa-lg fa-fw"></i><i class="fa fa-minus fa-lg"></i></span><h7>Exercises 3</h7></a>
    <div id="panel3a" class="content">
<!--   
   <ul class="inline-list"> <li><b>Material:</b></li>
        <li><a href="PHYS-467/Exercises3.pdf" target="_blank">Exercises (pdf)</a></li>
        <li><a href="PHYS-467/Exercises3_solutions.pdf" target="_blank">Solutions (pdf)</a><span class="[success alert secondary] [round radius] label"><i class="fa fa-key"></i>Password required</span></li>
        <li><a href="https://www.dropbox.com/s/vvkyh8xqw1hhgki/Exercises3.ipynb?dl=0" target="_blank">Solutions (iPython notebook)</a><span class="[success alert secondary] [round radius] label"><i class="fa fa-key"></i>Password required</span></li>
      </ul>
-->
    </div>
  </dd>

  <!--Dark Matter -->
  <dd class="accordion-navigation">
    <a href="#panel6b"><span><i class="fa fa-plus fa-lg fa-fw"></i><i class="fa fa-minus fa-lg"></i></span><h5>PA6: Dark Matter</h5></a>
    <div id="panel6b" class="content">
       <ul>
					<li> Evidences of Dark Matter </li>
					<li> Candidates of Dark Matter </li>
					<li> Alternatives to Dark Matter: MOND </li>
					<li> Direct and indirect searches of Dark Matter </li>
		  	</ul>
<!--   
     <ul class="inline-list"> <li><b>Material:</b></li>
          <li><a href="PHYS-467/PA6.pdf">Slides (pdf)</a></li>
        </ul>
-->
    </div>
  </dd>

 </dl>

<br>



<h2 id="recommended-reading">Recommended Reading</h2>
<p>There is no mandatory textbook for this course.  However, the students are encouraged to enrich their instruction by reviewing external references.  There is a great wealth of high-quality information freely available on the internet, in particular the “arXiv” preprint server at <a href="http://arxiv.org">http://arxiv.org</a>.  There the student can search for and download articles and reviews of the astroparticle subject. Some useful reviews are: </p>
<ol>
<li>Kachelreiß, M. Lecture Notes on High Energy Cosmic Rays. arXiV:0801.4376</li>
<li>Semikoz, D. High-energy Astroparticle physics. arXiV:1010.2647</li>
<li>Kamionkowski, M. Dark Matter and Dark Energy. arXiV:0706.2986</li>
<li>Anchordoqui, L. and Montaruli, T. In search of extraterrestrial high-energy neutrinos Annu. Rev. Nucl. Part. Sci. 60 (2010), 129-162.</li>
<li>Gaisser, T. K. and Stanev, T. Neutrinos and Cosmic Rays. arXiV:1202.0310</li>
<li>Lorenz, E. and Wagner, R. Very-high energy gamma ray astronomy arXiV:1207.6003 </li>
<li>Scholberg, K. Supernova Neutrino Detection Annu. Rev. Nucl. Part. Sci. 62 (2012) 81-103</li>
<li>Neutrinos and Explosive Events in the Universe Eds. M. Shapiro, T. Stanev, and J. Wefel.  DOI: 10.1007/1-4020-3748-1 (Available via ULB subscription to SpringerLink book series)</li>
</ol>
<p>Also to note is the Particle Data Group website (<a href="http://pdg.lbl.gov">http://pdg.lbl.gov</a>) which hosts the Reviews of Particle Physics 20XX itself a compendium of tabulated information useful for particle physicists as well as reviews on topics from the passage of radiation through matter to Big-Bang cosmology.</p>
<p>Material for the course has been variously taken from the following textbooks:</p>
<ol>
<li>Gaisser, T.K. Cosmic Rays and Particle Physics, Cambridge University Press, 1991</li>
<li>Longair, M. High-Energy Astrophysics Volume 1: Particles, photons, and their detection, Cambridge University Press, 2004</li>
<li>Perkins, D. Particle Astrophysics, Oxford University Press, 2008</li>
</ol>

<h2 id="grading">Grading</h2>
<p>20% of the grade will be based on the student project and presentation. During the presentation there will be also some interrogation about the course theoretical concepts.  The other 70% will derive from the final written exam of exercises similar to those resolved in class.  All material will be allowed during the written exam. The rest of 10% will come from participation and hands on of some of the more complicated exercises done at home. </p>


</div>

<?php include("footer.html")?>
