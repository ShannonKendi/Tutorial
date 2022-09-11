<?php
session_start();
if(!isset($_SESSION["firstName"]))
{
    header("location:login_form.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admindashboard.css">
    <title>Manguo admin</title>
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-couture"></span>Admin </h2>
            <li><?php
            
            echo $_SESSION["firstName"];

            
                ?></li>

        </div>

        <div class="sidebar-menu">

            <ul>
                <li>
                    <a href="" class="active"><span class="las la-keyboard"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="displayUsers.php"><span class="las la-users"></span>
                        <span>Customers</span></a>
                </li>
                <li>
                    <a href="displayCategories.php"><span class="las la-clipboard-list"></span>
                        <span>Categories</span></a>
                </li>
                <li>
                    <a href="displaySubcategories.php"><span class="las la-shipping-fast"></span>
                        <span>Subcategories</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-receipt"></span>
                        <span>Orders</span></a>
                </li>
                <li>
                    <a href="displayProducts.php"><span class="las la-user-circle"></span>
                        <span>Products</span></a>
                </li>
               


            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="">
                    <span class="las la-bars"></span>
                </label> Dashboard
            </h2>

            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here">
            </div>

            <div class="user-wrapper">
                <img src="nikelogo.webp" width="30px" height="40px" alt="">
                <div>
                     </small>
                </div>
            </div>
        </header>

        <main>

            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>20</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>50</h1>
                        <span>Projects</span>
                    </div>
                    <div>
                        <span class="las la-clipboard-list"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>100</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-shopping-bag"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>Ksh 8000000</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>
                                Employees of the month
                            </h3>
                            <button>See all <span class="las la-arrow-right"></span></button>
                        </div>
                        <div class="card-body">
                            <table width="100% ">
                                <thead>
                                    <tr>
                                        <td>Name</td>
                                        <td>Department</td>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Grace</td>
                                        <td>UI Team</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Moses</td>
                                        <td>Frontend</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Andrew</td>
                                        <td>Mobile Team</td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Fiona</td>
                                        <td>UI Team</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>Ruby</td>
                                        <td>Frontend</td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Johnson</td>
                                        <td>Mobile Team</td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

               
                     

                            </div>

                           

                            </div>
                        </div>

                      

                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
</body>

</html>