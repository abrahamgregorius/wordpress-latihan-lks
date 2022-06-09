
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            margin: 0;
        }

        .img-post{
            width: 25%;
        }

        nav {
            position: sticky;
            top: 0;
            margin: 0;
            height: 75px;
            display: flex;
            background-color: salmon;
            flex-direction: column;
        }

        ul li {
            list-style: none;
            margin-left: 10px;
            display: flex;
            align-items: center;
        }

        li {
            justify-content: space-between;
        }

        @media only screen and (max-width: 500px) {
            .img-post {
                width: 100%;
            }
            .flex{
                flex-direction: column;
            }
        }

        footer {
            display: flex;
            justify-content: center;
        }

        .footer {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

    </style>


</head>

<body>
    <nav>
        <?php 
            wp_nav_menu(['them_location' => 'Main Menu']);
        ?>
    </nav>
    <div class="container">