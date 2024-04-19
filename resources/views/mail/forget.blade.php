<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--<title>Email Template</title>-->
</head>

<body>
    <table>
        <tr>
            <td>Hi,<br />
                Please click the below link to reset the password.
                <br />
                <p><a href="{{$user['link']}}">{{$user['link']}}</a>.</p>
                <!-- {{$user['link']}} -->

                <br />
                With regards, <br />
                Admin<br />
                Print App
            </td>
        </tr>
        <!-- <tr>
                <td>
                    <p>My Sourcing Hub</p>
                </td>
            </tr> -->
    </table>
</body>

</html>