<?php 
echo file_get_contents("header.html"); 
        
echo '
<p>Just a landing page.<p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/veqM5_ReprM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
';

echo file_get_contents("footer.html");