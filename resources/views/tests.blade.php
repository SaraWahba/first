<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background-color:#020c25e1;
        }
        .heading{
            display: flex;
            justify-content: center;
        }
        .heading h1{
            text-transform: uppercase;
            align-items: center;
            color: #ffffff;
            margin-top: 100px;
        }
        .data-table{
            padding: 40px;
            margin-top: 100px;
        }
        .student-data{
            color: #ffffffe1;
            display: flex;
            justify-content: center;
        }
        .student-data table{
            border: 5px solid #ffffff;
            padding: 50px;
            background-color: orangered;
            border-radius:10px;
        }
        .student-data table td,th{
            border: 2px solid #ffffff;
            border-radius: 5px;
            padding: 5px;
        }
        .backToHome a {
            text-decoration: none;
            cursor: pointer;
        }
        .backToHome a button{
            font-size: 1.2em;
            color: #ffffff;
            font-weight: 600;
            margin: 50px;
            padding: 10px 29px;
            border: 0;
            background-color: orangered;
            border-radius: 5px;
        }
    </style>
</head>
<body>
<!-- {{$id}}-{{$name}}
<br>
mobile : {{$mobile}}
<br>
city :   {{$city}}
<br>
email :  {{$email}} -->


    <div class="heading">
        <h1>Data For Student</h1>
    </div>

    <div class="data-table">
        <div class="student-data">
            <table>
                <thead>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th>Email</th>
                </thead>
                <tbody>
                    <td>{{$id}}</td>
                    <td>{{$name}}</td>
                    <td>{{$mobile}}</td>
                    <td>{{$city}}</td>
                    <td>{{$email}}</td>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>