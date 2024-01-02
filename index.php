<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            /* background-color: black; */
            font-family: sans-serif;
        }
       
        h2{
            margin-top: 30px;
            font-size: 45px;
            margin-bottom:30px;
            text-align:center;
            color:goldenrod;
            font-weight: 700;
        }

       
        .header{
            width: 100%;
            height: 50px;
            background-color: goldenrod;
            position: relative;
        }
        nav{
            display: flex;
            padding: 1% 2%;
            justify-content: space-between;
            align-items: center;
        }
        .nav-links{
            flex: 1;
            text-align: right;
        }
        .nav-links ul li{
            list-style: none;
            display: inline-block;
            /* padding: 4px 6px; */
            margin-left: 16px;
            position: relative;
        }
        .nav-links ul li a{
            color: white;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
        }
        .nav-links ul li::after{
            content: '';
            width: 0%;
            height: 2px;
            background-color: gold;
            display: block;
            margin: auto;transition: 0.5s;
        }
        .nav-links ul li:hover::after{
            width: 100%;
        }
        table{
            width:80%;
            margin: auto;
            border-collapse:collapse;
        }
        table, th, td{
            padding:6px;

        }

        th{
            background-color: gray;
            /* text-transform: uppercase;
            font-size: 15px; */
        }

        tr:nth-of-type(even){
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Schedules Table</h2>
        <button name="add" style="background-color: #f2f2f2;">Add New Schedule</button>
        <table>
            <tr>
                <th>SNO</th>
                <th>Schedule</th>
                <th colspan="2">Action</th>
            </tr>

            <tr>
                <td></td>
                <td colspan="2">
                    <a href=""></a>
                    <a href=""></a>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>