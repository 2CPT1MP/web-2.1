<form action="/data/student/st1" method="get">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="number" name="age" id="age">
    <input type="submit" value="submit">
</form>
<form action="/data" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name">
    <input type="submit" value="submit">
</form>


<?php
require('../modules/request.php');

$request = new Request();
echo json_encode($request->getMethod());
echo json_encode($request->getPath());
echo json_encode($request->getParams());
echo json_encode($request->getBody());


