<!-- 
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  margin-left: 20%;
  margin-top: 5%;
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
}
</style>
</head>
<body>

<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>

</body>
</html>
 -->


 <?php
 /*
 * sanitize the data using filter_var()
 */
$str = "<h1>Hello Nepal</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_URL);
echo $newstr;