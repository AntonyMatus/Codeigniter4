<body>
    <table>
        <tr>
        <th>name</th>
        <th>name</th>
        <th>email</th>
        <th>deleted</th>
        </tr>
        <?php
        foreach($users as $user)
        {
            echo "<tr>";
            echo "<td>".$user['id']."</td>";
            echo "<td>".$user['name']."</td>";
            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['deleted_at']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>