<footer class="bg-primary text-center text-lg-start text-white">
    <!-- Grid container -->
    <div class="container-fluid p-4">
        <!--Grid row-->
        <div class="row my-4">
            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                <div class="rounded-circle bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 150px; height: 150px;">
                    <img src="images/ben19.jpg" height="140" alt="pheonixtech" class="rounded-circle" loading="lazy" />
                </div>

                <p class="text-center">Jake Tennyson OWNER PHEONIXTECH</p>

                <ul class="list-unstyled d-flex flex-row justify-content-center">
                    <li>
                        <a class="text-white px-2" href="#!">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </li>
                    <li>
                        <a class="text-white px-2" href="#!">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a class="text-white ps-2" href="#!">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Animals</h5>

                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>When your pet is missing</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Recently found</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>How to adopt?</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Pets for adoption</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Material gifts</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Help with walks</a>
                    </li>
                    <li class="mb-2">
                        <a href="#!" class="text-white"><i class="fas fa-paw pe-3"></i>Volunteer activities</a>
                    </li>
                </ul>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">FEEB BACK</h5>

                <!-- Wrapper container -->
                <div class="container-fluid">

                    <!-- Bootstrap 5 starter form -->
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                        <!-- Name input -->
                        <div class="mb-3">
                            <label class="form-label" for="name">Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                            <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                        </div>

                        <!-- Email address input -->
                        <div class="mb-3">
                            <label class="form-label" for="emailAddress">Email Address</label>
                            <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
                            <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                        </div>

                        <!-- Message input -->
                        <div class="mb-3">
                            <label class="form-label" for="message">Message</label>
                            <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
                        </div>

                        <!-- Form submissions success message -->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">Form submission successful!</div>
                        </div>

                        <!-- Form submissions error message -->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>

                        <!-- Form submit button -->
                        <div class="d-grid">
                            <button class="btn btn-info btn-lg disabled" id="submitButton" type="submit">Submit</button>
                        </div>

                    </form>

                </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Contact</h5>

                <ul class="list-unstyled">
                    <li>
                        <p><i class="fas fa-map-marker-alt pe-2"></i>Warsaw, 57 Street, Poland</p>
                    </li>
                    <li>
                        <p><i class="fas fa-phone pe-2"></i>+ 01 234 567 89</p>
                    </li>
                    <li>
                        <p><i class="fas fa-envelope pe-2 mb-0"></i>contact@example.com</p>
                    </li>
                </ul>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">pheonixtech.com</a>
    </div>
    <!-- Copyright -->
</footer>