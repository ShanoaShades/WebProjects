<?php
    include("connect.php");

    $sql = 
        "SELECT d.DOC_ID, d.DOC_NAME, d.DOC_DATE, d.DOC_SIZE, d.DOC_VERSION, d.DOC_PRIVACY, d.DOC_APPROVED_BY, t.TYPE_NAME, c.CATEGORY_NAME, u.USER_USERNAME 
         FROM document d 
         LEFT JOIN document_type t ON d.TYPE_ID = t.TYPE_ID 
         LEFT JOIN categorie c ON d.CATEGORY_ID = c.CATEGORY_ID 
         LEFT JOIN user u ON d.USER_ID = u.USER_ID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>". 
            $row["DOC_ID"] . "</td><td>". 
            $row["DOC_NAME"] . "</td><td>". 
            $row["DOC_DATE"] . "</td><td>". 
            $row["DOC_SIZE"] . "</td><td>". 
            $row["DOC_VERSION"] . "</td><td>".
            $row["DOC_PRIVACY"] . "</td><td>". 
            $row["DOC_APPROVED_BY"] . "</td><td>". 
            $row["TYPE_NAME"] . "</td><td>". 
            $row["CATEGORY_NAME"] . "</td><td>". 
            $row["USER_USERNAME"] . "</td></tr>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
?>