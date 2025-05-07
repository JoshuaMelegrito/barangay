<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
    <!-- for header part -->
    <header>
        <div class="logosec">
            <div class="logo">GRPP ADMIN</l></div>
        </div>
    </header>

    <div class="main-container">
        <div class="navcontainer">
            <nav class="nav">
                <div class="nav-upper-options">
                    <div class="nav-option option1">
                        <img src="dash.html.jpg" class="nav-img" alt="dashboard">
                        <div class="button">
                            <button><a href="dashboard.php">
                        <h3>Dashboard</h3></a></button>
                        </div>
                    </div>

                    <div class="option2 nav-option">
                        <img src="certificate.html.jpg" class="nav-img" alt="articles">
                        <h3>Certificates</h3>
                        <div class="dropdown-content">
                            <a href="dId.php">Barangay ID</a>
                            <a href="dclerance.php">Barangay Clearance</a>
                            <a href="dindigency.php">Certificate of Indigency</a>
                            <a href="dgoodmoral.php">Certificate of Good Moral</a>
                        </div>
                    </div>

                    <div class="option3 nav-option">
                        <img src="Permitsicon.html.jpg" class="nav-img" alt="articles">
                        <h3>Permits</h3>
                        <div class="dropdown-content">
                            <a href="dbpermits.php">Barangay Permits</a>
                            <a href="dbuspermits.php"> Business Permits</a>
                        </div>
                    </div>

                    <div class="option3 nav-option">
                        <img src="certificate.html.jpg" class="nav-img" alt="articles">
                        <h3> Job Seekers</h3>
                        <div class="dropdown-content">
                            <a href="djobseeker.php">First Time Job Seekers</a>
                            </div>
                            </div>
                    <div class="option3 nav-option">
                        <img src="profile.html.jpg" class="nav-img" alt="articles">
                        <h3>Residents</h3>
                        <div class="dropdown-content">
                            <a href="users.php">Resident Accounts</a>
                            </div>
                        </div>

                    <div class="option3 nav-option">
                        <img src="settings.html.jpg" class="nav-img" alt="articles">
                        <h3>Settings</h3>
                        <div class="dropdown-content">
                            <a href="profile.php">Profile</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="main">
            <div class="searchbar2">
                <input type="text" placeholder="Search">
                <div class="searchbtn">
                    <img src="searchicon.html.jpg" class="icn srchicn" alt="search-button">
                </div>
            </div>

            <div class="report-container">
                <div class="report-header">
                    <h1 class="recent-resident">Welcome Admins!!! </h1>
                </div>

            <div class="report-body">
                <div class="report-topic-heading">
                    <p> Welcome, Barangay Admins! Your dashboard is ready! let's work together to build a better brighter community!✨✨</p>
                </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>