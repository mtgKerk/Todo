<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Todo</title>
        <link rel="stylesheet" href="stylesheet.css">
        <script type="text/javascript" src="javascript/app.php"></script>
    </head>
    <body class="center">
        
        <?php
            function deleteAll() {
                echo "this is called";
                $entryFile = fopen("resources/ListEntries.txt","r,w") or die("File not found?");
                while(($line=fgets($entryFile)!=false)){
                    if(explode(" ",$line)[1]==1){
                        $entries = file_get_contents($entryFile);
                        $entries = str_replace($line,'',$entries);
                        file_put_contents($entryFile, $entries);
                    }
                }
            }
        ?>
        
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
        
        <button id="deleteAll" class="delete" onclick="deleteAll();">Delete Completed</button>
            
        
    </body>
</html>