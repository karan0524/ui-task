<?php include 'layout/header.php'; ?>

<main>
    <div class="wrapper">
        <aside class="sidebar">
            <a class="d-flex justify-content-start align-items-center logo" href="index.php">
                <div class="icon">
                    <img src="assets/images/logo.png" alt="">
                </div>
                <div class="tagLine">
                    <h6>SIDE SHEET</h6>
                    <p>Tag line</p>
                </div>
            </a>

            <nav id="accordion">
                <ul>
                    <li>
                        <a href="index.php" class="d-flex justify-content-start align-items-center nav-link nav-active">
                            <div class="icon">
                                <img src="assets/images/icons/dashboard.svg" alt="">
                            </div>
                            <div class="nav-text">
                                Dashboard
                            </div>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0)" class="d-flex justify-content-start align-items-center nav-link">
                            <div class="icon">
                                <img src="assets/images/icons/marketing.svg" alt="">
                            </div>
                            <div class="nav-text">
                                Marketing
                            </div>

                            <i class="bi bi-caret-down-fill"></i>
                        </a>



                        <ul class="subMenu">
                            <li>
                                <a href="#">
                                    Lorem ipsum
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Lorem ipsum
                                </a>
                            </li>
                        </ul>

                    </li>

                    <li>
                        <a href="javascript:void(0)" class="d-flex justify-content-start align-items-center nav-link">
                            <div class="icon">
                                <img src="assets/images/icons/classified.svg" alt="">
                            </div>
                            <div class="nav-text">
                                Classifieds
                            </div>

                            <i class="bi bi-caret-down-fill"></i>
                        </a>



                        <ul class="subMenu">
                            <li>
                                <a href="#">
                                    Lorem ipsum
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Lorem ipsum
                                </a>
                            </li>
                        </ul>

                    </li>

                    <li>
                        <a href="quotes.php" class="d-flex justify-content-start align-items-center nav-link">
                            <div class="icon">
                                <img src="assets/images/icons/quotes.svg" alt="">
                            </div>
                            <div class="nav-text">
                                Quotes
                            </div>
                        </a>

                    </li>

                    <li>
                        <a href="javascript:void(0)" class="d-flex justify-content-start align-items-center nav-link">
                            <div class="icon">
                                <img src="assets/images/icons/support.svg" alt="">
                            </div>
                            <div class="nav-text">
                                Support
                            </div>
                            <i class="bi bi-caret-down-fill"></i>
                        </a>



                        <ul class="subMenu">
                            <li>
                                <a href="#">
                                    Lorem ipsum
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Lorem ipsum
                                </a>
                            </li>
                        </ul>

                    </li>

                    <li>
                        <a href="javascript:void(0)" class="d-flex justify-content-start align-items-center nav-link">
                            <div class="icon">
                                <img src="assets/images/icons/configuration.svg" alt="">
                            </div>
                            <div class="nav-text">
                                Configuration
                            </div>
                            <i class="bi bi-caret-down-fill"></i>
                        </a>



                        <ul class="subMenu">
                            <li>
                                <a href="#">
                                    Lorem ipsum
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Lorem ipsum
                                </a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </nav>

            <div class="collapseSidebar d-grid d-md-none">
                <img src="assets/images/icons/arrow.svg" alt="">
            </div>
        </aside>
        <div class="content">
            <div class="pagedetails">
                <div class="pageName">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="breadCrumbNav">
                        <h5>Dashboard</h5>
                        <ul>
                            <li>
                            <p>Dashboard</p>
                            </li>
                        </ul>
                    </div>
                    <div class="notifications">
                        <div class="icon">
                            <img src="assets/images/icons/bell.svg" alt="">
                        </div>
                    </div>
                    <div class="profile">
                        <div class="dropdown">
                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="proPic">
                                    <img src="assets/images/pro.png" alt="">
                                </div>
                                <div class="profileDetails">
                                    <h6>Andre Salmanan</h6>
                                    <p>Admin</p>
                                </div>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">My Profile</a>
                                <a class="dropdown-item" href="#">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="pageContents">

                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Miscellaneous-tab" data-bs-toggle="tab"
                                data-bs-target="#Miscellaneous" type="button" role="tab" aria-controls="Miscellaneous"
                                aria-selected="true">Miscellaneous</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Quotes-tab" data-bs-toggle="tab" data-bs-target="#Quotes"
                                type="button" role="tab" aria-controls="Quotes" aria-selected="false">Quotes</button>
                        </li>


                    </ul>
                    <button type="button" class="btn primaryBtn">
                        Create New Quote
                    </button>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Miscellaneous" role="tabpanel"
                        aria-labelledby="Miscellaneous-tab">

                        <div class="accordion" id="fiters">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="filterBox">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#sorts" aria-expanded="true" aria-controls="sorts">
                                        Quick Calculator
                                    </button>
                                </h2>
                                <div id="sorts" class="accordion-collapse collapse show" aria-labelledby="filterBox"
                                    data-bs-parent="#fiters">
                                    <div class="accordion-body">
                                        <div class="filterWrapper">
                                            <div class="items">
                                                <label>Calculator </label>
                                                <select>
                                                    <option data-display="Select">Dealer FMV Calculator</option>
                                                    <option value="1">Dealer FMV Calculator</option>
                                                </select>
                                            </div>

                                            <div class="items">
                                                <label>Purchase Options </label>
                                                <select>
                                                    <option data-display="Select">FMV Purchase Option</option>
                                                    <option value="1">FMV Purchase Option</option>
                                                </select>
                                            </div>

                                            <div class="items">
                                                <label>Lease Terms </label>
                                                <select>
                                                    <option data-display="Select">24 months, 12 months,6..</option>
                                                    <option value="1">24 months, 12 months,6..</option>
                                                </select>
                                            </div>

                                            <div class="items">
                                                <label>Advance Rental</label>
                                                <select>
                                                    <option data-display="Select"> 2 Advance Rentals, 0 Ad..</option>
                                                    <option value="1"> 2 Advance Rentals, 0 Ad..</option>
                                                </select>
                                            </div>

                                            <div class="items">

                                                <label>What is your sale total?</label>
                                                <div id="slider"></div>
                                            </div>

                                            <div class="items">
                                                <div class="inputWrapper">
                                                    <input type="text" value="60,000" class="form-control">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="actionBtns">
                                            <ul>
                                                <li>
                                                   <button class="btn cancelBtn">Cancel</button>
                                                </li>
                                                <li>
                                                    <button class="btn teriteryBtn">Reset</button>
                                                 </li>

                                                 <li>
                                                    <button class="btn secondaryBtn">Apply</button>
                                                 </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="propertyList">
                            <div class="items">
                                <div class="thumbnail">
                                    <img src="assets/images/bedrooms.png" alt="">
                                </div>
                                <div class="details">
                                    <h5>3 Bedrooms in Cairo</h5>
                                    <h6>$7,625</h6>

                                    <div class="propertyDetails">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <img src="assets/images/icons/bed.svg" alt="">
                                                </div>
                                                <div class="count">
                                                    3 Bed
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <img src="assets/images/icons/bathroom.svg" alt="">
                                                </div>
                                                <div class="count">
                                                    1 Bathroom
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="items">
                                <div class="thumbnail">
                                    <img src="assets/images/bedrooms2.png" alt="">
                                </div>
                                <div class="details">
                                    <h5>4 Bedrooms in Los Angel</h5>
                                    <h6>$8,625</h6>

                                    <div class="propertyDetails">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <img src="assets/images/icons/bed.svg" alt="">
                                                </div>
                                                <div class="count">
                                                    3 Bed
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <img src="assets/images/icons/bathroom.svg" alt="">
                                                </div>
                                                <div class="count">
                                                    1 Bathroom
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="items">
                                <div class="thumbnail">
                                    <img src="assets/images/bedrooms3.png" alt="">
                                </div>
                                <div class="details">
                                    <h5>3 Bedrooms in Hotel abab</h5>
                                    <h6>$7,625</h6>

                                    <div class="propertyDetails">
                                        <ul>
                                            <li>
                                                <div class="icon">
                                                    <img src="assets/images/icons/bed.svg" alt="">
                                                </div>
                                                <div class="count">
                                                    3 Bed
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <img src="assets/images/icons/bathroom.svg" alt="">
                                                </div>
                                                <div class="count">
                                                    1 Bathroom
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="announcements">
                            <div class="list">
                                <div class="listHeader">
                                    <h5>
                                        Announcements
                                    </h5>
                                    <a href="#">
                                        View All
                                        <i class="bi bi-caret-right-fill"></i>
                                    </a>
                                </div>

                                <div class="itembody">
                                    <div class="items">
                                        <div class="date">
                                           <p>
                                            FEB
                                            22
                                           </p>
                                        </div>
                                        <div class="newsBullets">
                                            <h4>Dream Program</h4>
                                            <a href="#">

                                               <img src="assets/images/icons/arrowRight.svg" alt="">
                                            </a>
                                            <h5>A new promotion has been released today! For more details, go..</h5>
                                        </div>
                                    </div>

                                    <div class="items">
                                        <div class="date">
                                           <p>
                                            FEB
                                            22
                                           </p>
                                        </div>
                                        <div class="newsBullets">
                                            <h4>Dream Program</h4>
                                            <a href="#">

                                               <img src="assets/images/icons/arrowRight.svg" alt="">
                                            </a>
                                            <h5>A new promotion has been released today! For more details, go..</h5>
                                        </div>
                                    </div>

                                    <div class="items">
                                        <div class="date">
                                           <p>
                                            FEB
                                            22
                                           </p>
                                        </div>
                                        <div class="newsBullets">
                                            <h4>Dream Program</h4>
                                            <a href="#">

                                               <img src="assets/images/icons/arrowRight.svg" alt="">
                                            </a>
                                            <h5>A new promotion has been released today! For more details, go..</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="list">
                                <div class="listHeader">
                                    <h5>
                                        Top Dealers
                                    </h5>
                                    <a href="#">
                                        View All
                                        <i class="bi bi-caret-right-fill"></i>
                                    </a>
                                </div>

                                <div class="itembody">
                                    <div class="items companies">
                                        <div class="companyLogo">
                                            <img src="assets/images/companies/tcs.png" alt="">
                                        </div>
                                        <div class="companyDetails">
                                            <div>
                                                <h5>TCS</h5>
                                                <p>Quote Count: <span>3</span></p>
                                            </div>
                                            <div>
                                                <h6>$29,612</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="items companies">
                                        <div class="companyLogo">
                                            <img src="assets/images/companies/intel.png" alt="">
                                        </div>
                                        <div class="companyDetails">
                                            <div>
                                                <h5>Intel Corporation</h5>
                                                <p>Quote Count: <span>3</span></p>
                                            </div>
                                            <div>
                                                <h6>$29,612</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="items companies">
                                        <div class="companyLogo">
                                            <img src="assets/images/companies/huwai.png" alt="">
                                        </div>
                                        <div class="companyDetails">
                                            <div>
                                                <h5>Huawei</h5>
                                                <p>Quote Count: <span>3</span></p>
                                            </div>
                                            <div>
                                                <h6>$29,612</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Quotes" role="tabpanel" aria-labelledby="Quotes-tab">...</div>
                </div>
            </div>

            <div class="collapseSidebar d-none d-md-grid">
                <img src="assets/images/icons/arrow.svg" alt="">
            </div>
        </div>
    </div>
</main>

<?php include 'layout/footer.php'; ?>