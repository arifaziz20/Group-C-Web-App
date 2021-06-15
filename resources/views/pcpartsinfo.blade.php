<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PC Parts Info') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-indigo-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class>

                    <!DOCTYPE html>
                    <html lang="en" dir="ltr">
                    <head>
                        <meta charset="utf-8">
                        <link rel="stylesheet" href="style.css">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                        <link href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
                        <title>Main Components | Computer Parts for Newbies</title>
                    </head>

                    <body>
                        <h1 class="webTitle">Main Components</h1>
                        <p class="introText">The brain, brawn and heart of your standard computer.
                        <div class="slideshow-container">
                            <div class="mySlides fade">
                                <img class="cardImage" src="{{ asset('Images/motherboard.png') }}" style="width: 210px;">
                                <div class="text">
                                    <p>Motherboard</p>
                                    <a href="#motherboard_section">Learn More</a>
                                </div>
                            </div>
                            <div class="mySlides fade">
                                <img class="cardImage" src="{{ asset('Images/cpu.png') }}" style="width: 300px;">
                                <div class="text">
                                <p>CPU</p>
                            <a href="#cpu_section">Learn More</a>
                            </div>
                            </div>
                            <div class="mySlides fade">
                                <img class="cardImage" src="{{ asset('Images/gpu.png') }}" style="width: 300px;">
                                <div class="text">
                                <p>GPU</p>
                            <a href="#gpu_section">Learn More</a>
                            </div>
                            </div>
                            <div class="mySlides fade">
                                <img class="cardImage" src="{{ asset('Images/ram.png') }}" style="width: 310px; padding-top: 30px;">
                                <div class="text">
                                <p>RAM</p>
                            <a href="#ram_section">Learn More</a>
                            </div>
                            </div>
                            <div class="mySlides fade">
                                <img class="cardImage" src="{{ asset('Images/storage.png') }}" style="width: 240px; padding-left: 30px;">
                                <div class="text">
                                <p>Storage</p>
                            <a href="#storage_section">Learn More</a>
                            </div>
                            </div>
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <hr>
                        <p class="MC_info"
                        style="text-align: center;
                                width: 40%;
                                margin: 60px auto 60px;">
                        The five classic components of a computer―
                        the motherboard, Central Processing Unit (CPU), Graphic Processing Unit (GPU),
                        Random Access Memory (RAM), and the storage― play important roles to support
                        your computer's primary operations. Without these, all that you will be lef
                        with is only a hollow shell of technology! Scroll on to learn more about the
                        means of the brain, brawn and heart of your standard computer.
                        <hr>
                        <div class="readMore_container">
                        <div class="MC_row">
                            <div class="MC_column">
                            <h1 id="motherboard_section" class="compoTitle">Motherboard</h1>
                            <h2 class="subTitle">The heart―</h2>
                            <p class="MC_info" style="margin-top: 50px;">
                            The motherboard is the central of all other main components
                            where circuity wonder flows processes and data to the appropriate components
                            within the computer. In times if it is unable to work properly, the whole
                            system may come to a grinding halt.</p>
                            </div>
                            <div class="MC_column">
                            <div class="fotorama" data-width="400" data-height="350" data-loop='true'>
                                <img src="{{ asset('Images/EATX.png') }}" data-caption='Extended-ATX (12" x 12")'>
                                <img src="{{ asset('Images/motherboard.png') }}" data-caption='Standard-ATX (12" x 9.6")'>
                                <img src="{{ asset('Images/Micro-ATX.png') }}" data-caption='Micro-ATX (9.6" X 9.6")'>
                                <img src="{{ asset('Images/Mini-ATX.png') }}" data-caption='Mini-ATX (6.7" X 6.7")'>
                            </div>
                            </div>
                        </div>
                        <div class="MC_row" style="width: 65.5%; margin-bottom: 60px; margin-top: -60px;">
                            <p class="MC_info" style="text-align: justify; margin-top:-40px;"><span class="moreText">
                            <br><br><strong><u>TYPES OF MOTHERBOARDS</u></strong><br><br><br>
                            <strong>1) XT Motherboards</strong><br><br>XT Stands for eXtended Technology.
                            These are all old model motherboard. In these motherboards, we find old model processor socket LIF
                            (Low Insertion Force) sockets, ram slots Dimms and ISA (Industry Standards Artchitecture) slots,
                            12pin Power Connector and no ports. They have slots type processors, Dimms memory modules, ISA slots
                            for add-on card, and no ports. There are connectors and add-on cards for ports.<br><br><br>
                            <strong>2) AT Motherboards</strong><br><br>AT stands for Advanced Technology Motherboards, which have
                            PGA (Pin Grid Array) Socket, SD Ram slots, 20pin power connector PCI slots and ISA slots.<br><br><br>
                            <strong>3) Baby AT Motherboards</strong><br><br>Baby AT Motherboards have the combination of XT and AT.
                            They have both slot type processor sockets, SD Ram slots and DDR Ram slots, PCI slots and ISA slots,
                            12 Pin power connector and 20 PIN power connector and Ports.<br><br><br>
                            <strong>4) ATX Motherboards</strong><br><br>ATX stands for Advanced Technology eXtended. Latest motherboards all
                            are called as AXT motherboards.Designed by ATX form factor. In this motherboards, we find MPGA Processor Sockets,
                            DDR Ram slots, PCI slots, AGP slots, Primary and secondary IDE interfaces, SATA connectors, 20pin and 24 pin ATX
                            power connector and Ports.<br><br><span></p>
                            <span class="extendBtn">Read More</span>
                        </div>
                        <hr>
                        <div class="MC_row">
                            <div class="MC_column">
                            <h1 id="cpu_section" class="compoTitle" style="text-align: right; padding-right: 50px;">CPU.</h1>
                            <div class="fotorama" data-width="400" data-height="300" data-loop='true'>
                                <img src="{{ asset('Images/cpu.png') }}">
                                <img src="{{ asset('Images/cpu2.png') }}">
                                <img src="{{ asset('Images/cpu3.png') }}">
                            </div>
                            </div>
                        <div class="MC_column">
                            <h2 class="subTitle"><br><br><br>The brain―</h2>
                            <p class="MC_info">Acting as the computer's intellect and brain, the Central
                            Processing Unit also known as the CPU does the computing and processing works
                            of the computer.<span class="moreText"><br><br>The CPU is a chip that sits in a special
                            seat (socket) located on the main circuit board (motherboard or mainboard) inside the device. It’s
                            distinctly separate from the memory, which is where it temporarily stores information. It’s also separate
                            from the graphics card or graphics chip, which renders all video and 3D graphics displayed on your screen.
                            <br><br>CPUs are built by placing billions of microscopic
                            transistors onto a single computer chip. Those transistors allow it to make the calculations it need
                            to run programs that are stored on your system’s memory. They’re effectively minute gates that switch on
                            or off, thereby conveying the ones or zeros that translate into everything you do with the device,
                            be it watching videos, or writing an email.</span></p>
                            <span class="extendBtn">Read More</span>
                            </div>
                        </div>
                        <div class="MC_row">
                        <div class="MC_column">
                            <h2 class="subTitle" style="text-align: right;"><br><br><br>The graphics―</h2>
                            <p class="MC_info" style="text-align: right;">Formally known as the Graphic Processing Unit,<br>
                            the GPU processes all the graphical data of your computer varying from programs'
                            interface to <br>gaming visuals and experience.<span class="moreText"><br><br>
                            The graphics processing unit (or GPU for short) is responsible for handling everything that gets
                            transferred from the PC internals to the connected display. Whether you happen to be gaming, editing
                            video or simply staring at your desktop wallpaper, everything is being rendered by the GPU.<br><br>
                            You don't actually need a dedicated card to supply content to a monitor. If you have a laptop, odds are
                            good it has an integrated GPU — one that's part of the processor's chipset. These smaller and less powerful
                            solutions are absolutely perfect for the desktop environment, low-power devices and instances where it's
                            simply not worth the investment on a graphics card.</span></p>
                            <span class="extendBtn" style="float: right; margin-bottom: 30px;">Read More</span>
                            </div>
                        <div class="MC_column">
                            <h1 id="gpu_section" class="compoTitle" style="padding-left: 45px;">GPU.</h1>
                            <div class="fotorama" data-width="400" data-height="400" data-loop='true'>
                                <img src="{{ asset('Images/gpu.png')}}">
                                <img src="{{ asset('Images/gpu2.png') }}">
                                <img src="{{ asset('Images/gpu3.png') }}">
                            </div>
                            </div>
                            </div>
                            <hr>
                            <div class="MC_row">
                            <div class="MC_column">
                                <h1 id="ram_section" class="compoTitle" style="text-align: right; padding-right: 30px;">RAM.</h1>
                                <div class="fotorama" data-width="400" data-height="400" data-loop='true'>
                                <img src="{{ asset('Images/ram.png') }}">
                                <img src="{{ asset('Images/ram2.png') }}">
                                </div>
                            </div>
                        <div class="MC_column">
                            <h2 class="subTitle"><br><br><br>The memory―</h2>
                            <p class="MC_info">Random Access Memory, also known as volatile memory, stores
                                data of your frequently accessed programs and processes.<span class="moreText"><br><br>
                                RAM being a volatile memory means that data is completely erased when the power source is cut.
                                On non-volatile types of memory, like a data drive, stored data is preserved in the absence of electricity.
                                Even though RAM is cleared every time you reboot, memory management has a significant impact on the performance
                                of your system.<br><br>RAM is made up of tiny capacitors and transistors capable of holding an electric charge
                                that represents bits of data, similar to processors and other parts of your computer. This electrical charge
                                needs to be constantly refreshed. If it’s not, the capacitors lose their charge very quickly and the data disappears from RAM.</span></p>
                                <span class="extendBtn">Read More</span>
                            </div>
                            </div>

                        <div class="MC_row">
                        <div class="MC_column">
                            <h2 class="subTitle" style="text-align: right;"><br><br><br>The space capacity―</h2>
                            <p class="MC_info" style="text-align: right;">Hand in hand with RAM, data storage is where your data and
                                program innards reside. Data storage can be in both Hard Disk Drives (HDD) or Solid State Drives (SSD).<br><br><span class="moreText">
                                HDDs are an older technology that was initially introduced by IBM almost 60 years ago. It makes use of magnetism to store data.
                                HDDs have a rotating platter that spins at high speeds while a read/write head is placed above it which reads and writes data
                                on the spinning platter. The performance of an HDD is dependent on the spinning speed of its platter.<br><br>
                                SSDs utilize NAND-based flash memory which is a non-volatile memory type. It can keep the data stored on it even after the disk has
                                been turned off. An SSD has an embedded processor which is termed as a controller. It is used for performing various operations which
                                are related to data reading and writing. The faster the controller is the faster are the data read and write speeds.</span></p>
                                <span class="extendBtn" style="float: right; margin-bottom: 30px;">Read More</span>
                            </div>
                        <div class="MC_column">
                                <h1 id="storage_section" class="compoTitle" style="padding-left: 45px;">Storage.</h1>
                                <div class="fotorama" data-width="400" data-height="400" data-loop='true'>
                                <img src="{{ asset('Images/storage.png') }}" data-caption='Hard Disk Drive (HDD)'>
                                <img src="{{ asset('Images/ssd.png') }}" data-caption='Solid State Drive (SSD)'>
                                </div>
                            </div>
                            </div>
                        </div>

                            <script>
                            const parentContainer =  document.querySelector('.readMore_container');
                            parentContainer.addEventListener('click', event=>{
                                const current = event.target;
                                const isExtendBtn = current.className.includes('extendBtn');
                                if(!isExtendBtn) return;
                                const currentText = event.target.parentNode.querySelector('.moreText');
                                currentText.classList.toggle('moreText_show');
                                current.textContent = current.textContent.includes('Read More') ? "Read Less" : "Read More";
                            })

                            var slideIndex = 1;
                            showSlides(slideIndex);
                            // Next/previous controls
                            function plusSlides(n) {
                            showSlides(slideIndex += n);
                            }
                            // Thumbnail image controls
                            function currentSlide(n) {
                            showSlides(slideIndex = n);
                            }
                            function showSlides(n) {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            if (n > slides.length) {slideIndex = 1}
                            if (n < 1) {slideIndex = slides.length}
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            slides[slideIndex-1].style.display = "block";
                            }
                            </script>

                        <script src="{{ asset('general.js') }}"></script>
                    </body>
                    </html>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
