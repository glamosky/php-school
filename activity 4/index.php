<!DOCTYPE html>
<html lang="en">
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cayaco's First Website</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@300..700&display=swap" rel="stylesheet">
        <link rel="icon" type="image/png" href="images/icon.png">
    </head>
    <body>

    <!-- convert all text content in <h1>, <h2>, <p>, <li>, <td>, <th> tags, text in <q> tags, text in <code> and <kbd> tags, footer text, any other text content -->
    <!-- DO NOT convert HTML structure and tags, CSS classes and styling, Links and images (the href and src attributes), Meta tags and head content, CSS file links -->

        <header style="background-color: chocolate;">
                <h1><?php echo "Frank Sebastian Cayaco"; ?></h1>
                <q class="q1">
                    <?php echo "If my code runs perfectly on my system, but not yours, that's a YOU problem."; ?>
                </q>
                <hr>
        </header>

        <main>
            <h1><?php echo "Welcome to my first website!"; ?></h1>
            <hr>

            <br>

            <h2 class="head2"><div style="background-color:cyan;"><?php echo "About Me"; ?></div></h2>
            <p class="p1">
            <?php echo "I am a former student of Industrial Engineering from Rizal Technological University. 
            I already had my eyes in tech as early as 2018 but I watched a video about "; ?>
            <a href="https://youtu.be/EFwa5Owp0-k?si=hphi6J3LlxkEAoeU" target="_blank" title="Polymatter - Not Everyone Should Code"><?php echo "why not everyone should code,"; ?></a>
            <?php echo "that was enough to convince me to pursue a career in IE instead 
            <b>SPOILER ALERT: I regretted it.</b> Our course in C++ back in RTU inspired me to take programming courses 
            for certificates I can flex on my resume. It wasn't that serious until earlier this year where I decided to make projects, particularly, in data science.
            You can see my collection so far "; ?>
            <a href="https://github.com/glamosky?tab=repositories" target="_blank" title="My Github Page"><?php echo "here."; ?></a>
            </p>
           
            <br>
            <h2 class="head2"><div style="background-color:cyan;"><?php echo "Educational History"; ?></div></h2>
            <ol class="p2">
                <li><?php echo "Golden Faith Academy (Secondary)"; ?></li>
                <li><?php echo "Rizal Technological University (Tertiary)"; ?></li>
                <li><?php echo "MFI Polytechnic Institute Inc."; ?></li>
            </ol>

            <br>
            <h2 class="head2"><div style="background-color:cyan;">Certificates</div></h2>
            <ul class="p3">
                <li><?php echo "Microsoft Excel 2019"; ?></li>
                <li><?php echo "15 Days of SQL"; ?></li>
                <li><?php echo "Automate the Boring Stuff with Python Programming"; ?></li>
            </ul>

            <br>
            <h2 class="head2"><div style="background-color:cyan;"><?php echo "Likes and Dislikes"; ?></div></h2>
            <table border="3" style="background-color:black; border:2px solid; font-family: 'Cabin', sans-serif;">
                <tr align="center" style="background-color:lightblue">
                    <th width="100"><?php echo "Likes"; ?></th>
                    <th width="100"><?php echo "Dislikes"; ?></th>
                </tr>
                <tr align="center" style="background-color:lightgreen">
                    <td><?php echo "Gaming"; ?></td>
                    <td><?php echo "Power-tripping persons"; ?></td>
                </tr>
                <tr align="center" style="background-color:lightgreen">
                    <td><?php echo "Sleeping"; ?></td>
                    <td><?php echo "Bureaucracy"; ?></td>
                </tr>
                <tr align="center" style="background-color:lightgreen">
                    <td><?php echo "Flight simulation"; ?></td>
                    <td><?php echo "Abusive jeepney conductors"; ?></td>
                </tr>
            </table>

            <br>
            <h2 class="head2"><div style="background-color:cyan;"><?php echo "My Favorite Linux Commands"; ?></div></h2>
            <ol class="p4">
                <li><code><?php echo "sudo rm -rf /*"; ?></code></li>
                <li><kbd><?php echo "sudo apt clean"; ?></kbd></li>
                <li><code><?php echo "sudo apt update && sudo apt upgrade -y  "; ?></code></li>
                <li><code><?php echo "sudo journalctl --vacuum-time=7d  "; ?></code></li>
                <li><code><?php echo "flatpak uninstall --unused"; ?></code></li>
            </ol>
            
            <footer style="background-color:chocolate; text-align:center;">
                <hr>
                <p class="p1"><?php echo "Copyright &copy; 2025"; ?></p>
                <p class="p1"><?php echo "If you came this far, thank you!"; ?></p>
            </footer>
        </form>
    </body>
    
</html>
