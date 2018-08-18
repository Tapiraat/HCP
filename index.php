<!-- Complete web development cheat sheet and explaination (HTTP, HtML, CSS, Javascript and PHP, PHP frameworks and more!) -->
<!-- In this file we'll be referencing files from the assets folder in this repo, when looking at this locally, be sure to clone those too! -->

<!-- This is a comment. Comments are not displayed in the browser, you can use comments to comment on your work. -->

<!--

Getting started:

- If you are looking for a good text editor for web development, we suggest one of the following;

https://atom.io/ (Our pick, fast, easy to use, hackable and free!)
https://www.sublimetext.com/
https://notepad-plus-plus.org/download/v7.5.8.html

- If you are looking for a full on IDE (integrated development environment), we suggest one of the following;

https://visualstudio.microsoft.com/vs/ (Our pick, easy to use and free!)
https://netbeans.org/
https://www.jetbrains.com/products.html

- If you want to get started with PHP, we suggest installing XAMPP. This allows you to run a web server with PHPmyAdmin locally, great for experimenting and testing.

https://www.apachefriends.org/index.html

- We also suggest to load all the Javascript files at the bottom of your document, this will improve loading speeds!

- Hosting is a fundemental part of your website, we suggest one of the following providers (not sponsored);

https

- Need more help?

https://w3schools.com (W3schools, an awesome website with information on all the well known web languages)
https://www.youtube.com/user/TechGuyWeb (Traversy Media, a great channel with awesome video's containing loads of information)

-->

<!--

An explaination of the web (you can skip this if it doesn't interest you);

There are two sides of the web, the client and server side.
An example of a client is a web browser, when you acces a website from a browser you automatically send a client request to a server. The server then responds.

An example of a client request;
GET /about HTTP/1.1

GET is our http method, there are loads of different methods;
POST, PUT, PATCH, DELETE, HEAD and OPTIONS, though in this file we'll mainly focus on GET, POST and PUT.
Explaination of all the web methods
- 1 [GET] ()
- 2 [HEAD] ()
- 3 [POST] ()
- 4 [PUT] ()
- 5 [DELETE] ()
- 6 [CONNECT] ()
- 7 [OPTIONS] ()
- 8 [TRACE] ()

/about is our request URI

HTTP/1.1 is our protocol version (this doesn't really matter when developing!)

The HTTP protocol is the foundation of the internet:
HTTP is short for Hypertext Transfer Protocol (HTTPS is short for Hypertext Transfer Protocol Secure.)

-->

<!-- HtML cheat sheet. -->

<!DOCTYPE html> <!-- Declares this is indeed an HtMl document, not required in most modern browsers, but a good habbit. -->
<html lang="en" dir="ltr"> <!-- This is where we open our HtML document. -->
  <head> <!-- This is where we open our head, here we load CSS. Javascript gets loaded at the bottom of the file. It gets loaded last because of speed improvements. Nothing from the head is visible on your site! -->
    <meta charset="utf-8"> <!-- This is our files character set, UTF-8 is the most common. -->
    <meta name="description" content="This is my awesome website, come check it out!"> <!-- This is an example of a meta tag, these are used by browsers to better find your website. -->
    <!-- Full meta list (copy and past url in the browser); https://gist.github.com/lancejpollard/1978404 -->
    <title>Example site</title> <!-- This title does not appear on the web page itself, but on your in-browser tab instead. -->
  </head> <!-- Closing the head tag. In HtML it's very important to close all the tags you open, something you'll see me do throughout this file. -->
  <body> <!-- Opening the body tag. Everything we put between the body opening and closing tag gets displayed on our web page. -->

    <!-- This is an HtML 'tag', in this case, the H tag, which stands for heading. -->
    <!-- There are 6 heading sizes, 1 being the biggest, 6 being the smallest, you can use them as such; -->
    <h1>This is a h1 heading.</h1>
    <h2>This is a h2 heading.</h2>
    <h3>This is a h3 heading.</h3>
    <h4>This is a h4 heading.</h4>
    <h5>This is a h5 heading.</h5>
    <h6>This is a h6 heading.</h6>

    <!-- These are the html <br> (line breaker) and html <hr> (horizontal rule) tags, used to divide content. -->
    <br> <!-- Adds some white space between content. -->
    <hr> <!-- Adds a horizontal line between content. -->

    <!-- These are paragraphs; -->
    <p>This is a paragraph.</p>
    <p>This is <strong>strong</strong>.</p>
    <p>This is a <a href="http://google.com">link</a>.</p>
    <p>This is a <a href="/about.html">local link</a>.</p>

    <!-- Images; -->
    <!-- Images can either be loaded locally or from another souce. -->
    <img src="image.png" alt="An image" width="200" height="100">
    <img src="http://website.co/images/image.png" alt="Another image" width="200" height="100">
    <!-- src stands for source, alt is short for alternative, the width and height speak for itself -->
    <!-- Alt gets used when the requested file isn't found. -->
    <!-- The width and height that are set are likely to ruin the image. Just changing the width will make sure the height is changed accordingly. -->

    <!-- HtML also has buttons; -->
    <!-- Please be aware that HtML does not have a way to add actual functionality to the button, we can use Javascript for that, which we'll get into in a second. -->
    <button>Click me</button>

<!-- CSS cheat sheet. -->

<style>

</style>

<!-- Javascript cheat sheet. -->

<script>

</script>

<!-- PHP cheat sheet. -->

<?php /* Opening the PHP tag. Everything we put between the php opening and closing tag gets executed as PHP onto our web page;
the actual code itself can not be seen! */

// This is a comment in php

/* This is a
multi line
comment in PHP */

/* Terms commonly used in PHP;



*/

/* How to setup XAMPP;



*/

// I'll be echoing break lines (echo "<br>";) throughout this file just to make reading the document in your browser easier!

// Echo, strings and print

echo "Hello World"; // Echo string, please always make sure to end the line with a ;
echo "<h1>Hello World</h1>"; // You can use HtML tags inside the echo function
echo '<p>That means <a href="https://google.com">links</a> too!'; // When using double quotes in the string, be sure to use single quotes on the outside!

// You can also use print tho it is not suggested, it does the same as echo but is slower
print "I got printed.";

echo "<br>";

// Variables;
$var1 = "Hello World"; // Make variable
echo $var1; // Echo variable

echo "<br>";

// Variables and strings;
// Now an example of variables inside a string
$user = "Calvin"; // The user's name that will be used in the stirng below
$favoriteColor = "blue"; // The user's favorite color that will be used in the stirng below
echo "Hello there $user, does your favorite color happen to be $favoriteColor?"; // Will output string with set values

echo "<br>";

/* A variables value can be modified at a later point in the file, please note that this will replace the value from this point onwards,
everything till this point will be what you declared first */
$user = "Alexandru"; // New name
$favoriteColor = "red"; // New favorite color
echo "Oh wait! Your name is actually $user and your favorite color is actually $favoriteColor!"; // This will output a string with the new values

echo "<br>";

// Functions;
// Use funtions with strings and variables, funtions are used to more easily do things with PHP, here we'll focus on existing functions
echo strlen("Hello world!"); // Outputs 12
echo "<br>";
echo str_word_count("This is an example."); // Outputs 4
echo "<br>";
echo strrev("Oh boy, I'd like this text to be reversed!"); // Outputs !desrever eb ot txet siht ekil d'I ,yob hO
echo "<br>";
$uppercase = "THIS IS UPPERCASE BUT I WANT IT TO BE LOWERCASE!";
echo strtolower($uppercase); // Outputs uppercase in lowercase
echo "<br>";
$lowercase = "this is all lowercase but i want it to be uppercase!";
echo strtoupper($lowercase); // Outputs lowercase in uppercase

echo "<br>";

// Arrays;
// This is an example, data like this would normally get stored inside a database!
$a_user1 = array('u_name' => "Calvin", 'u_last' => "Heldoorn", );
$a_user2 = array('u_name' => "Second", 'u_last' => "Person", );
echo "User 1's name is $a_user1[u_name] $a_user1[u_last]";
echo "<br>";
echo "User 2's name is $a_user2[u_name] $a_user2[u_last]";

// Data types;
null; // No value assigned will result in a null
$integer = 30; // This is called an integer (full numbers)
$float = 39.99; // This is called a float (allows for decimals)
$boolean = true; // This is a boolean, it can only be true or false
$boolean2 = false; // This is a boolean, it can only be true or false
// Arrays and strings are also a data type, but these have already been explained
/* Database calls are also a data type, we call stuff like database calls resources;
more information on databases and how to build or connect them will come later in this document */

// Classes

// Routers

// Frameworks

?> <!-- Closing the PHP tag. -->

  </body> <!-- Closing the body tag. -->
</html> <!-- Closing the HtML tag. -->

<!--

Thanks for reading, we hope you have learned something!
~ Calvin. H (https://calvin.ws/)

-->
