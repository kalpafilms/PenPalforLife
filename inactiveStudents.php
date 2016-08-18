<?php
include_once "./layout.php";

$base = new Layout();

$base->addHeader();
?>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"> Teacher Dashboard</h1>
            <ul class="nav nav-tabs nav-justified" role="tablist">
                <li><a href="./activeStudents.php">Active Students</a></li>
                <li class="active"><a href="./inactiveStudents.php">Inactive Students</a></li>
                <li><a href="#"> <i class="fa fa-plus" aria-hidden="true"></i> Add Student</a></li>
            </ul>
        </div>
    </div>
    <!-- Student List -->
    <div id="studentList">
        <div class="aStudent cardBox">
            <!-- Sample data -->
            <div class="row">
                <div class="col-lg-2">
                    <img class="stdPhoto" src="images/feynman.jpg">
                </div>
                <div class="col-lg-5 studentName">
                    <span class="stdFirstName h3">Richard</span>&nbsp;<span class="stdLastName h3">Feynman</span>
                    <span class="stdAccount">richardfey@amehta.consetoga.kitchener</span>
                </div>
                <div class="col-lg-5 studentButtons text-center">
                    <div class="row">
                        <div class="col-lg-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#activateModal">
                                <strong>Inactivate</strong><br/>
                                <small>Account</small>
                            </button>
                        </div>
                        <div class="col-lg-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal">
                                <strong>Edit</strong><br/>
                                <small>Info</small>
                            </button>
                        </div>
                        <div class="col-lg-4">
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#deleteModal">
                                <strong>Delete</strong><br/>
                                <small>Account</small>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "./shared/activateStudent.php";
include "./shared/editStudent.php";
include "./shared/deleteAccount.php";

$base->addFooter();
?>