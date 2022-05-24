connect.php
The dbname in connect.php was incorrect, changed to "exo1_userslist".

index.php
Line 15 -> added empty array $errors
line17 -> add empty array $users
Lines 23, 25, 27 -> changed colum to column
line59 -> change prepare to query
line74(or 82) -> add PDO::FETCH_ASSOC
lines72-75 -> moved outside of if function (to lines 80-83)
