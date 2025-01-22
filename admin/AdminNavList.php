<div>
    <h3 class="my-5 text-white">Admin Panel</h3>
    <div class="main-nav text-white">
        <div>
            <a href='index.php'>
                <div class="d-flex align-content-center gap-2 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-layout-dashboard">
                        <rect width="7" height="9" x="3" y="3" rx="1" />
                        <rect width="7" height="5" x="14" y="3" rx="1" />
                        <rect width="7" height="9" x="14" y="12" rx="1" />
                        <rect width="7" height="5" x="3" y="16" rx="1" />
                    </svg>
                    <div class="text-light flex-grow-1  ">Dashbord</div>

                </div>
            </a>

        </div>
        <div>
            <a href='Users.php'>
                <div class="d-flex align-content-center gap-2 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-users">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                    <div class="text-light ">User</div>
                </div>
            </a>

        </div>
        <div>
            <a href="#carsubmenu" data-toggle="collapse" aria-expanded="false">
                <div class="d-flex align-content-center gap-2 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-car-front pr-3">
                        <path d="m21 8-2 2-1.5-3.7A2 2 0 0 0 15.646 5H8.4a2 2 0 0 0-1.903 1.257L5 10 3 8" />
                        <path d="M7 14h.01" />
                        <path d="M17 14h.01" />
                        <rect width="18" height="8" x="3" y="10" rx="2" />
                        <path d="M5 18v2" />
                        <path d="M19 18v2" />
                    </svg>
                    <div class="text-light flex-grow-1  ">Cars</div>
                    <div class='text-light ' style="transform:rotate(180deg);">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-up">
                            <path d="m18 15-6-6-6 6" />
                        </svg>
                    </div>
                </div>
            </a>
            <div class="collapse list-unstyled" id="carsubmenu">
                <div class="d-flex text-start   flex-column gap-2  py-2 "
                    style="transform: translateX(70px);font-size:0.8vw">
                    <a href='Cars.php'>
                        <div class='text-light '>View Cars</div>
                    </a>
                    <a href='Add-car.php'>
                        <div class='text-light '>Add Cars</div>
                    </a>
                    <a href='Manage-car.php'>
                        <div class='text-light '>Manage Cars</div>
                    </a>
                </div>
            </div>

        </div>
        <div>
            <a href="#driver" data-toggle="collapse" aria-expanded="false">
                <div class="d-flex align-content-center gap-2 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-car-taxi-front">
                        <path d="M10 2h4" />
                        <path d="m21 8-2 2-1.5-3.7A2 2 0 0 0 15.646 5H8.4a2 2 0 0 0-1.903 1.257L5 10 3 8" />
                        <path d="M7 14h.01" />
                        <path d="M17 14h.01" />
                        <rect width="18" height="8" x="3" y="10" rx="2" />
                        <path d="M5 18v2" />
                        <path d="M19 18v2" />
                    </svg>
                    <div class="text-light flex-grow-1  ">Drivers</div>
                    <div class='text-light ' style="transform:rotate(180deg);">
                        <svg xmlns=" http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-up">
                            <path d="m18 15-6-6-6 6" />
                        </svg>
                    </div>
                </div>
            </a>
            <div class="collapse list-unstyled " id="driver">
                <div class="d-flex text-start   flex-column gap-2  py-2 "
                    style="transform: translateX(70px);font-size:0.8vw">
                    <a href='Drivers.php'>
                        <div class='text-light '>View Driver</div>
                    </a>
                    <a href='Add-driver.php'>
                        <div class='text-light '>Add Driver</div>
                    </a>
                    <a href='Add-driver.php'>
                        <div class='text-light '>Manage Driver</div>
                    </a>

                </div>
            </div>

        </div>

        <div>
            <a href='Feedback.php'>
                <div class="d-flex align-content-center gap-2 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-message-square-text">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                        <path d="M13 8H7" />
                        <path d="M17 12H7" />
                    </svg>
                    <div class="text-light ">Feedback</div>
                </div>
            </a>

        </div>
        <div>
            <a href='Booked-cars.php'>
                <div class="d-flex align-content-center gap-2 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-book-open-check">
                        <path d="M8 3H2v15h7c1.7 0 3 1.3 3 3V7c0-2.2-1.8-4-4-4Z" />
                        <path d="m16 12 2 2 4-4" />
                        <path d="M22 6V3h-6c-2.2 0-4 1.8-4 4v14c0-1.7 1.3-3 3-3h7v-2.3" />
                    </svg>
                    <div class="text-light ">Booked Cars</div>
                </div>
            </a>

        </div>

        <div>
            <a href="Contact-user.php">
                <div class="d-flex align-content-center gap-2 px-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-bell-ring">
                        <path d="M6 8a6 6 0 0 1 12 0c0 7 3 9 3 9H3s3-2 3-9" />
                        <path d="M10.3 21a1.94 1.94 0 0 0 3.4 0" />
                        <path d="M4 2C2.8 3.7 2 5.7 2 8" />
                        <path d="M22 8c0-2.3-.8-4.3-2-6" />
                    </svg>
                    <div class="text-light ">Contact Users</div>
                </div>
            </a>

        </div>

    </div>
</div>