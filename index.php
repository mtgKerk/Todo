<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Todo</title>
        <link rel="stylesheet" href="stylesheet.css">
        <script type="text/javascript" src="javascript/app.js"></script>
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
            <tr id="entry">
                    <td class="task">test</td>
                    <td><input id="check" type="button" class="done" onclick="done();"></td>
                    <td><input id="delete" type="button" value="Delete Entry" onclick="delet();"/></td>
            </tr>
            <?php
                $entryFile = fopen("resources/ListEntries.txt","r") or die("File not found?"));
                    $splitter = "";
                        while(($line = fgets($entryFile)) != false) {
                            $split = array explode($splitter,$line);
                            echo '<tr>'
                            . '<td class="task">';
                            . '</tr>';
                    }
                 fclose($entryFile);
            ?>
        </table>
        </div>
        
        <form name="newTodo" onsubmit="return validateForm()" method="post">
            <input type="text" name="thing"placeholder="Insert new Todo here" id="entryText">
            <input type="submit" value="Add to list" onclick="addEntry();"/>
        </form>
        
        <input id="deleteAll" type="button" value="Delete Completed" class="delete" onclick="deleteAll();"/>
    </body>
</html>