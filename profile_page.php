<?php
session_start();
if(isset($_SESSION["loggedUser"])==false)
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/mymopeds.css">
    <title>Parking System</title>
    <script>
        $(document).ready(function() {


            $("#BookSlot_btn").click(function() {
                //alert("All slots are full, please try after sometime.");
                    var slotNo = parseInt(200 * Math.random());
                    var actionUrl = "slot.php?slot=" + slotNo;
                    $.get(actionUrl, function(response) {
                            if (response == "") {

                                $("#BookSlot").fadeOut();
                                alert("Your Slot Number is: "+slotNo);
                            }
                        })


                    })

             
            $("#RetrieveSlot_btn").click(function() {
                
                var slotNo = $("#txtSlotNumber").val();
                
                var actionUrl = "retrieveSlot.php?slot=" + slotNo;
                $.get(actionUrl, function(response) {
                    
                        if (response == "") {

                            $("#RetrieveSlot").fadeOut();
                            alert("Slot Retrieved");
                        }
                    })


                })

        })

    </script>
</head>

<body>
    <div class="">
        <div class="">
            <div class="">
                <center>
                    <div class="container-fluid bg-black header-height row " id="home">
                        <div class="row col mt-4 justify-content-around">
                            <!--                    <div class="mr-4 ml-4"><img src="images/logo.png" class="rounded-circle logo"></div>-->
                            <div class="text-yellow col-md-4">
                                <span class="h1">Parking System</span>

                            </div>
                            <div class=" mt-2 col justify-content-end col-md-4">

                                <div class="mr-4 ml-4">
                                    <button type="button" class="btn btn-br-normal btn-black">8264245458</button>

                                </div>
                            </div>
                        </div>


                    </div>
                </center>
                <!--/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*-->

                <div>
                    <center>
                        <nav class="navbar navbar-expand-lg navbar-light bg-yellow">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a class="navbar-brand" href="#"></a>

                            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                <ul class="navbar-nav mr-auto mt-2 mt-lg-0 text-left">
                                    <li class="nav-item ">
                                        <a class="nav-link h6" href="#home">Home<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h6" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link h6" href="#contactUs">Contact</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link h6" href="#faqs">FAQs</a>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <button class="btn btn-black my-2 my-sm-0 mr-4" type="button" data-toggle="modal" data-target="#BookSlot">Book Slot</button>
                                    <button class="btn btn-black my-2 my-sm-0 mr-4" type="button" data-toggle="modal" data-target="#RetrieveSlot">Retreive Slot</button>
                                    <a href="logout.php">
                                        <div class="btn btn-black my-2 my-sm-0 mr-4" data-target="#Logout">Logout</div>
                                    </a>

                                </form>
                            </div>
                        </nav>
                    </center>
                </div>
            </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner min-height">
                    <div class="carousel-item active">
                        <img class="d-block w-100 min-height" src="images/vespa_1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 min-height" src="images/vespa_1.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 min-height" src="images/test_6.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="modal pb-4 pt-4 mt-4 " tabindex="-1" role="dialog" id="BookSlot">
            <div class="modal-dialog">
                <div class="modal-content bg-black br-yellow">
                    <div class="modal-header bg-black text-yellow mb-4 p-2">
                        <h5 class="modal-title">Book Slot</h5>
                        <button type="button" class="close text-yellow" style="color:yellow;" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <center>
                                <div class="form-group col-md-10">
                                    <label for="txtVehicleNumber" class="text-yellow ">Vehicle Number
                                        <small id="errLoginUid" class="text-white"></small></label>
                                    <input type="number" class="form-control btn-br-normal" id="txtVehicleNumber" name="txtVehicleNumber" placeholder="Enter last four numeric digits">

                                </div>


                                <div class="form-row justify-content-around">
                                    <div class="btn btn-br-normal btn-black col-md-3 z-index_psv" name="BookSlot_btn" id="BookSlot_btn" type="button" value='BookSlot_btn'>Book Slot</div>
                                </div>
                            </center>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal pb-4 pt-4 mt-4 " tabindex="-1" role="dialog" id="RetrieveSlot">
            <div class="modal-dialog">
                <div class="modal-content bg-black br-yellow">
                    <div class="modal-header bg-black text-yellow mb-4 p-2">
                        <h5 class="modal-title">Retrieve Slot</h5>
                        <button type="button" class="close text-yellow" style="color:yellow;" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <center>
                                <div class="form-group col-md-10">
                                    <label for="txtSlotNumber" class="text-yellow ">Slot Number
                                        <small id="errRetrieveSlot" class="text-white"></small></label>
                                    <input type="number" class="form-control btn-br-normal" id="txtSlotNumber" name="txtSlotNumber" placeholder="Slot Number">

                                </div>


                                <div class="form-row justify-content-around">
                                    <div class="btn btn-br-normal btn-black col-md-3 z-index_psv" name="RetrieveSlot_btn" id="RetrieveSlot_btn" type="button" value='RetrieveSlot_btn'>Retrieve Slot</div>
                                </div>
                            </center>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
