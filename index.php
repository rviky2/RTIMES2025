<!DOCTYPE html>
<html lang="en">
<?php
    /*HEAD*/
    include 'include/head.php';
?>

<body>
    
    <?php
    /*HEADER*/
    include 'include/header.php';

    /*NAVIGATION BAR*/
    include 'include/navbar.php';

    /*SLIDER*/
    include 'include/slider.php';

    /*ABOUT CONFERENCE*/
    echo '
    
    
    <div class=" mt-5 container">
        <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-primary">About Srinivas Institute of Technology</h5>
        <p class="font9 text-justify">Srinivas Institute of Technology (SIT) is one of the premier engineering colleges of the coastal 
            region aiming towards high standards of education with holistic approach. SIT is recognised by AICTE, affiliated to VTU and 
            re-accredited by NAAC with A grade. The Institute started in the year 2006, is a unit of A. Shama Rao Foundation, Mangaluru, and is located at 
            the Srinivas Campus spread over 15 acres of land at Valachil, Arkula Village, about 10kms from Mangaluru city, adjacent to NH66. 
            The institute hosts 3000 plus students studying under 9 UG, 5 PG programmes and 6 Research Centres.
            For more info: <a href="https://www.sitmng.ac.in" target="blank">https://www.sitmng.ac.in</a></li>
                    <h6 class="text">
        </p>
    </div>
    <div class=" mt-5 container">
        <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-primary">About the Departments</h5>
        <p class="font9 text-justify">Department of Mechanical Engineering was started in the year 2006. The Department offers B.E in Mechanical 
        Engineering, M.Tech in Industrial Automation and Robotics, VTU R&D centre for M.Sc (Engg) and Ph.D. The Department Infrastructure fulfils 
        the requirements of academics, supports research and learning skills on the latest technology in the industry.</p>
        
        <p>The Department of Marine Engineering was established in the year 2012 to impart technical skills of highest and contemporary quality 
        to the blooming marine engineers who can work on shore and on-board ships.</p>

        <p>The department of Aeronautical Engineering established in the year 2011. At present, the department is fully equipped with state of the 
        art laboratories; research facilities such as wind tunnel (Low speed & Cascade), propeller test rig, flow visualization apparatus to name 
        a few.</p>

        <p>The Department of Automobile Engineering aims to be a center of excellence in education and research in the field of Automobile 
        Engineering by imparting knowledge and professional skills and active involvement in Research & Development activities. The department 
        has various research facilitates such as Multi-fuel test rig, and heat transfer equipments.</p>
    </div>
    <div class=" mt-5 container">
        <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-primary">About the Conference</h5>
        <p class="font9 text-justify">The conference intends to have deliberations on various topics belonging to Mechanical 
        Engineering Sciences. The theoretical topics together with real time research from various streams are expected to be 
        presented and discussed in the conference. Deliberations of the conference shall be done but not limited to, in the 
        following eight track themes. The conference will be conducted in hybrid mode of online and offline.
        </p>
    </div>
    <div class="container mb-5">
        <ul>
            <a href="tracks.php">
                <li class="text-primary-50"><b>Track 1:</b> Advanced Manufacturing and Materials</li>
            </a>
            <a href="tracks.php">
                <li class="text-primary-50"><b>Track 2:</b> Aerospace and Aeronautical Innovations</li>
            </a>
            <a href="tracks.php">
                <li class="text-primary-50"><b>Track 3:</b> Automotive Engineering and Smart Mobility</li>
            </a>
            <a href="tracks.php">
                <li class="text-primary-50"><b>Track 4:</b> Marine and Offshore Engineering</li>
            </a>
            <a href="tracks.php">
                <li class="text-primary-50"><b>Track 5:</b> Thermal and Fluid Sciences</li>
            </a>
            <a href="tracks.php">
                <li class="text-primary-50"><b>Track 6:</b> Robotics and Automation</li>
            </a>
            <a href="tracks.php">
                <li class="text-primary-50"><b>Track 7:</b> Renewable Energy and Sustainability</li>
            </a>
            <a href="tracks.php">
                <li class="text-primary-50"><b>Track 8:</b> Computational and AI-Driven Engineering</li>
            </a>
        </ul>
    </div>
    <hr>
    <!--IMPORTANT DATES-->
    <div class="container mt-4" id="dates">
        <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-primary">Important Dates</h5>
        <table class="table">
            <tbody>
                <tr class="border">
                    <td class="border font9">Last date for submission of Abstract</td>
                    <td class="border wrap text-danger font-weight-bold">24th March, 2025</td>
                </tr>
                <tr class="border">
                    <td class="border font9">Last date for submission of full length papers</td>
                    <td class="border wrap text-danger font-weight-bold">10th April, 2025</td>
                </tr>
                <tr class="border">
                    <td class="border font9">Notification of Final Acceptance after review</td>
                    <td class="border text-danger font-weight-bold">20th April 2025</td>
                </tr>
                <tr class="border">
                    <td class="border font9">Final Submission of revised full length paper - camera ready</td>
                    <td class="border text-danger font-weight-bold">30th April, 2025</td>
                </tr>
                <tr class="border">
                    <td class="border font9">Early Bird Registration</td>
                    <td class="border text-danger font-weight-bold">30th April, 2025</td>
                </tr>
                <tr class="border">
                    <td class="border font9">Last Date of Registration</td>
                    <td class="border text-danger font-weight-bold">5th May, 2025</td>
                </tr>
                <tr class="border">
                    <td class="border font9">Date of Conference</td>
                    <td class="border text-danger font-weight-bold">9th & 10th May, 2025</td>
                </tr>
            </tbody>
        </table>
    </div>
    ';

    /*USEFULL LINKS*/
    include 'include/section.php';

     /*FOOTER*/
     include 'include/footer.php';
?>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>
