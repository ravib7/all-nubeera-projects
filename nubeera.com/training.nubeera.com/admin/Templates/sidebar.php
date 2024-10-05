<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion " id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
      <img height="40" width="50" src="../img/MainPage/logo3.png"/>
    </div>
    <div class="sidebar-brand-text mx-1">ADMINISTRATOR</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    Nubeera Training
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Course</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Course Management</h6>
        <a class="collapse-item" href="#" data-toggle="modal" data-target="#createCategoryModal">Create Category</a>
        <a class="collapse-item" href="#">Edit Category details</a>
        <a class="collapse-item" href="createCourse.php">Create  Courses</a>
        <a class="collapse-item" href="editCourse.php">Edit Course details</a>
       
      </div>
    </div>
  </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#students" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-users"></i>
        <span>Students</span>
      </a>
      <div id="students" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Students Management</h6>
          <a class="collapse-item" href="#">All Students Details</a>
          <a class="collapse-item" href="#">Active Students Details</a>
        </div>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Instructor" aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-user"></i>
        <span>Instructor</span>
      </a>
      <div id="Instructor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Instructor Management</h6>
          <a class="collapse-item" href="addInstructor.php">Add Instructor</a>
          <a class="collapse-item" href="editInstructorTable.php">Edit Instructor</a>
        </div>
      </div>
    </li>



  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities3" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-credit-card"></i>
      <span>Payments</span>
    </a>
    <div id="collapseUtilities3" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Payments</h6>
        <a class="collapse-item" href="paymentHistory.php">All Payments</a>
      </div>
    </div>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Heading -->
  <div class="sidebar-heading">
    Nubeera Products
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#products" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Products</span>
    </a>
    <div id="products" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Products Management</h6>
        <a class="collapse-item" href="#">Active Products</a>
        <a class="collapse-item" href="#">List of Buyers</a>

      </div>
    </div>
  </li>



  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Products2" aria-expanded="true" aria-controls="collapseUtilities">
      <i class="fas fa-fw fa-credit-card"></i>
      <span>Payments</span>
    </a>
    <div id="Products2" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Payments</h6>
        <a class="collapse-item" href="paymentHistory.php">Payment History</a>

      </div>
    </div>
  </li>


  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->





