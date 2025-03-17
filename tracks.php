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

    echo '

    <!--TRACKS-->


    <div class="container shadow text-dark border rounded text-center">
        <h3 class="text-center text-black-70 font-weight-bold font7 p-2">CONFERENCE TRACKS</h3>
    </div>
    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-5 mx-1 size shadow pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 1: Advanced Manufacturing and Materials</h5>
                <hr>
                <ul>
                    <li>📌Additive Manufacturing and 3D Printing</li>
                    <li>📌Smart Materials and Shape Memory Alloys</li>
                    <li>📌Industry 4.0 and Digital Twin Technology</li>
                    <li>📌Sustainable and Green Manufacturing</li>
                </ul>
            </div>

            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 2: Aerospace and Aeronautical Innovations</h5>
                <hr>
                <ul>
                    <li>📌Next-Gen Aircraft Propulsion Systems</li>
                    <li>📌Hypersonic and Supersonic Technologies</li>
                    <li>📌UAVs and Autonomous Flight Systems</li>
                    <li>📌Space Exploration Technologies</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 3: Automotive Engineering and Smart Mobility</h5>
                <hr>
                <ul>
                    <li>📌Electric and Hybrid Vehicle Technologies</li>
                    <li>📌Hydrogen and Alternative Fuel Vehicles</li>
                    <li>📌Autonomous and Connected Vehicles</li>
                    <li>📌AI and IoT in Automotive Systems</li>
                </ul>
            </div>

            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 4: Marine and Offshore Engineering</h5>
                <hr>
                <ul>
                    <li>📌Green Shipping and Alternative Fuels for Ships</li>
                    <li>📌Autonomous Ships and Maritime AI</li>
                    <li>📌Advanced Ship Propulsion and Hydrodynamics </li>
                    <li>📌Corrosion Prevention and Marine Coatings </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-5 mx-1 size shadow pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 5: Thermal and Fluid Sciences</h5>
                <hr>
                <ul>
                    <li>📌Advanced Heat Transfer and Cooling Techniques </li>
                    <li>📌Computational Fluid Dynamics (CFD) and AI Applications</li>
                    <li>📌Hydrogen Energy and Fuel Cell Technologies</li>
                    <li>📌Microfluidics and Nanofluidics</li>
                </ul>
            </div>

            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 6: Robotics and Automation</h5>
                <hr>
                <ul>
                    <li>📌Humanoid Robots and AI in Robotics </li>
                    <li>📌Collaborative Robots (Cobots) in Manufacturing</li>
                    <li>📌Soft Robotics and Bio-Inspired Mechanisms</li>
                    <li>📌Autonomous Systems in Defense and Aerospace</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 7: Renewable Energy and Sustainability</h5>
                <hr>
                <ul>
                    <li>📌Solar, Wind, and Geothermal Energy Advances </li>
                    <li>📌Energy Harvesting and Storage Technologies</li>
                    <li>📌Carbon Capture and Sustainable Engineering Solutions</li>
                    <li>📌AI and IoT in Energy Management</li>
                </ul>
            </div>

            <div class="mt-5 shadow mx-1 size pt-4 border rounded pl-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-danger">Track 8: Computational and AI-Driven Engineering</h5>
                <hr>
                <ul>
                    <li>📌AI, ML, and Big Data Analytics in Mechanical Engineering </li>
                    <li>📌Digital Twin and Virtual Prototyping</li>
                    <li>📌Optimization Techniques in Mechanical Design</li>
                    <li>📌Quantum Computing in Mechanical Systems </li>
                </ul>
            </div>
        </div>
    </div>
    ';

    /*USEFULL LINKS*/
    include 'include/section.php';

     /*FOOTER*/
     include 'include/footer.php';
?>


    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>
