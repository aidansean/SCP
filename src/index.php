<?php
$title = 'SCP' ;
include_once($_SERVER['DOCUMENT_ROOT'] . '/_core/preamble.php') ;
?>
  <div class="right">
    <h3>About this page</h3>
    <div class="blurb">
      <p>SCP stands for Special Containment Procedure.  Or Secure, Contain and Protect.  Or Secure CoPy.  I don't really know or care what it stands for.  The SCP is a <a href="http://www.scp-wiki.net/">wiki</a> of special instructions for containing objects which are of interest to <a href="">The Foundation</a>.  Writing these instructions proves to be a fascinating and rewarding exercise in creative writing, and a good way to practice one's horror writing skills.</p>
      <p>About the Foundation and useful information:</p>
      <ul>
        <li><a href="http://www.scp-wiki.net/about-the-scp-foundation">About the SCP Foundation</a></li>
        <li><a href="http://www.scp-wiki.net/groups-of-interest">Groups of Interest</a> (Doesn't actually seem very relevant to writing new material)</li>
        <li><a href="http://www.scp-wiki.net/scp-object-classes">Object classes</a></li>
        <li><a href="http://www.scp-wiki.net/security-clearance-levels">Security clearance levels</a></li>
        <li><a href="http://www.scp-wiki.net/secure-facilities-locations">Secure facilities locations</a></li>
        <li><a href="http://www.scp-wiki.net/task-forces">Task forces</a></li>
      </ul>
    </div>
  </div>
    
  <div class="right">
    <h3><a class="title" href="scp.py.text">python SCP retriever</a></h3>
    <div class="blurb_with_icon">
      <div class="image">
        <a href="scp.py.text"><img class="icon" src="/images/scp_python.png" alt="python SCP retriever" /></a>
      </div>
      <p>For fun I wrote a simple python script that downloads and displays the text for a given SCP page in the terminal.  This way I can get a laugh whenever I wait for some code to run.  For best effect, this should be piped into less.  It takes one argument which can be:</p>
      <ul>
        <li>An SCP number (eg "914"): that SCP description gets written to the terminal.</li>
        <li>A log name, (eg "experiment-log-914"): that log file gets written to the terminal.</li>
        <li>An empty string: a random SCP description gets written to the terminal.</li>
        <li>"help": this help text gets written to the terminal.</li>
      </ul>
      <a href="scp.py.text">Get the script</a></p>
    </div>
  </div>
  
  <div class="right">
    <h3><a class="title" href="fire_pencils.php">Fire pencils</a></h3>
    <div class="blurb_with_icon">
      <div class="image">
        <a href="fire_pencils.php"><img class="icon" src="/images/scp_fire_pencils.png" alt="Fire pencils" /></a>
      </div>
      <p>This is the first SCP I wrote.  They are pencils that (eventually) set fire to anything they write on.  I didn't have time to respond to queries, so the votes went up, then went down, then it got removed from the wiki.  I may resurrect it one day, as I liked the idea quite a lot.  <a href="fire_pencils.php">Burn, baby, burn.</a></p>
    </div>
  </div>
  
  <div class="right">
    <h3><a class="title" href="eye_museum.php">Eye museum</a></h3>
    <div class="blurb_with_icon">
      <div class="image">
        <a href="eye_museum.php"><img class="icon" src="/images/scp_eye_museum.png" alt="Eye museum" /></a>
      </div>
      <p>This SCP compels people to remove one of their eyes and stick it to a wall.  I have no idea where it came from or why the idea occurred to me, but it is creepy.  <a href="eye_museum.php">Eye see what you did there.</a></p>
    </div>
  </div>
  
  <div class="right">
    <h3>My favourites</h3>
    <div class="blurb">
      <p>Some of my favourite SCPs:</p>
      <ul>
        <li><a href="http://www.scp-wiki.net/scp-055">SCP-055</a>: An object that defies description.</li>
        <li><a href="http://www.scp-wiki.net/scp-087">SCP-087</a>: A staircase to nowhere with the sounds of a crying child. (See also: log files <a href="http://www.scp-wiki.net/document-087-i">D-#087-I</a>, <a href="http://www.scp-wiki.net/document-087-ii">D-#087-I</a>, <a href="http://www.scp-wiki.net/document-087-iii">D-#087-III</a>, D-#087-IV</li>
        <li><a href="http://www.scp-wiki.net/scp-914">SCP-914</a>: A giant clockwork machine that transforms one thing into another. (See also: experimental log file <a href="http://www.scp-wiki.net/experiment-log-914">E-#914</a></li>
        <li><a href="http://www.scp-wiki.net/scp-1212">SCP-1212</a>: A barstool with an imaginary drinking contest.</li>
        <li><a href="http://www.scp-wiki.net/scp-1545">SCP-1545</a>: A compulsive llama costume.</li>
      </ul>
    </div>
  </div>

<?php foot() ; ?>
