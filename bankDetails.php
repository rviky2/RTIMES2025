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
    

    /*CALL FOR PAPERS INSTRUCTIONS*/
    echo '


    <div class="container text-dark border shadow rounded text-center">
        <h4 class="text-center text-black-70 font-weight-bold p-2 font7">Bank Details</h4>
    </div>
    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-5 mx-1 pt-4">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-dark">Mode Of Payment:</h5>
                <hr>
                <ul>
                    <h5 class="font-weight-bold">Demand Darft (DD)</h5>
                    <h6>In favour of <span class="font-weight-bold text-danger">‘SIT CONFERENCE’</span> payable at Adyar, Mangaluru, Karnataka State, India</h6>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-2 mx-1 pt-4">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-dark">Online Transfer:</h5>
                <hr>
                <ul>
                    <h6 class="font-weight-bold">A/C Name: <span class="text-danger">SIT CONFERENCE</span></h6>
                    <h6 class="font-weight-bold">A/C No: 60354927218</h6>
                    <h6 class="font-weight-bold">Bank: Bank of Maharashtra</h6>
                    <h6 class="font-weight-bold">Branch: Adyar, Mangaluru (1451)</h6>
                    <h6 class="font-weight-bold">IFSC: MAHB0001451</h6>
                    <h6 class="font-weight-bold">MICR code: 575014003</h6>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  d-flex justify-content-between">
            <div class="mt-2 mx-1 pt-4">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-dark">Contact Address:</h5>
                <hr>
                <ul>
                    <h6 class="font-weight-bold text-danger">The Conference Chair,</h6>
                    <h6 class="font-weight-bold text-danger">RTIMES-2022</h6>
                    <h6 class="font-weight-bold text-primary">Srinivas Institute of Technology,</h6>
                    <h6 class="font-weight-bold text-primary">Merlapadavu, Valachil, Farangipete Post,</h6>
                    <h6 class="font-weight-bold text-primary">Mangaluru - 574143</h6>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row shadow mt-5">
            <div class="mt-2 mx-1 pt-2">
                <h5 class="first-bdr rounded pl-2 font-weight-bold mb-3 text-dark">Conference Brochure:</h5>
                <hr>
                <embed class="pdf" src="conference_brocher.pdf#toolbar=0" width="900px" height="800px">
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
