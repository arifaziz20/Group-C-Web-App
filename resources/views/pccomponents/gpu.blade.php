<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Components > GPU') }}
        </h2>
    </x-slot>

    <style>
        table, th, td {
            margin: 2.5rem auto;
            border: 2px solid white;
            text-align: center;
        }
        th, td {
            padding: 10px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-indigo-900 border-b border-gray-200 text-white text-center">
                    <h1 class="text-4xl text-white my-10">
                        List of GPU
                    </h1>
                    <?php
                    $username = "root";
                    $password = "root";
                    $database = "cp_db";
                    $mysqli = new mysqli("localhost", $username, $password, $database);
                    $query = "SELECT * FROM `gpus`";


                    echo '<table border="0" cellspacing="2" cellpadding="2">
                        <tr>
                            <td> <font face="Arial">Name</font> </td>
                            <td> <font face="Arial">Chipset</font> </td>
                            <td> <font face="Arial">Vram</font> </td>
                            <td> <font face="Arial">Memory type</font> </td>
                            <td> <font face="Arial">Length</font> </td>
                            <td> <font face="Arial">Price</font> </td>
                        </tr>';

                    if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_assoc()) {
                            $field1name = $row["name"];
                            $field2name = $row["chipset"];
                            $field3name = $row["vram"];
                            $field4name = $row["memory_type"];
                            $field5name = $row["length"];
                            $field6name = "RM".$row["price"];
                            $field7name = "Add";
                            $id = $row["id"];

                            echo '<tr>
                                    <td>'.$field1name.'</td>
                                    <td>'.$field2name.'</td>
                                    <td>'.$field3name.'</td>
                                    <td>'.$field4name.'</td>
                                    <td>'.$field5name.'</td>
                                    <td>'.$field6name.'</td>
                                    <td><a href="../pcbuilder/addgpu/'.$id.'">'.$field7name.'</a></td>
                                </tr>';
                        }
                        $result->free();
                    }
                    //../pcbuilder/addgpu?id='.$row["id"]

                    //{{ route("pcbuilder/addgpu",'.$row["id"].')}}
                    ?>
                    {{-- <table>
                        <tr>
                            <th>Model Name</th>
                            <th>Manufacturer</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>Ryzen 3 3600</td>
                            <td>AMD</td>
                            <td>RM 300.00</td>
                            <td>Add</td>
                        </tr>
                    </table> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
