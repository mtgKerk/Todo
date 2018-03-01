<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Todo</title>
        <link rel="stylesheet" href="stylesheet.css">
        <script type="text/javascript" src="javascript/app.js"></script>
        <script>
            function deleteAll(){
                var con = new XMLHttpRequest();
                con.onreadystatechange = function(){
                    if(con.readyState==4){
                           header("Refresh:0");
                    }
                };
                con.open("GET", "php/functions.php?q=delAll", true);
                con.send();
            }
        </script>
    </head>
    <body class="center">
        
        <div class="center">
        <h1>Simple Todo list</h1>
        <table id="entries">
            <tr>
                <th>Tasks</th>
                <th>Done</th>
                <th></th>
            </tr>
            
            <?php
                $entryFile = fopen("resources/ListEntries.txt","r") or die("File not found?");
                    $counter = 0;
                        while(($line = fgets($entryFile)) != false) {
                            $split = explode(" ",$line); ?>
                            <tr>
                            <td class="task"><?php echo $split[0] ?></td>
            
                            <?php if($split[1]==1){
                                $switch = "done";
                            }
                            else {$switch="notDone"; } ?>
            
                                <td><input id="check<?php echo $counter?>" type="button" class="<?php echo $switch ?>" onclick="done(<?php echo $counter?>);"></td>
                                <td><input id="delete" type="button" value="Delete Entry" onclick="delet();"/></td>
                            </tr>
                                <?php
                                $counter=$counter+1;
                    }
                 fclose($entryFile);
            ?>
        </table>
        </div>
        
        <form name="newTodo" onsubmit="return validateForm()" method="post">
            <input type="text" name="thing"placeholder="Insert new Todo here" id="entryText">
            <input type="submit" value="Add to list" onclick="addEntry();"/>
        </form>
        
        <input type="button" value="Delete Completed" id="deleteAll" class="delete" onclick="deleteAll();">
            
        
    </body>
</html>