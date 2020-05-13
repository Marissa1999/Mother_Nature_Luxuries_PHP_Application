<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        h1 {
            color: darkslateblue;
            margin-top: 50px;
            margin-bottom:30px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        h2 {
            margin-top: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }
        h3 {
            margin-top: 25px;
            display: flex;
        }
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            display: flex;
            justify-content: center;
            background-color: lavenderblush;
        }
        li{
            display: inline-block;
        }
        li {
            border-right: 1.5px solid #a6a6ed;
        }
        li:last-child {
            border-right: none;
        }
        li a {
            font-size: 15px;
            display: block;
            color: darkslateblue;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        li a:hover {
            background-color: #d1d1f6;
        }
        a:link {
            text-decoration: none;
        }
        body {
            background-color: lavender;
            font-family: Helvetica, sans-serif;
        }
    </style>
    <title>List of Profiles</title>
</head>
<body>
<div class='container'>
    <h1>List of Profiles</h1>
    <a href='/login/logout' class="btn btn-danger" style="float: right;">Logout</a><br />
    <a href='/home/index' class='btn btn-secondary' style="float: left;">Back to Home Page</a><br /><br />
    <table class='table table-striped'>
        <tr><td>First Name</td><td>Last Name</td><td>Location</td><td>Gender</td><td>Actions</td></tr>
        <?php
        foreach($data['profiles'] as $profile)
        {
            echo "<tr><td>$profile->first_name</td><td>$profile->last_name</td>
                        <td>$profile->location</td><td>$profile->gender</td>
                        <td><a href='/message/viewMessages/$profile->profile_id' class='btn btn-success'>Send Message</a> 
                 </td></tr>";
        }
        ?>
    </table>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>