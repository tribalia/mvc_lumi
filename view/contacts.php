
<!DOCTYPE html>
<html>
   
    </head>
    <body>
        <div><a href="index.php?op=new">Add new contact</a></div>
        <table class="contacts" border="0" cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</a></th>
                    <th>Phone</a></th>
                    <th>Email</a></th>
                    <th>Address</a></th>
                    
                </tr>
            </thead>
            <tbody>
            <?php foreach ($contacts as $contact): ?>
                <tr>
                    <td><a href="index.php?op=show&id=<?php print $contact->id; ?>">
                        <?php print htmlentities($contact->name); ?></a></td>
                    <td><?php print htmlentities($contact->phone); ?></td>
                    <td><?php print htmlentities($contact->email); ?></td>
                    <td><?php print htmlentities($contact->address); ?></td>
                    
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </body>
</html>