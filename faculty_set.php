<?php
    session_start();
?>
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
              <span class="text">The future buds</span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Faculty</div>
            <div class="number">964</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Our All Time Strength</span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Infrastructure</div>
            <div class="number">$1,200</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Our Investements</span>
            </div>
          </div>
         
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Awards</div>
            <div class="number">11 National Level Awards</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up Always</span>
            </div>
          </div>
          
        </div>
      </div>

      <div class="top-sales box">
        <div class="recent-sales box">
            <table class="tb" style="width:100%;">
                <thead>
                    <tr style="color:white;background-color:DarkCyan;font-size:30px;">
                        <th>Employee ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Grade Taught</th>
                        <th>Qualification</th>
                        <th>Expereience</th>
                        
                        <th>Email</th>
                       
                        
          
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $con = mysqli_connect('username','password','');
                        mysqli_select_db($con,'feedback');
                        $user = $_SESSION['id'];
                        
                        $s = "select emp_id,F_Name,L_Name,Gender,Grade_Taught,Qualification,YOE,email from faculty where user = '$user' and emp_id IN ((select emp_id from ffeed ) INTERSECT (select emp_id from ffeed where workload = 'Okay'))";
                        $s1 = mysqli_query($con,$s);
                        if(mysqli_num_rows($s1)>0)
                        {
                            foreach($s1 as $ss)
                            {
                                ?>
                                <tr>
                                    <td style="text-align: center"><?= $ss['emp_id']?></td>
                                    <td style="text-align: center"><?= $ss['F_Name']?></td>
                                    <td style="text-align: center"><?= $ss['L_Name']?></td>
                                    <td style="text-align: center"><?= $ss['Gender']?></td>
                                    <td style="text-align: center"><?= $ss['Grade_Taught']?></td>
                                    <td style="text-align: center"><?= $ss['Qualification']?></td>
                                    <td style="text-align: center"><?= $ss['YOE']?></td>
                                    <td style="text-align: center"><?= $ss['email']?></td>
                                    
                                    
                                    
                                </tr>
                                <?php

                            }
                        }
                        else{
                            ?>
                            <tr>
                                <td colspan="6">No records found</td>
                            </tr>
                            <?php

                        }
                    ?>
                </tbody>

            </table>
                

               
          
          
          
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

