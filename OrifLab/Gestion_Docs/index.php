<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestion de documents</title>

        <link rel="stylesheet" href="css/styles.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    </head>

    <body>
      <h1>Gestion de documents</h1>

      <table>
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>DATE</th>
          <th>SIZE</th>
          <th>VERSION</th>
          <th>PRIVACY</th>
          <th>APPROVED BY</th>
          <th>TYPE</th>
          <th>CATEGORY</th>
          <th>USER</th>
        </tr>
        <?php include("php/table.php"); ?>
      </table>

      
    </body>
</html>