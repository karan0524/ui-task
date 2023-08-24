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
                        <a href="index.php" class="d-flex justify-content-start align-items-center nav-link">
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
                        <a href="quotes.php"
                            class="d-flex justify-content-start align-items-center nav-link nav-active">
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
                        <h5>Customer Quote List</h5>
                        <ul>
                            <li>
                                <p>Home</p>
                            </li>
                            <li>
                                <p>Customer Quote List</p>
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

                <div class="tableHeader">
                    <div class="searchBar">
                        <input type="text" placeholder="Search by company, quote no." class="form-control">
                    </div>

                    <div class="tableManupulations">
                        <ul>
                            <li>
                                <button type="button" class="btn nopadbtn">
                                    <div class="icon">
                                        <img src="assets/images/icons/csv.svg" alt="">
                                    </div>
                                    <h6>
                                        Export CSV
                                    </h6>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="btn nopadbtn">
                                    <div class="icon">
                                        <img src="assets/images/icons/archive.svg" alt="">
                                    </div>
                                    <h6>
                                        Archive
                                    </h6>
                                </button>
                            </li>

                            <li>
                                <button type="button" class="btn primaryBtn">
                                    Create New Quote
                                </button>
                            </li>
                        </ul>
                    </div>

                    
                </div>

                <div class="table-responsive w-100">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Quote No.
                                </th>
                                <th>
                                    Company Name
                                </th>
                                <th>
                                    Last Modified
                                </th>
                                <th>
                                    Dealer Name
                                </th>
                                <th>
                                    Dealer Rep Name
                                </th>
                                <th>
                                    Total Cost
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    002142302
                                </td>
                                <td>
                                    Acme Corporation
                                </td>
                                <td>
                                    02/14/2023
                                </td>
                                <td>
                                    Div Dealer
                                </td>
                                <td>
                                    Divya Nair
                                </td>
                                <td>
                                    $17,000
                                </td>
                                <td class="status">
                                    Submitted
                                </td>
                                <td>
                                    <div class="btn-group dropstart">
                                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                       <img src="assets/images/icons/dots.svg" alt="">
                                        </button>
                                        <ul class="dropdown-menu">
                                          
                                            <li>
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/delete.svg" alt="">
                                                    </div>
                                                    <h6>Delete Quote</h6>
                                                </button>
                                            </li>

                                            <li>
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/edit.svg" alt="">
                                                    </div>
                                                    <h6>Edit Quote</h6>
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/clone.svg" alt="">
                                                    </div>
                                                    <h6>Clone Quote</h6>
                                                </button>
                                            </li>
                                            <li>
                                                
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/archived.svg" alt="">
                                                    </div>
                                                    <h6>Quote is Archived</h6>
                                                </button>
                                            </li>
                                        </ul>
                                      </div>  
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    002142302
                                </td>
                                <td>
                                    Acme Corporation
                                </td>
                                <td>
                                    02/14/2023
                                </td>
                                <td>
                                    Div Dealer
                                </td>
                                <td>
                                    Divya Nair
                                </td>
                                <td>
                                    $17,000
                                </td>
                                <td class="status">
                                    Submitted
                                </td>
                                <td>
                                    <div class="btn-group dropstart">
                                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                       <img src="assets/images/icons/dots.svg" alt="">
                                        </button>
                                        <ul class="dropdown-menu">
                                          
                                            <li>
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/delete.svg" alt="">
                                                    </div>
                                                    <h6>Delete Quote</h6>
                                                </button>
                                            </li>

                                            <li>
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/edit.svg" alt="">
                                                    </div>
                                                    <h6>Edit Quote</h6>
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/clone.svg" alt="">
                                                    </div>
                                                    <h6>Clone Quote</h6>
                                                </button>
                                            </li>
                                            <li>
                                                
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/archived.svg" alt="">
                                                    </div>
                                                    <h6>Quote is Archived</h6>
                                                </button>
                                            </li>
                                        </ul>
                                      </div>  
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    002142302
                                </td>
                                <td>
                                    Acme Corporation
                                </td>
                                <td>
                                    02/14/2023
                                </td>
                                <td>
                                    Div Dealer
                                </td>
                                <td>
                                    Divya Nair
                                </td>
                                <td>
                                    $17,000
                                </td>
                                <td class="status">
                                    Submitted
                                </td>
                                <td>
                                    <div class="btn-group dropstart">
                                        <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                       <img src="assets/images/icons/dots.svg" alt="">
                                        </button>
                                        <ul class="dropdown-menu">
                                          
                                            <li>
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/delete.svg" alt="">
                                                    </div>
                                                    <h6>Delete Quote</h6>
                                                </button>
                                            </li>

                                            <li>
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/edit.svg" alt="">
                                                    </div>
                                                    <h6>Edit Quote</h6>
                                                </button>
                                            </li>
                                            <li>
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/clone.svg" alt="">
                                                    </div>
                                                    <h6>Clone Quote</h6>
                                                </button>
                                            </li>
                                            <li>
                                                
                                                <button type="button" class="btn">
                                                    <div class="icon">
                                                        <img src="assets/images/icons/archived.svg" alt="">
                                                    </div>
                                                    <h6>Quote is Archived</h6>
                                                </button>
                                            </li>
                                        </ul>
                                      </div>  
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="collapseSidebar d-none d-md-grid">
                <img src="assets/images/icons/arrow.svg" alt="">
            </div>
        </div>
    </div>
</main>

<?php include 'layout/footer.php'; ?>