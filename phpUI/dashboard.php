<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="..//css/table.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <title>Your Dashboard</title>
</head>
<style>
    body {
      padding-top: 56px; /* Adjust based on your navbar height */
    }

    @media (min-width: 768px) {
      body {
        padding-top: 0px;
      }
    }

    #sidebar {
      height: 100vh;
      position: fixed;
      width: 250px;
      transition: all 0.3s;
      color: white;
    }
    #sidebar a {
    text-decoration: none;
    font-weight: bold;
    line-height: 40px;
    
    }
    
    [class*="hov"]:hover{
    background-color:  #343a4039;
    text-align: center;
    transition: 0.3s;
    }
    [class*="ok"]{
    background-color:  #343a4039;
    text-align: center;
    transition: 0.3s;
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    border-radius: 8px;
    }

    #contents {
      margin-left: 250px; /* Adjust based on your sidebar width */
      transition: all 0.3s;
    }

    @media (max-width: 990px) {
      #sidebar {
        margin-left: -250px;
      }

      #contents {
        margin-left: 0;
      }
      .navbar-nav {
        position: absolute;
        top: 56px;
        left: 0;
        width: 100%;
        background-color: #343a40;
        z-index: 1000;
        padding-bottom: 10px;
        padding: 5px;
      }
   
    }
   
    #tablet{
        margin-top: 200px;
      }
      body{
        overflow-y: auto;
      }

      [class*="ok"]:hover{
        background: white;
        color: black;
        border: solid 2px;
      }
 
  </style>
<body>
    
<!-- Left Sidebar -->
<nav id="sidebar" class="bg-primary">
  <div class="p-0 mt-5">
  <h1>Task Management System</h1>
    <ul class="list-unstyled">

      <li>
    <div class="hov-sm-12" onclick="showTab(1)">
        <a href="#" class="text-white">Dashboard</a>
        </div>
      </li>
      <li>
      <li>
    <div class="hov-sm-2" onclick="showTab(2)">
        <a href="#" class="text-white" >Projects</a>
        </div>
      </li>
      <li>
      <li>
    <div class="hov-sm-2 " onclick="showTab(3)">
        <a href="#" class="text-white" >Task</a>
        </div>
      </li>
      <li>
      <li>
    <div class="hov-sm-2">
        <a href="#" class="text-white">Report</a>
        </div>
      </li>
      <li>
      <li>
    <div class="hov-sm-2">
        <a href="#" class="text-white" onclick="showTab(5)">Teams</a>
        </div>
      </li>
      <!-- Add more sidebar items as needed -->
    </ul>
  </div>
</nav>
<!-- Main Content Area -->
<div id="contents" class="container-fluid">
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-2">
    <button type="button" id="sidebarCollapse" class="btn btn-dark">
    <i class="bi bi-arrow-bar-right"></i>
    </button>
    <div class="btn-group">
    <a class="nav-link dropdown-toggle" style="color: white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"><i class="bi bi-person-square"></i> Profile</a>
        <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#" onclick="showTab(4)">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
          </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

   

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item ">
          <a class="nav-link active" aria-current="page" href="#" onclick="showTab(1)">Home</a>
        </li>
        

        </li class="nav-item">

      <form class="d-flex float-end">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    
      </li>
      
      
        
      </ul>
  </div>

  </nav>
  
 
<div class="contentinent mt-4">

  <div class="tab-content tab1-content active">

        <div class="container overflow-hidden mt-4">
        <div class="row gy-3">
        <div class="col-md-2">
          <div id="pending" class="ok p-3 bg-primary text-white "  onclick="showTab(3)" > <i class="bi bi-clock-history" style="font-size: 50px; background-color: transparent;" ></i>Pending Task</div>
        </div>
        <div class="col-md-2">
          <div id="complete" class="ok p-3 bg-success text-white"  onclick="showTab(3)"> <i class="bi bi-clipboard-check" style="font-size: 50px; background-color: transparent;"></i> Completed Task</div>
        </div>
        <div class="col-md-2">
          <div class="ok p-3 bg-danger text-white" onclick="showTab(3)"> <i class="bi bi-briefcase" style="font-size: 50px; background-color: transparent;"></i>All Task</div>
        </div>
        <div class="col-md-2">
          <div id="team" class="ok p-3 bg-warning text-dark" onclick="showTab(5)"> <i class="bi bi-microsoft-teams" style="font-size: 50px; background-color: transparent;"></i> Teams</div>
        </div>
        <div class="col-md-2">
          <div id="project" class="ok p-3 bg-info text-dark" onclick="showTab(2)"><i class="bi bi-journal" style="font-size: 50px; background-color: transparent;"></i>Projects</div>
        </div>
        

      </div>

      </div>
            
    </div>
                
    <div class="tab-content tab2-content">
    <?php   
               include 'project.php';
     ?>
    </div>

     <div class="tab-content tab3-content">
              
      <?php 
              include 'taskui.php';
                    
      ?>
                   
                
      </div>
      <div class="tab-content tab4-content">
              

      <?php 
              include 'profile.php';
                    
      ?>      

      </div>
      

      <div class="tab-content tab5-content">
      <?php 
              include 'team.php';
                    
      ?>   
          </div>

 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    document.getElementById('sidebarCollapse').addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('contents');

    if (sidebar.style.marginLeft === '-250px') {
      sidebar.style.marginLeft = '0';
      content.style.marginLeft = '250px';
      
    } else {
      sidebar.style.marginLeft = '-250px';
      content.style.marginLeft = '0';
      
    }
  });
  function openForm(){
    document.getElementById('overlayMed').style.display = 'flex';
  }
  function closeForm(){
    document.getElementById('overlayMed').style.display = 'none';
  }
  function openprojForm(){
    document.getElementById('overlayProj').style.display = 'flex';
  }
  function closeprojForm(){
    document.getElementById('overlayProj').style.display = 'none';
  }
  function openprojTeam(){
    document.getElementById('overlayTeam').style.display = 'flex';
  }
  function closeprojTeam(){
    document.getElementById('overlayTeam').style.display = 'none';
  }

  function showTab(tabNumber) {
   
     document.querySelectorAll('.tab-content').forEach(function(content) {
         content.classList.remove('active');
     });

    
     document.querySelector('.tab' + tabNumber + '-content').classList.add('active');
 }
               	  
 var selectElement = document.getElementById("mySelect");
  var displayDiv = document.getElementById("selectedOptions");
  var selectedInput = document.getElementById("selectedInput");

  // Initialize an array to store selected options
  var selectedOptions = [];

  // Add event listener to the select element
  selectElement.addEventListener("change", function() {
    // Get the selected options and add them to the array
    var newSelections = Array.from(selectElement.selectedOptions);
    selectedOptions = selectedOptions.concat(newSelections);

    // Update the display div with the selected options
   

    // Update the value of the input field with selected options
    selectedInput.value = selectedOptions.map(function(option) {
      return option.text;
    }).join(", "); // Use join to concatenate the option texts with commas
  });

</script>
</body>
</html>