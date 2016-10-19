<html>
    <body>
        <h1>Welcome Back!</h1>
           <h3>Here you will be able to execute the "ls" command to list the file and directories at a specific path.</h3>
            <?php
                if (!isset($_GET["command"])) {
                    echo "<form method='get' action=''>
                        Path:<input type='text' name='command'>
                        <input type='submit' value='Submit'>
                    </form> ";
                }
                else {
                     $command=$_GET["command"];
                     $translate = array ('$' => '', '&' => '', '|'=>'', '&&' => '', ';' => '' , '&&' => '', '||' => '');
                     $command = str_replace( array_keys($translate), $translate, $command);
                     system("ls " . $command);
                }
             ?>
    </body>
</html>
