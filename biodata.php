<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
        img{
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 285px;
            height: auto;
        }

        body{
                background-color: white;
                width: 100%;
                height: 100%;
                margin: auto;
                padding-top: 20px;
            }

        .biodata{
                margin: auto;
                height: 420px;
                padding:25px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: 0.2s;
                width: 320px;  
                
                            
            }

        .biodata:hover {
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);    
            }  

        table{
                margin: auto;
                width: 100px;
                padding-left: auto;
            }

        td{
               text-align: left; 
               padding-left: 5px;
            }  

    </style>
</head>
<body>

<?php
   $nama    = ": Ajisaka Kamandanu";
   $nim     = ": 202520006";
   $email   = ": ajisakakamandanu13@gmail.com";
   $alamat  = ": Plaosan, Purworejo, Jawa Tengah";
   $bidang  = ": Full Stack Developers"
?>
    <div class="biodata">
        <table border="0">
            <tr>
                <td colspan="2" class="img"><img src="fotoku.jpeg" alt="fotoku"></td>
                
            </tr>
            <tr>
                <td> <br> </td>
            </tr>
            <tr>
                <td> Nama </td>
                <td> <?php print $nama ; ?> </td>
            </tr>
            <tr>
                <td> Nim </lable></td>
                <td> <?php print $nim ; ?></td>
            </tr>
            <tr>
                <td> Email </lable></td>
                <td> <?php print $email ; ?> </lable></td>
            </tr>
            <tr>
                <td> Alamat </lable></td>
                <td> <?php print $alamat ; ?> </td>
            </tr>
            <tr>
                <td> Bidang </td>
                <td> <?php print $bidang ; ?> </td>
            </tr>
        </table>
    </div>    
    
</body>
</html>