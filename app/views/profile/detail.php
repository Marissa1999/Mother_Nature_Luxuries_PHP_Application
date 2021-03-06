<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        h1 {
            color: darkslateblue;
            margin-top: 50px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        html, body {
            width: 100%;
        }

        table {
            margin: 0 auto;
        }

        td {
            padding: 0 25px;
        }

        dl {
            text-align: center;
        }

        dt {
            font-size: 20px;
            margin-top: 10px;
            margin-bottom: 20px;
        }

        dd {
            font-size: 15px;
            margin-top: 10px;
            margin-bottom: 5px;
        }

        p {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        label,
        input {
            height: 100%;
            display: block;
            text-align: center;
        }

        body {
            background-color: lavender;
            font-family: Helvetica, sans-serif;
        }
    </style>
    <title>Profile Details</title>
</head>
<body>
<div class='container'>
    <h1>Profile Details</h1>
    <a href='/home/index' class='btn btn-secondary'>Back to Home Page</a>
    <dl>
        <br/>
        <table>
            <tr>
                <td>
                    <dt>First Name</dt>
                    <dd><?= $data->first_name ?></dd>
                </td>
                <td>
                    <dt>Last Name</dt>
                    <dd><?= $data->last_name ?></dd>
                </td>
            </tr>
            <tr>
                <td>
                    <dt>Email</dt>
                    <dd><?= $data->email ?></dd>
                </td>
                <td>
                    <dt>Phone Number</dt>
                    <dd><?= $data->phone_number ?></dd>
                </td>
            </tr>
            <tr>
                <td>
                    <dt>Theme</dt>
                    <dd><?php
                        $theme = $data->theme_id;
                        if ($theme == 1) {
                            echo 'Beauty';
                        } elseif ($theme == 2) {
                            echo 'Medical';
                        } else {
                            echo 'Tea';
                        } ?></dd>
                </td>
                <td>
                    <dt>Gender</dt>
                    <dd><?= $data->gender ?></dd>
                </td>
            </tr>
            <tr>
                <td>
                    <dt>User Type</dt>
                    <dd><?= $data->user_type ?></dd>
                </td>
                <td>
                    <dt>Location</dt>
                    <dd><?= $data->location ?></dd>
                </td>

            </tr>
        </table>
    </dl>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>