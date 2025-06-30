<?php $title = "Aircraft";
include 'include/header.php' ?>

<section class="inner_banner">
    <figure class="inner_banner_img">
        <img src="images/inner-bg.webp" alt="image" class="img-fluid">
    </figure>
    <div class="container">
        <div class="inner_banner_content">
            <h1>EXCLUSIVE PRIVATE JETS</h1>
        </div>
    </div>
</section>

<section class="fleet_section padd-y">
    <div class="container">
        <div class="fleet_tab_nav">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-one-tab" data-toggle="pill" href="#pills-one" role="tab"
                        aria-controls="pills-one" aria-selected="true">Hawker 850XP</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-two-tab" data-toggle="pill" href="#pills-two" role="tab"
                        aria-controls="pills-two" aria-selected="false">Citation XLS+</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-three-tab" data-toggle="pill" href="#pills-three" role="tab"
                        aria-controls="pills-three" aria-selected="false">falcon 2000</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-four-tab" data-toggle="pill" href="#pills-four" role="tab"
                        aria-controls="pills-four" aria-selected="false">Beechcraft Premier 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-five-tab" data-toggle="pill" href="#pills-five" role="tab"
                        aria-controls="pills-five" aria-selected="false">Airbus H125</a>
                </li>                
            </ul>
        </div>
        <div class="tab-content fleet_tab_content mt-5" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5">
                        <figure class="fleet_img">
                            <img src="images/fleet-img1.webp" alt="image" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-md-5">
                        <div class="fleet_content text-center">
                            <h3>Hawker 850XP</h3>
                            <h4>A Titan of Industry</h4>
                            <a href="contact.php" class="themeBtn mx-auto">Access: Ultra-Long-Range</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                <div class="row justify-content-center align-items-center flex-row-reverse">
                    <div class="col-md-5">
                        <figure class="fleet_img">
                            <img src="images/fleet-img2.webp" alt="image" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-md-5">
                        <div class="fleet_content text-center">
                            <h3>Citation XLS+</h3>
                            <h4>Enhancing Enterprising Opportunities</h4>
                            <a href="contact.php" class="themeBtn mx-auto">Access: Large Cabin</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5">
                        <figure class="fleet_img">
                            <img src="images/fleet-img3.webp" alt="image" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-md-5">
                        <div class="fleet_content text-center">
                            <h3>Dassault Falcon 2000</h3>
                            <h4>An Ascending Pathfinder Pedigree</h4>
                            <a href="contact.php" class="themeBtn mx-auto">Access: Super-Midsize</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
                <div class="row justify-content-center align-items-center flex-row-reverse">
                    <div class="col-md-5">
                        <figure class="fleet_img">
                            <img src="images/fleet-img4.webp" alt="image" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-md-5">
                        <div class="fleet_content text-center">
                            <h3>Beechcraft Premier 1</h3>
                            <h4>True Executive Evolution</h4>
                            <a href="contact.php" class="themeBtn mx-auto">Access: Super-Midsize</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-five" role="tabpanel" aria-labelledby="pills-fivee-tab">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-5">
                        <figure class="fleet_img">
                            <img src="images/fleet-img5.webp" alt="image" class="img-fluid">
                        </figure>
                    </div>
                    <div class="col-md-5">
                        <div class="fleet_content text-center">
                            <h3>Airbus H125</h3>
                            <h4>An Explorer of Endless Horizons</h4>
                            <a href="contact.php" class="themeBtn mx-auto">Access: Midsize</a>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</section>

<?php include 'include/footer.php' ?>