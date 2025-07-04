<?php $title = "Contact Us";
include 'include/header.php' ?>

<section class="inner_banner">
    <figure class="inner_banner_img">
        <img src="images/new-img2.webp" alt="image" class="img-fluid">
    </figure>
    <div class="container">
        <div class="inner_banner_content">
            <h1>Contact us</h1>

        </div>
    </div>
</section>

<section class="contact_section padd-y">
    <div class="container">
        <div class="contact_wrapper">
            <div class="contact_title text-center">
                <h3>Request Information</h3>
                <p>
                    Please fill out the form below, and a dedicated Air Affair representative will connect with you
                    shortly to assist with your inquiry.
                </p>
            </div>
            <form class="contact_form">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">First Name*</label>
                        <input type="text" name="first_name" placeholder="First Name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Last Name*</label>
                        <input type="text" name="last_name" placeholder="Last Name">
                    </div>
                    <div class="col-md-6">
                        <label for="">Email Address *</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <label for="">Phone Number *</label>
                        <input type="tel" name="phone" placeholder="Phone">
                    </div>
                    <div class="col-md-6">
                        <label for="">Country*</label>
                        <select id="">
                            <option value="Select Country">Select Country</option>
                            <option value="Select Country">Select Country</option>
                            <option value="Select Country">Select Country</option>
                            <option value="Select Country">Select Country</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">ZIP*</label>
                        <input type="tel" name="zip" placeholder="ZIP">
                    </div>
                    <div class="col-md-6">
                        <label for="">Do you currently fly private?*</label>
                        <select id="">
                            <option value="Select an option">Select an option</option>
                            <option value="Select an option">Select an option</option>
                            <option value="Select an option">Select an option</option>
                            <option value="Select an option">Select an option</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Which program are you interested in*</label>
                        <select id="">
                            <option value="Select an option">Select an option</option>
                            <option value="Jet Card">Jet Card</option>
                            <option value="Lease Program">Lease Program</option>
                            <option value="Fractional Ownership">Fractional Ownership</option>
                            <option value="Aircraft Management">Aircraft Management</option>
                            <option value="Helicopter Access">Helicopter Access</option>
                            <option value="Holiday Charter">Holiday Charter</option>
                            <option value="Corporate Charter">Corporate Charter</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="">Ask us a question*</label>
                        <textarea name="question" rows="4" placeholder="Ask us a question"></textarea>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="themeBtn magnetic" data-strength="25" data-strength-text="15">
                            <div class="btn-fill"></div>
                            <span class="btn-text">
                                <span class="btn-text-inner change">SUBMIT</span>
                            </span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include 'include/footer.php' ?>