<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>popularpresets</title>
        <?php
        $GLOBALS['filteredquery'] = "SELECT * FROM `presets`";

        ?>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css  html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        */
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                color:white;
                
            }
<<<<<<< HEAD

        }
=======
            .button {
                background-color: #902aaf;
                border: none;
                color: white;
                padding: 15px 15px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin: 4px 2px;
                cursor: pointer;
            }
>>>>>>> cb5cabf0324da650218830df4d5a4ee55270fcb0
            .input {
                text-align: center;padding: 15px 15px; 
                border: none; 
                color: white; 
                padding: 15px 15px; 
                text-align: center; 
                text-decoration: none;display: 
                inline-block; 
                font-size: 14px; 
                margin: 4px 5px; 
                cursor: pointer;
            }
            h1.pptitle{
                font: bold 3.5em 'Source Sans Pro', Arial, sans-serif;
                margin: 10px auto 10px;
                text-align: center;
            }
            .flextext{
                flex:auto;
                
            }
            table, td, th {
            border: 1px solid black;
            }
            table {
            width: 100%;
            border-collapse: collapse;
            width:70%;
            text-align: center;
            background: #000;
            }
        </style>
        <script type="text/JavaScript">
            document.getElementById("submit").onclick = filterBudget();
            function filterBudget(){
                var budgets = document.getElementById("budget").value;
               // alert(" your budget is "+ budgets) ;
                if (budgets < 0) {
                    alert("Please input a positive number.");
                } else if (budgets >= 0 && budget < 2500) {
                    alert("Sorry we don't have any suggestion for your budget range.");
                } else if (budgets >= 2500 && budget < 5000) {
                 $query = "SELECT * FROM `presets` WHERE total_price < 5000;";
                } else if (budgets >= 5000 && budget < 10000) {
                 $query = "SELECT * FROM `presets` WHERE total_price < 10000;";
                } else {
                 $query = "SELECT * FROM `presets`";
                }
                $GLOBALS['filteredquery'] = $query;
            }

        </script>
    </head>
    <body>
        <h1 class="pptitle">Popular Presets</h1><br><br>
        <p style="margin: auto;text-align:center;">Put your budget below to get a recommedation from us or view the popular presets</p><br><br>
        <hr style="width:80%; height:0px; margin:0 auto;background-color:white;color:white;"><br>
<<<<<<< HEAD
        <form style="text-align: center;" method="post">
            <input type="text" id="budget" name="budget"  placeholder="Put you budget here">
            <input type="button" id="submit" name="submit" value="Submit" onclick="filterBudget()">

        </form><br>
        <p style="text-align: center;">Presets </p><br>



             <div>
                <center>
                     <?php
                        $username = "root";
                        $password = "";
                        $database = "cp_db";
                        $mysqli = new mysqli("localhost", $username, $password, $database);
                        $query = $GLOBALS['filteredquery'];

                    ?>
                    <table border="0" cellspacing="2" cellpadding="2">
                        <tr>
                            <td> <font face="Arial">Build ID</font> </td>
                            <td> <font face="Arial">Total Price</font> </td>
                        </tr>
                        <?php

                    function filterBudget(){
                 $budgets =  $_POST['budget'];

                if ($budgets < 0) {
                    echo "Please input a positive number.";
                } else if ($budgets >= 0 && $budget < 2500) {
                    echo "Sorry we don't have any suggestion for your budget range.";
                } else if ($budgets >= 2500 && $budget < 5000) {
                 $query = "SELECT * FROM `presets` WHERE total_price < 5000;";
                } else if ($budgets >= 5000 && $budget < 10000) {
                 $query = "SELECT * FROM `presets` WHERE total_price < 10000;";
                } else {
                 $query = "SELECT * FROM `presets`";
                }

            }



                        if ($result = $mysqli->query($query)) {


                            while ($row = $result->fetch_assoc()) {
                                $field1name = "Build".$row["id"];
                                $field2name = "RM".$row["total_price"];

                                echo '<tr>
                                            <td >'.$field1name.'</td>
                                            <td>'.$field2name.'</td>
                                        </tr>';

                            }
                            $result->free();
                            }


                        ?>



                        </table>
                        <br><br><p style="text-align: center;">Presets Details</p><br>
                        <table border="0" cellspacing="2" cellpadding="2" >
                            <tr>
                            <td> <font face="Arial">Product Name</font> </td>
                            <td> <font face="Arial">Total Price</font> </td>
                            <td> <font face="Arial">CPU</font> </td>
                            <td> <font face="Arial">GPU</font> </td>
                            <td> <font face="Arial">Motherboard</font> </td>
                            <td> <font face="Arial">PSU</font> </td>
                            <td> <font face="Arial">RAM</font> </td>
                            <td> <font face="Arial">Storage</font> </td>





                            </tr>
                            <?php
                            $query = "SELECT pre.id as buildid, pre.total_price as totalprice, c.model_name as cname, g.name as gname, m.name as mname, p.name as pname, r.name as rname, s.name as sname
                            FROM `presets` pre join cpus c join gpus g join motherboards m join psus p join rams r join storages s WHERE pre.cpu = c.id AND pre.gpu = g.id AND pre.psu = p.id AND pre.motherboard = m.id AND pre.ram = r.id AND pre.storage = s.id";
                            if ($result = $mysqli->query($query)) {
                                   while ($row = $result->fetch_assoc()) {
                                       $field1name = "Build".$row["buildid"];
                                       $field2name = "RM".$row["totalprice"];
                                       $field3name = $row["cname"];
                                       $field4name = $row["gname"];
                                       $field5name = $row["mname"];
                                       $field6name = $row["pname"];
                                       $field7name = $row["rname"];
                                       $field8name = $row["sname"];



                                       echo '<tr>
                                            <td>'.$field1name.'</td>
                                            <td>'.$field2name.'</td>
                                            <td>'.$field3name.'</td>
                                            <td>'.$field4name.'</td>
                                            <td>'.$field5name.'</td>
                                            <td>'.$field6name.'</td>
                                            <td>'.$field7name.'</td>
                                            <td>'.$field8name.'</td>
                                            </tr>' ;

                                    }
                                   $result->free();
                                  }

                            ?>
                            </table>
                             {{-- <?php
                           echo'<table border="0" cellspacing="2" cellpadding="2">
                                <tr>
                                    <td> <font face="Arial">Build ID</font> </td>
                                    <td> <font face="Arial">Total Price</font> </td>
                                </tr>';

                            if ($result = $mysqli->query($query)) {
                                while ($row = $result->fetch_assoc()) {
                                    $field1name = "Build".$row["id"];
                                    $field2name = "RM".$row["total_price"];


                                    echo '<tr>
                                            <td >'.$field1name.'</td>
                                            <td>'.$field2name.'</td>
                                        </tr>';
                                }
                                $result->free();
                            }

                            ?>
                     <script>
                        document.getElementById("populartable").style.display = "block";
                        const btn = document.getElementById("submit");
                        btn.onclick = function() {
                         //



                        //     $username = "root";
                        //     $password = "";
                        //     $database = "cp_db";
                        //     $mysqli = new mysqli("localhost", $username, $password, $database);
                        // //  $budget = $_POST['budget'];
                        //     $query = "SELECT * FROM `presets`";
                        //      if(isset($_POST['submit'])){
                        //         if ($_POST['budget'] < 0) {
                        //                 alert("Please input a positive number.");
                        //             } else if ($_POST['budget'] >= 0 && $_POST['budget'] < 2500) {
                        //                 alert("Sorry we don't have any suggestion for your budget range.");
                        //             } else if ($_POST['budget'] >= 2500 && $_POST['budget'] < 5000) {
                        //                 $query = "SELECT * FROM `presets` WHERE total_price < 5000;";
                        //             } else if ($_POST['budget'] >= 5000 && $_POST['budget'] < 10000) {
                        //                 $query = "SELECT * FROM `presets`WHERE total_price < 10000;";
                        //             }else{
                        //                 $query = "SELECT * FROM `presets`";
                        //             }
                        //      }


                    var e = document.getElementById("budget");
                        var popular = document.getElementById("populartable");
                        var detail = document.getElementById("detail");
                        var budgetValue = e.value;
                          if (budgetValue < 0) {
                            alert("Please input a positive number.");
                        } else if (budgetValue >= 0 && budgetValue < 2500) {
                            alert("Sorry we don't have any suggestion for your budget range.");
                        } else if (budgetValue >= 2500 && budgetValue < 5000) {
                            a
                        } else if (budgetValue >= 5000 && budgetValue < 10000) {
                            b
                        } else {
                            c
                        }}
                    </script>
                </center>
            </div>

                <br><br><h3>Preset details</h3><br>
                <div name="detail" id="detail">
                <center>

                       <?php
                           $query = "SELECT pre.id as buildid, pre.total_price as totalprice, c.model_name as cname, g.name as gname, m.name as mname, p.name as pname, r.name as rname, s.name as sname
                               FROM `presets` pre join cpus c join gpus g join motherboards m join psus p join rams r join storages s WHERE pre.cpu = c.id AND pre.gpu = g.id AND pre.psu = p.id AND pre.motherboard = m.id AND pre.ram = r.id AND pre.storage = s.id";

                            // if(isset($_POST['submit'])){
                            // if ($budget < 0) {
                            //     alert("Please input a positive number.");
                            // } else if ($budget >= 0 && $budget < 2500) {
                            //     alert("Sorry we don't have any suggestion for your budget range.");
                            // } else if ($budget >= 2500 && $budget < 5000) {
                            //     $query = "SELECT pre.id as buildid, pre.total_price as totalprice, c.model_name as cname, g.name as gname, m.name as mname, p.name as pname, r.name as rname, s.name as sname
                            //    FROM `presets` pre join cpus c join gpus g join motherboards m join psus p join rams r join storages s WHERE pre.cpu = c.id AND pre.gpu = g.id AND pre.psu = p.id AND pre.motherboard = m.id AND pre.ram = r.id AND pre.storage = s.id
                            //     AND totalprice <5000";
                            // } else if ($budget >= 5000 && $budget < 10000) {
                            //     $query = "SELECT pre.id as buildid, pre.total_price as totalprice, c.model_name as cname, g.name as gname, m.name as mname, p.name as pname, r.name as rname, s.name as sname
                            //    FROM `presets` pre join cpus c join gpus g join motherboards m join psus p join rams r join storages s WHERE pre.cpu = c.id AND pre.gpu = g.id AND pre.psu = p.id AND pre.motherboard = m.id AND pre.ram = r.id AND pre.storage = s.id
                            //     AND totalprice <10000";
                            // }else{
                            //    $query = "SELECT pre.id as buildid, pre.total_price as totalprice, c.model_name as cname, g.name as gname, m.name as mname, p.name as pname, r.name as rname, s.name as sname
                            //    FROM `presets` pre join cpus c join gpus g join motherboards m join psus p join rams r join storages s WHERE pre.cpu = c.id AND pre.gpu = g.id AND pre.psu = p.id AND pre.motherboard = m.id AND pre.ram = r.id AND pre.storage = s.id";
                            // }}

                                echo'<table border="0" cellspacing="2" cellpadding="2" >
                                   <tr>
                                       <td> <font face="Arial">Build ID</font> </td>
                                       <td> <font face="Arial">Total Price</font> </td>
                                       <td> <font face="Arial">CPU</font> </td>
                                       <td> <font face="Arial">GPU</font> </td>
                                       <td> <font face="Arial">Motherboard</font> </td>
                                       <td> <font face="Arial">PSU</font> </td>
                                       <td> <font face="Arial">RAM</font> </td>
                                       <td> <font face="Arial">Storage</font> </td>

                                   </tr>';
=======
        <form action="post" method="get" style="text-align: center;">
            <input type="text" id="budget" name="budget" class="input" placeholder="Put you budget here">
            <input type="submit" class="button" value="Submit">
        </form><br>
        <div class=flextext><p>Presets    sort by:</p></div> 
        <br>
        
         <center>
          <table>
            @foreach($presets as $data)
            <tr>    
              <th>{{$data->id}}</th>
              <th>{{$data->totalprice}}</th>
            </tr>
            @endforeach
          </table></center><br>
>>>>>>> cb5cabf0324da650218830df4d5a4ee55270fcb0

                    

         <!-- Details section -->









    </body>
