<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Popular Presets') }}
        </h2>
    </x-slot>
    <div class="col-sm-12">
        @if(session()->get('success'))
          <div class="alert text-center">
                {{ session()->get('success') }}
          </div>
        @endif
    </div>
        <title>popularpresets</title>
        <?php
        $GLOBALS['filteredquery'] = "SELECT * FROM `presets`";

        ?>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                color:white;

            }

            .alert
            {
                border: 0;
                border-radius: 0;
                color:black;
                padding: 10px 15px;
                font-size: 20px;
                background-color: paleturquoise;
            }
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
            border: 1px solid white;
            }
            table {
            width: 100%;
            border-collapse: collapse;
            width:70%;
            text-align: center;
            background: #000;
            }
        </style>



    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-indigo-900 border-b border-gray-200 text-white text-center">
        <h1 class="pptitle">Popular Presets</h1><br><br>
        <p style="margin: auto;text-align:center;">Put your budget below to get a recommedation from us or view the popular presets</p><br><br>
        <hr style="width:80%; height:0px; margin:0 auto;background-color:white;color: white;"><br>
        <form style="text-align: center;" method="get" action="popularpreset/budget">
        @csrf
            <input type="text" id="budget" name="budget"  placeholder="Put you budget here" class="bg-black text-white">
            <button  name="submit" value="Submit" class="block my-0 mx-auto nline-flex items-center px-4 py-2 bg-black border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 my-5">Submit</button>
        </form><br>
        <p style="text-align: center;">Presets </p><br>



             <div>
                <center>
                     <?php
                        $username = "root";
                        $password = "root";
                        $database = "cp4beginners";
                        $mysqli = new mysqli("localhost", $username, $password, $database);
                        $query = "SELECT * FROM `presets`";

                    ?>
                    <table border="0" cellspacing="2" cellpadding="2">
                        <tr>
                            <td> <font face="Arial">Build ID</font> </td>
                            <td> <font face="Arial">Total Price</font> </td>
                        </tr>
                        <?php

        //            function filterBudget(){

        //          if(isset($_POST['budget'])){
        //         $budgets =  $_POST['budget'];
        //         if ($budgets < 0) {
        //             echo "Please input a positive number.";
        //         } else if ($budgets >= 0 && $budgets < 2500) {
        //             echo "Sorry we don't have any suggestion for your budget range.";
        //         } else if ($budgets >= 2500 && $budgets < 5000) {
        //          $query = "SELECT * FROM `presets` WHERE total_price < 5000;";
        //         } else if ($budgets >= 5000 && $budgets < 10000) {
        //          $query = "SELECT * FROM `presets` WHERE total_price < 10000;";
        //         } else {
        //          $query = "SELECT * FROM `presets`";
        //         }
        //                                     }
        //    }

                    if(isset($GLOBALS['filteredpresets'])){

                        foreach ($GLOBALS['filteredpresets'] as $count => $preset) {

                            $field1name = "Build".$preset->id;
                                $field2name = "RM".$preset->total_price;

                                echo '<tr>
                                            <td >'.$field1name.'</td>
                                            <td>'.$field2name.'</td>
                                        </tr>';

                        }

                    } else{

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
{{-- COMMENT STARTS --}}
                            {{-- <?php

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

                       <?php
                           $query = "SELECT pre.id as buildid, pre.total_price as totalprice, c.model_name as cname, g.name as gname, m.name as mname, p.name as pname, r.name as rname, s.name as sname
                               FROM `presets` pre join cpus c join gpus g join motherboards m join psus p join rams r join storages s WHERE pre.cpu = c.id AND pre.gpu = g.id AND pre.psu = p.id AND pre.motherboard = m.id AND pre.ram = r.id AND pre.storage = s.id";

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
                        ?> --}}
{{-- COMMENT ENDS --}}
                        </div>
                    </div>
                </div>
            </div>
</x-app-layout>
