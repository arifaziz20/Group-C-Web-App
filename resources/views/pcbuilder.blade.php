<link rel="stylesheet" href="style.css">
<style>
.spre
{
  position: absolute;
  right:100px;
  top: 550px;
  border: 2px solid white;
  padding: 4px 12px 16px 12px;
  color:indigo;
  background-color:white;
  height: 35px;
  border-radius: 10px;
}

.totalp
{
  position: absolute;
  left:20px;
  top: 500px;
}

#builder {
  width: 90%;
  height: 900px;
  display: flex;
  flex-wrap: wrap;
  margin: auto;
}

#builder div {
  width: 16.66%;
  height: 50px;
  flex:19%;

}

.pick h4
{
  text-align: left;
  margin-bottom: 4px;
  margin-top: 35px;

}

.pick hr
{
  background-color:white;
  border: 2px solid white;
  border-radius: 2px;
  margin-top:0px;
}

.pick button{
  margin:10px;
  border: 2px solid white;
  padding:4px;
  color:indigo;
  background-color:white;
}

.icon
{
  width: 10%;
  list-style-type:none;
  margin-top: 30px;
  height:100px;
}

.icon img
{
  height: 110px;
}
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PC Builder') }}
        </h2>
    </x-slot>

    <div class="col-sm-12">
        @if(session()->get('success'))
          <div class="alert alert-success text-center">
                {{ session()->get('success') }}
          </div>
        @endif
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-indigo-900 h-full overflow-hidden shadow-sm sm:rounded-lg">
                <div style="color:white;">

                    <?php
                        $username = "root";
                        $password = "root";
                        $database = "cp_db";
                        $mysqli = new mysqli("localhost", $username, $password, $database);
                        $querycpu = "SELECT p.cpu as cid,cpu.model_name as cname,cpu.price as cp FROM `pc_builders` as p inner join `cpus` as cpu on p.cpu = cpu.id";
                        $querymobo = "SELECT p.motherboard as mid,mobo.name as mname,mobo.price as mp FROM `pc_builders` as p inner join `motherboards` as mobo on p.motherboard = mobo.id";
                        $queryram = "SELECT p.ram as rid,ram.name as rname,ram.price as rp FROM `pc_builders` as p inner join `rams` as ram on p.ram = ram.id";
                        $querygpu = "SELECT p.gpu as gid,gpu.name as gname,gpu.price as gp FROM `pc_builders` as p inner join `gpus` as gpu on p.gpu = gpu.id";
                        $queryhdd = "SELECT p.storage as hid,hdd.name as hname,hdd.price as hp FROM `pc_builders` as p inner join `storages` as hdd on p.storage = hdd.id";
                        $querypsu = "SELECT p.psu as pid,psu.name as pname,psu.price as pp FROM `pc_builders` as p inner join `psus` as psu on p.psu = psu.id";
                        $total = 0;
                        if ($result = $mysqli->query($querycpu)) {
                            while ($row = $result->fetch_assoc()) {
                                $cpuid = $row["cid"];
                                $cpuname = $row["cname"];
                                $cpuprice= $row["cp"];
                                $total+=$cpuprice;

                            }
                            $result->free();
                        }
                        if ($result = $mysqli->query($querymobo)) {
                            while ($row = $result->fetch_assoc()) {
                                $moboid = $row["mid"];
                                $moboname = $row["mname"];
                                $moboprice= $row["mp"];
                                $total+=$moboprice;

                            }
                            $result->free();
                        }
                        if ($result = $mysqli->query($queryram)) {
                            while ($row = $result->fetch_assoc()) {
                                $ramid = $row["rid"];
                                $ramname = $row["rname"];
                                $ramprice= $row["rp"];
                                $total+=$ramprice;

                            }
                            $result->free();
                        }
                        if ($result = $mysqli->query($querygpu)) {
                            while ($row = $result->fetch_assoc()) {
                                $gpuid = $row["gid"];
                                $gpuname = $row["gname"];
                                $gpuprice= $row["gp"];
                                $total+=$gpuprice;
                            }
                            $result->free();
                        }
                        if ($result = $mysqli->query($queryhdd)) {
                            while ($row = $result->fetch_assoc()) {
                                $hddid = $row["hid"];
                                $hddname = $row["hname"];
                                $hddprice= $row["hp"];
                                $total+=$hddprice;
                            }
                            $result->free();
                        }
                        if ($result = $mysqli->query($querypsu)) {
                            while ($row = $result->fetch_assoc()) {
                                $psuid = $row["pid"];
                                $psuname = $row["pname"];
                                $psuprice= $row["pp"];
                                $total+=$psuprice;
                                }
                                $result->free();
                        }

                    ?>

                    <div class="textBox">
                        <p style="text-align:center;margin-top:40px;margin-bottom:40px;">
                            Choose any computer parts that you want to estimate the total prices.
                        </p>
                        <center><hr width="80%" style="background-color:white;border: 1.5px solid white;"></center>
                            <form method="POST" action="pcbuilder/save">

                            <div id="builder">
                                <div class="pick">
                                    <h4>CPU</h4>
                                    <hr>
                                    <?php
                                        if(isset ($cpuid) ){
                                            echo $cpuname .'&nbsp&nbsp&nbspRM'.$cpuprice;
                                            echo '<input hidden name="cpu" value='.$cpuid.' placeholder='.$cpuname. '&nbsp&nbsp&nbsp' .$cpuprice.'>';
                                        } else
                                        echo '<button>
                                            <a href="/components/cpus">
                                                Choose a CPU +
                                            </a>
                                        </button>';
                                    ?>
                                    <h4>Motherboard</h4>
                                    <hr>
                                    <?php
                                        if( isset ($moboid) ){
                                            echo $moboname .'&nbsp&nbsp&nbspRM'. $moboprice;
                                            echo '<input hidden name="motherboard" value='.$moboid.' placeholder='.$moboname. '&nbsp&nbsp&nbsp' .$moboprice.'>';
                                        } else
                                        echo '<button>
                                            <a href="/components/motherboards">
                                                Choose a Motherboard +
                                            </a>
                                        </button>';
                                    ?>
                                    <h4>RAM</h4>
                                    <hr>
                                    <?php
                                        if( isset ($ramid) ){
                                            echo $ramname .'&nbsp&nbsp&nbspRM'. $ramprice;
                                            echo '<input hidden name="ram" value='.$ramid.' placeholder='.$ramname. '&nbsp&nbsp&nbsp' .$ramprice.'>';
                                        } else
                                        echo '<button>
                                            <a href="/components/rams">
                                                Choose a RAM +
                                            </a>
                                        </button>';
                                    ?>
                                </div>

                                <div class="icon">
                                    <center>
                                        <li>
                                            <img style="width: 40%;" src="{{ asset('Images/cpu.svg') }}">
                                        </li>
                                    </center>
                                    <center>
                                        <li>
                                            <img style="width: 40%;" src="{{ asset('Images/mobo.svg') }}">
                                        </li>
                                    </center>
                                    <center>
                                        <li>
                                            <img style="width: 40%;" src="{{ asset('Images/ram.svg') }}">
                                        </li>
                                    </center>
                                </div>

                                <div>
                                    <center><img style="width: 80%;margin-top: 35px;" src="{{ asset('Images/PC.svg') }}"></center>
                                </div>

                                <div class="icon">
                                    <center>
                                        <li>
                                            <img style="width: 40%;" src="{{ asset('Images/gpu.svg') }}">
                                        </li>
                                    </center>
                                    <center>
                                        <li>
                                            <img style="width: 40%;" src="{{ asset('Images/hdd.svg') }}">
                                        </li>
                                    </center>
                                    <center>
                                        <li>
                                            <img style="width: 40%;" src="{{ asset('Images/psu.svg') }}">
                                        </li>
                                    </center>
                                </div>

                                <div class="pick">
                                <h4>GPU</h4>
                                <hr>
                                <?php
                                    if( isset ($gpuid) ){
                                        echo $gpuname.'&nbsp&nbsp&nbspRM'.$gpuprice;
                                        echo '<input hidden name="gpu" value='.$gpuid.' placeholder='.$gpuname. '&nbsp&nbsp&nbsp' .$gpuprice.'>';
                                    } else
                                    echo '<button>
                                        <a href="/components/gpus">
                                            Choose a GPU +
                                        </a>
                                    </button>';
                                ?>
                                <h4>Storage</h4>
                                <hr>
                                <?php
                                    if( isset ($hddid) ){
                                        echo $hddname.'&nbsp&nbsp&nbspRM'.$hddprice;
                                        echo '<input hidden name="storage" value='.$hddid.'placeholder='.$hddname. '&nbsp&nbsp&nbsp'.$hddprice.'>';
                                    } else
                                    echo '<button>
                                        <a href="/components/storages">
                                            Choose a Storage +
                                        </a>
                                    </button>';
                                ?>
                                <h4>PSU</h4>
                                <hr>
                                <?php
                                    if( isset ($psuid) ){
                                        echo $psuname.'&nbsp&nbsp&nbspRM'. $psuprice;
                                        echo '<input hidden name="psu" value='.$psuid.'placeholder='.$psuname. '&nbsp&nbsp&nbsp'.$psuprice.'>';
                                    }
                                    else
                                    echo '<button>
                                        <a href="/components/psus">
                                            Choose a PSU +
                                        </a>
                                    </button>';
                                ?>
                            </div>


                            <h3 class="totalp"> Total price is : RM <?php echo $total; ?></h3>


                            @auth

                            <a class="spre">
                                <button type="submit">Save Preset</button>
                            </a>

                            @else

                            <a class="spre">
                                <button id="btn-guest" type="button">Save Preset</button>
                            </a>

                            @endauth
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    document.getElementById("btn-guest").addEventListener("click", alertGuest);

    function alertGuest()
    {
        alert('Please login or register to use Save Preset function :)')
    }
</script>

<?php
    $mysqli -> close()
?>
