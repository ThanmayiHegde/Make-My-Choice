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
              <span class="text">Our All time strengths</span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Infrastructure</div>
            <div class="number">$12,00</div>
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
              <span class="text">Up always</span>
            </div>
          </div>
          
        </div>
      </div>

      <div class="top-sales box">
        <div class="recent-sales box">
            <table class="tb" style="width:100%;">
                <thead>
                    <tr style="color:white;background-color:DarkCyan;font-size:30px;">
                        <th width="100px">Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Grade</th>
                        <th>Date of Join</th>
                        <th>Batch</th>
                        <th>Depatment</th>
                        <th>Email</th>
                        <th>Feedback Count</th>
                        <th>Mode</th>
                        <th>About College</th>
                        <th>About Faculty</th>
                        <th>Recommendation</th>
                        <th>Preferences</th>
                        <th>Suggestion</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $con = mysqli_connect('username','password','');
                        mysqli_select_db($con,'feedback');
                        $user = $_SESSION['id'];
                        $s = "select student.std_id,F_name,L_name,Gender,Grade,DOJ,Batch,Department,email,count,happy,about_college,about_faculty,recommend,preference,suggestions from student inner join sfeed on student.std_id = sfeed.std_id where student.user = '$user' and sfeed.count = (select MAX(count) from sfeed)";
                        $s1 = mysqli_query($con,$s);
                        if(mysqli_num_rows($s1)>0)
                        {
                            foreach($s1 as $ss)
                            {
                                ?>
                                <tr>
                                    <td style="text-align: center"><?= $ss['std_id']?></td>
                                    <td style="text-align: center"><?= $ss['F_name']?></td>
                                    <td style="text-align: center"><?= $ss['L_name']?></td>
                                    <td style="text-align: center"><?= $ss['Gender']?></td>
                                    <td style="text-align: center"><?= $ss['Grade']?></td>
                                    <td style="text-align: center"><?= $ss['DOJ']?></td>
                                    <td style="text-align: center"><?= $ss['Batch']?></td>
                                    <td style="text-align: center"><?= $ss['Department']?></td>
                                    <td style="text-align: center"><?= $ss['email']?></td>
                                    <td style="text-align: center"><?= $ss['count']?></td>
                                    <td style="text-align: center"><?= $ss['happy']?></td>
                                    <td style="text-align: center"><?= $ss['about_college']?></td>
                                    <td style="text-align: center"><?= $ss['about_faculty']?></td>
                                    <td style="text-align: center"><?= $ss['recommend']?></td>
                                    <td style="text-align: center"><?= $ss['preference']?></td>
                                    <td style="text-align: center"><?= $ss['suggestions']?></td>
                                    <td style="text-align: center">
                                        <a type="submit" href="student_delete.php" onclick="alert('Do you want to delete')">DELETE</a>
                                    </td>
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

