<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Todo</title>
        <link rel="stylesheet" href="stylesheet.css">
        <script type="text/javascript" src="javascript/app.js"></script>
        <script>
            function deleteAll(){
                var con = new XMLHttpRequest();
                con.open("GET", "/todo/Todo/php/functions.php?q=delAll", true);
                con.send();
                con.onreadystatechange = function(){
                    if(con.readyState==4){
                        location.reload(true);
                    }
                };
            }
            
            function delet(x){
                var con = new XMLHttpRequest();
                con.open("GET", "/todo/Todo/php/functions.php?q=del&param="+x, true);
                con.send();
                con.onreadystatechange = function(){
                    if(con.readyState==4){
                        location.reload(true);
                    }
                };
            }       
            
            function addEntry(){
                var x = document.forms["newTodo"]["thing"].value;
                var con = new XMLHttpRequest();
                con.open("GET", "/todo/Todo/php/functions.php?q=add&param="+x, true);
                con.send();
                con.onreadystatechange = function(){
                if(con.readyState==4){
                    location.reload(true);
                    }
                };
            }
            
            function switch(){
                var con = new XMLHttpRequest();
                con.open("GET", "/todo/Todo/php/functions.php?q=switch&param="+x, true);
                con.send();
                con.onreadystatechange = function(){
                if(con.readyState==4){
                    location.reload(true);
                    }
                };
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
                $entryFile = fopen("resources/ListEntries.txt","r") or die("something");
                    $counter = 0;
                        while(($line = fgets($entryFile)) != false) {
                            $split = explode(" ",$line); ?>
                            <tr>
                            <td class="task"><?php echo $split[0] ?></td>
            
                            <?php if($split[1]==1){
                                $switch = "done";
                            }
                            else {$switch="notDone"; } ?>
            
                                <td><input id="check<?php echo $counter?>" type="button" class="<?php echo $switch ?>" onclick="switch(<?php echo $counter?>);"></td>
                                <td><input id="delete" type="button" value="Delete Entry" onclick="delet(<?php echo $counter ?>);"/></td>
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