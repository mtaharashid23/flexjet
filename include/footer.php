<footer class="footer">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6">
                <a href="index.php" class="footer_logo">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <div class="signup">
                    <h4>Stay Connected</h4>
                    <form class="signup_form">
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit" class="themeBtn border-0">Get A Quote</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer_main">
            <div class="row align-items-start justify-content-between">
                <div class="col-md-4">
                    <div class="footer_main_content">
                        <p>
                            Air Affair sets the standard in private aviation by combining modern luxury, personalized
                            service, and complete discretion. Whether it’s a last-minute business flight or a planned
                            escape, we ensure your journey is flawless.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="footer_main_nav">
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="fleet.php">Aircraft</a></li>
                        <li><a href="programs.php">Programs</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_copyright text-center">
            <p class="mb-0">&copy; <?php echo date("Y"); ?> Air Affair. All rights reserved.</p>
        </div>
    </div>
</footer>
<div class="flightPopup modal fade" id="flightModal" tabindex="-1" role="dialog" aria-labelledby="flightModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document" data-lenis-prevent>
        <div class="modal-content p-0">
            <div class="modal-header">
                <h5 class="modal-title" id="flightModalLabel">PLAN A FLIGHT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>
                    Share your flight details below and an Air Affair specialist will be in touch shortly. Private jet
                    charter rates vary based on market demand and typically start at $11,000 per hour.
                </p>

                <form id="flightForm">
                    <div id="flightsContainer" class="flights-wrapper mb-3"></div>

                    <button type="button" id="addFlightBtn" class="btn mb-4">ADD FLIGHT</button>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="title">Title</label>
                            <select class="form-control" id="title" name="title">
                                <option>Mr.</option>
                                <option>Ms.</option>
                                <option>Mrs.</option>
                                <option>Dr.</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="lastName">Last name</label>
                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+44" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="requests">Any additional requests that we may assist you with?</label>
                        <textarea class="form-control" id="requests" name="requests" rows="3"></textarea>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="flyOften">How often do you fly privately?</label>
                            <select class="form-control" id="flyOften" name="flyOften">
                                <option>-- select --</option>
                                <option>Rarely</option>
                                <option>Occasionally</option>
                                <option>Frequently</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="currentSolution">What is your current flying solution?</label>
                            <select class="form-control" id="currentSolution" name="currentSolution">
                                <option>-- select --</option>
                                <option>Commercial</option>
                                <option>Private Jet</option>
                                <option>Jet Card</option>
                                <option>Ownership</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="referral">How did you hear about VistaJet?</label>
                        <select class="form-control" id="referral" name="referral">
                            <option>-- select --</option>
                            <option>Google</option>
                            <option>Social Media</option>
                            <option>Friend</option>
                            <option>Event</option>
                        </select>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="marketing" name="marketing">
                        <label class="form-check-label" for="marketing">
                            I would like to receive updates and promotional messages from Air Affair via email, mail, or
                            SMS.
                        </label>
                    </div>

                    <p class="text-muted small">
                        By submitting this form, you agree to the processing of your personal information in line with
                        the Air Affair <a href="">Privacy Policy</a>.
                    </p>

                    <button type="submit" class="submit-button">REQUEST FLIGHT</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'include/js.php'; ?>

</body>

</html>