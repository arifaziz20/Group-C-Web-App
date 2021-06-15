<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Components') }}
        </h2>
    </x-slot>

    <style>
        table, th, td {
            border: 2px solid black;
            text-align: center;
        }
        th, td {
            padding: 6px;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="#">storages</a> Heya! <br> <br>
                    <?php
                    $username = "root";
                    $password = "root";
                    $database = "cp_db";
                    $mysqli = new mysqli("localhost", $username, $password, $database);
                    $query = "SELECT * FROM `storages`";


                    echo '<table border="0" cellspacing="2" cellpadding="2">
                        <tr>
                            <td> <font face="Arial">Name</font> </td>
                            <td> <font face="Arial">Capacity</font> </td>
                            <td> <font face="Arial">Type</font> </td>
                            <td> <font face="Arial">Form factor</font> </td>
                            <td> <font face="Arial">Price</font> </td>
                        </tr>';

                    if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_assoc()) {
                            $field1name = $row["name"];
                            $field2name = $row["capacity"];
                            $field3name = $row["type"];
                            $field4name = $row["form_factor"];
                            $field5name = "RM".$row["price"];
                            $field6name = "Add";

                            echo '<tr>
                                    <td>'.$field1name.'</td>
                                    <td>'.$field2name.'</td>
                                    <td>'.$field3name.'</td>
                                    <td>'.$field4name.'</td>
                                    <td>'.$field5name.'</td>
                                    <td>'.$field6name.'</td>
                                </tr>';
                        }
                        $result->free();
                    }
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
