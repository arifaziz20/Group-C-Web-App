# Group-C-Web-App

Part 1 Proposal + Mock-up + 
YouTube Presentation
5%

<h2> Group Members.</h2>

Ahmad Ammar Arif bin Abdul Aziz - 1919933  
Amir Syazwan bin Ramlan - 1913373  
Amirul Afiq bin Shahdan - 1916491  
Muhammad Akmal bin Anuar - 1911967  
Muhammad Ilham Hakimi bin Mohamad Nizam - 1914359  

<h2>Title: Computer Parts for Noobies </h2>

<h2> Introduction of the proposed web application. </h2>
Nowadays, users are overwhelmed by variety option of computer parts to be chosen. Aside from that, some people are not that expert in determining the best computer parts to build their dreamed PC. Thus, our web application offers a solution where users can see what they get for their budget range. Our project concerning on  developing a web application that summarize the collection of PC parts that can be afforded by the users.  In our web application, we have three sections which is PC Builder, Popular Preset and PC Part Info. Our web application also provide details for computer parts which mainly focus on main components. For registered user, they can have the option to create preset by selecting combination of computer parts. Furthermore, user can enter their budget range and the system will calculate it and suggest the best preset available in our records.

<h2> Objectives of the proposed web application. </h2>
<ol>
 <li>To spread the knowledge on the computer hardware.</li>
 <li>To help user decide the best components for their PC.</li>  
 <li>To help user eliminate some choice that are not relevant for them.</li>
 <li>To suggest user a complete set of computer components within their budget range.</li>
</ol>

<h2> Features and functionalities of the proposed web application. </h2>
<ol>
  <li>Navigation bar - navigate user through the web.</li>
  <li>User registration - a user can register with username, password and other details.</li>
  <li>Computer part registration - admin register computer parts in the database.</li>
  <li>Pick by parts - any user can choose from each computers parts that is available in database.</li>
  <li>Authorization - to distinguish between admin & user.
  <li>Create preset - create a preset based on selected computer parts only for registered user & admin.  
  <li>Computer parts finder based on budget - to search set of computer parts that can be purchased within the budget.</li>
</ol>
  
<h2> Model View Controller and Routes & ERD </h2>
 
  <h3>Views</h3>
  
  - __Register__
  - __Login__
  - __Homepage (for user)__
  - __PCBuilder__
       <ul>
         <li>CPU</li>
         <li>RAM</li>
         <li>GPU</li>
         <li>STORAGE</li>
         <li>MOTHERBOARD</li>
         <li>PSU</li>
       </ul>
  - __PopularPreset__
  - __PCPartsInfo__
  - __Admindashboard__
       <ul>
         <li>CPUrecord</li>
         <li>RAMrecord</li>
         <li>GPUrecord</li>
         <li>STORAGErecord</li>
         <li>MOTHERBOARDrecord</li>
         <li>PSUrecord</li>
         <li>Userrecord</li>
         <li>Presetrecord</li>
       </ul>
  - __Components__
       
  <h3>Models (Database)</h3>
  
  - User (including Admin)
    ->username
    ->password
    ->user type    
  - Cpu
    ->model name
    ->manufacturer
    ->price
  - Ram
    ->name
    ->speed
    ->module
    ->price  
  - Gpu
    ->name
    ->chipset
    ->vram
    ->memory type
    ->length
    ->price
  - Storage
    ->name
    ->capacity
    ->price
    ->type
    ->form factor
  - Motherboard
    ->name
    ->socket
    ->form factor
    ->memory max
    ->memory type
    ->memory slot
    ->price
  - Psu (Power supply unit)
    ->name
    ->form factor
    ->wattage
    ->efficiency rating
    ->modular
    ->price
  - Preset
    ->cpu
    ->ram
    ->storage
    ->gpu
    ->psu
    ->motherboard
    ->total price

  <h3>Controllers</h3>
  
  - LoginController - for authentication of users.
  - HomeController - to get general views of website.
  - UsersController - for registration and user database.
  - BuilderController - to return to selected PC parts.
  - AdminDashboardController - to return to Admin dashboard.
  - CpuController - access CPU database.
  - RamController - access RAM database
  - GpuController - access GPU database
  - StorageController - access Storage database.
  - MotherboardController - access Motherboard database.
  - PsuController - access Power Supply Unit database.
  - PresetsController - access preset database.
  - ComponentsController - to return PC components view.
  
  <h3>Routes</h3>
  
  - "/" redirect to "/home" return view home
  - "/login" return view login 
  - "/register" return view register
  - "/pc-builder" return view PC Builder
  - "/popular-presets" return view Popular
  - "/component" return view Components
  - "/component/cpu" return view component cpu
  - "/component/ram" return view component ram
  - "/component/gpu" return view component gpu
  - "/component/motherboard" return view component motherboard
  - "/component/storage" return view component storage
  - "/component/psu" return view component psu
  - "/pc-parts-info" return view pc parts info
  - "/admin" return view admin
  - "/admin/adduser" return view admin_adduser
  - "/admin/edituser" return view admin_edituser
  - "/component/cpu/add" return view cpu_add
  - "/component/ram/add" return view ram_add
  - "/component/gpu/add" return view gpu_add
  - "/component/motherboard/add" return view mb_add
  - "/component/storage/add" return view strg_add
  - "/component/psu/add" return view psu_add
  - "/component/cpu/edit" return view cpu_edit
  - "/component/ram/edit" return view ram_edit
  - "/component/gpu/edit" return view gpu_edit
  - "/component/motherboard/edit" return view mb_edit
  - "/component/storage/edit" return view strg_edit
  - "/component/psu/edit" return view psu_edit

  
  <h3>ER Diagram<h3>
 Properly define the views, controllers, routes and models. Include ERD for your 
 database tables with one-to-many relationship. 
  

<h2> A sequence diagram to represent the interaction of the proposed web application.</h2>


<h2> References.  </h2>
<ol>
  <li>Pick parts. Build your PC. Compare and share. (2021). Pcpartpicker.com; PCPartPicker. https://pcpartpicker.com/</li>
</ol>

