<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="style2.css">
    
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Organisation</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="admin_student.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Students</span>
          </a>
        </li>
        <li>
          <a href="admin_parent.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Parents</span>
          </a>
        </li>
        <li>
          <a href="admin_faculty.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Faculty</span>
          </a>
        </li>
        <li>
          <a href="admin_public.php">
            <i class='bx bx-user' ></i>
            <span class="links_name">Public</span>
          </a>
        </li>
        
        <li class="log_out">
          <a href="organisation.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
      <div class="profile-details">
        <!--<img src="images/profile.jpg" alt="">-->
        <span class="admin_name">Organisation</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Students</div>
            <div class="number">5,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"></span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Faculty</div>
            <div class="number">964</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"></span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Our Infrastructure</div>
            <div class="number">$1,200</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"></span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Alumni</div>
            <div class="number">11,086</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text"></span>
            </div>
          </div>
          
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title"><H1><B><i>ORGANISATIONS</i></B></H1></div>
          
          <div class="sales-details">
           <p><H2><B>Organization is the structural framework of duties and responsibilities required<br> of personnel in performing various functions with a view to achieve business <br>goals through organization. Management tries to combine various business activities <br>to accomplish predetermined goals.</B></H2></p> 
           
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div style="height: 500px; width: 900px;background-image:url(https://thumbs.dreamstime.com/b/planning-organization-tasks-board-group-people-make-plan-vector-illustration-108447617.jpg);background-repeat: no-repeat;">
          
          </div>
          
          
        </div>
        <div class="top-sales box">
          <div class="title"><b>Golden Words!!!!</b></div>
          <p><H2><B>According to Louis Allen, “Organization is the process of identifying and grouping work to be performed, defining and delegating responsibility and authority and establishing relationships for the purpose of enabling people to work most effectively together in accomplishing objectives.” In the words of Allen, organization is an instrument for achieving organizational goals. The work of each and every person is defined and authority and responsibility is fixed for accomplishing the same.</B></H2></p> 
          <br>
          <br>
          <br>
          <div style="height: 500px; width: 900px;background-image:url(https://blog.vantagecircle.com/content/images/2019/06/Types-of-Meetings.png);background-repeat: no-repeat;"></div>
        </div>
      </div>
    </div>
  </section>

  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

