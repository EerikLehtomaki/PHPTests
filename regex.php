<?php 
echo file_get_contents("header.html"); 
?>

<h2 class="text-left">Websites</h3>
<p class="text-left">
    Php tester: <a href="http://sandbox.onlinephpfunctions.com/">http://sandbox.onlinephpfunctions.com/</a> <br>
    Cheatsheet 1: <a href="http://cheat-sheet.front.lv/wp-content/uploads/2006/06/php_cheat_sheet.png">php_cheat_sheet.png</a> <br>
    Cheatsheet 2: <a href="http://cheat-sheet.front.lv/wp-content/uploads/2006/08/pcre-php.png">pcre-php.png</a> <br>
</p>

<h3 class="text-left">Funktiot</h3>
<p class="text-left">
    preg_match(pattern, subject)<br>
    preg_match_all(pattern, subject)<br>
    preg_replace(pattern, replacement, subject)<br>
    preg_replace_callback(pattern, callback, subject)<br>
    preg_grep(pattern, array)<br>
    preg_split(pattern, subject)<br>
</p>

<h3 class="text-left">Literal matches</h3>

<?php
    echo '<p class="text-left">';

        $regex = '/22/';
        $string = '22222';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<?php
    echo '<p class="text-left">';

        $regex = '/cat dog/';
        $string = 'cat dog cat';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo "<p/>";  
?>

<h3 class="text-left">Character classes</h3>

<?php
    echo '<p class="text-left">';

        $regex = '/[a-z]/';
        $string = 'asdfghjklASDFGHJKL123456';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<?php
    echo '<p class="text-left">';

        $regex = '/[a-zA-Z]/';
        $string = 'asdfghjklASDFGHJKL123456';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<?php
    echo '<p class="text-left">';

        $regex = '/[a-zA-Z0-9]/';
        $string = 'asdfghjklASDFGHJKL123456';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<h3 class="text-left">Negation</h3>

<?php
    echo '<p class="text-left">';

        $regex = '/[^A-Z]/';
        $string = 'asdfghjklASDFGHJKL123456';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<h3 class="text-left">Special characters</h3>

<?php
    echo '<p class="text-left">';

        $regex = '/[@^]/';
        $string = '!"#¤%&/()=?^*@£$€$€{[{[]}';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<h3 class="text-left">Special characters negation case</h3>

<?php
    echo '<p class="text-left">';

        $regex = '/[^@($]/';
        $string = '!"#¤%&/()=?^*@£$€$€{[{[]}';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<h3 class="text-left">ASCII</h3>

<?php
    echo '<p class="text-left">';

        echo "<a href='http://www.asciitable.com/'>http://www.asciitable.com/</a><br>";
        $regex = '/[\ -~]/';
        $string = '!"#¤%&/()=?^*@£$€$€{[{[]}ASDasd123';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<h3 class="text-left">Alterations</h3>

<?php
    echo '<p class="text-left">';

        $regex = '/cat|dog/';
        $string = 'cat dog fish';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<h3 class="text-left">Metacharacters</h3>

<?php
    echo '<p class="text-left">';

        echo "Anything but new lines.<br><br>";

        $regex = '/./';
        $string = '.!"#¤%&/()=?^*@£$€$€{[{[]}ASDasd123';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<?php
    echo '<p class="text-left">';

         echo "Only dots. <br><br>";

        $regex = '/\./';
        $string = '.!"#¤%&/()=?^*@£$€$€{[{[]}ASDasd123';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<?php
    echo '<p class="text-left">';

         echo "All alphabets and numbers (Ascii) [a-zA-Z0-9]. <br><br>";

        $regex = '/\w/';
        $string = '.asd!"#¤%&/()=?^*@£$€$€{[{[]}ASDasd123';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<?php
    echo '<p class="text-left">';

         echo "Everything else but alphabets and numbers. <br><br>";

        $regex = '/\W/';
        $string = '.asd!"#¤%&/()=?^*@£$€$€{[{[]}ASDasd123';

        echo "Regex: " . $regex;
        echo "<br>";
        echo "String: " . $string;
        echo "<br>";

        $result1 = preg_match($regex, $string, $matches1);
        echo "preg_match : ";
        print_r($result1 . " : ");
        print_r($matches1);
        echo "<br>";

        $result2 = preg_match_all($regex, $string, $matches2);
        echo "preg_match_all : ";
        print_r($result2 . " : ");
        print_r($matches2);

    echo '</p>';
?>

<?php echo file_get_contents("footer.html"); ?>