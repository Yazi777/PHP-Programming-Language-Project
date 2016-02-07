#Installing and Writing a "Hello World" program

###Operating Systems

PHP can be installed on any operating system (Windows, Mac, Unix/Linux). Since this project will be conducted on a Windows machine, instructions pertaining to the Windows OS follow.

###Installing PHP

Visit <a href="https://www.microsoft.com/web/webmatrix/">THIS LINK</a> to download WebMatrix3. 
It is a web development tool for Windows, that enables you to write code in HTML, CSS, JavaScript, CSHTML, VBHTML, C#, ASPX (VB), Classic ASP, PHP, TXT, and XML. 

Next, for Simmons students, visit <a href="http://winscp.net/eng/download.php">THIS LINK</a> to download WinSCP, which is a free, open source FTP application. CLick on the Installation Package to begin the download, then follow <a href="http://web.simmons.edu/~gslislab/website/howto/PC-MAC-howto-UsingFTPandYourSimmonsWebSpace.pdf">THESE INSTRUCTIONS</a> to get connected to the Simmons web server (this requires a Simmons College username and password) and begin transferring files.

###Writing Programs in PHP

PHP programs can be written in WebMatrix, by choosing "New Empty Site" and then selecting the PHP file type. PHP code is built inside of an HTML page, so there will be HTML tags that hopefully look familiar to you. 

###Running Programs in PHP

Once you have written a PHP program and saved it to your computer, use WinSCP to move the program to your "public_html" folder. Once there, your executed program can be viewed by visiting a link that will look like this:  
"web.simmons.edu/~yourusername/programname.php".

For example, <a href="http://web.simmons.edu/~dacostay/PHPPage.php">HERE</a> is a very simple "Hello, World!" program that I wrote. 

###Boiler-plate 

Unlike Java, there is no strictly-PHP boiler-plate code needed before you start writing code. On the other hand, since PHP goes hand-in-hand with HTML, there is a block of HTML boiler-plate that looks like this: 
```{r}
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>

```

Inside the "body" tags, the only PHP indicators needed look like this:
```{r}
<?php
     echo "Hello, World!";
?>
```

The line of code here, which outputs "Hello, World!", is where all PHP code would go.
