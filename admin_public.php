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
          <a href="#">
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
            <div class="box-topic"><B>MAXIMUM FEEDBACKS</B></div>
            <div class="number">
                <a  style="text-decoration:none" type="button" href="public_max_feed.php">GO....</a>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up from yesterday</span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><b>MAXIMUM RATING</b></div>
            <div class="number">
            <a  style="text-decoration:none" type="button" href="public_rate.php">GO....</a>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Feed Postive ++</span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic"><b>PUBLIC WITH NO-FEEDBACKS</b></div>
            <div class="number">
            <a  style="text-decoration:none" type="button" href="public_set.php">Go...</a>
            </div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Our Impression</span>
            </div>
          </div>
          
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">11 National Level Awards</div>
            <div class="number">Our Ambition</div>
              
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Up Always....</span>
            </div>
          </div>
          
        </div>
      </div>
      
      <div class="top-sales box">
        <div class="recent-sales box">
            <table class="tb" style="width:100%;">
                <thead>
                    <tr style="color:white;background-color:DarkCyan;font-size:30px;">
                        <th width="100px">Name</th>
                        <th>Employement</th>
                        
                        <th>Gender</th>
                        
                        
      
                        
                        <th>Awareness</th>
                        <th>About College</th>
                        <th>Infrastructure</th>
                        <th>Rating</th>
                        <th>Recommendation</th>
                        <th>Liking Reason</th>
                        <th>Suggestion</th>
                        <th>Feedback Count</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        
                        $con = mysqli_connect('username','password','');
                        mysqli_select_db($con,'feedback');
                        $user = $_SESSION['id'];
                        //$_SESSION['id1'] = $user;
                        $s = "select name,Employment,Gender,awareness,about_college,infrastructure,rate,recommend,like_us,suggestions,counts from public inner join pubfeed on public.F_Name = pubfeed.name where public.user = '$user'";
                        $s1 = mysqli_query($con,$s);
                        if(mysqli_num_rows($s1)>0)
                        {
                            foreach($s1 as $ss)
                            {
                                ?>
                                <tr>
                                    <td style="text-align: center"><?= $ss['name']?></td>
                                    <td style="text-align: center"><?= $ss['Employment']?></td>
                                    
                                    <td style="text-align: center"><?= $ss['Gender']?></td>
                                    
                                    
                                    <td style="text-align: center"><?= $ss['awareness']?></td>
                                    <td style="text-align: center"><?= $ss['about_college']?></td>
                                    <td style="text-align: center"><?= $ss['infrastructure']?></td>
                                    <td style="text-align: center"><?= $ss['rate']?></td>
                                    <td style="text-align: center"><?= $ss['recommend']?></td>
                                    <td style="text-align: center"><?= $ss['like_us']?></td>
                                    <td style="text-align: center"><?= $ss['suggestions']?></td>
                                    <td style="text-align: center"><?= $ss['counts']?></td>
                                    <td>
                                    <form action="public_delete_connect.php" method="post">
                                          <div>
					                                  <label for="name1" class="label">Name</label>
					                                  <input name="name1" type="text" class="input" required>
                                            
				                                  </div>
                                          <!-- <div>
					                                  <label for="name2" class="label">Organisation ID</label>
					                                  
                                            <input name="name2" type="text" class="input" required> -->
				                                  </div>
                                          <br>
                                          <div>
					                                  <input  type="submit" class="button" value="REMOVE">
				                                  </div>
                                    </form>
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

