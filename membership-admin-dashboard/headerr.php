<!DOCTYPE php>
<php lang="en">
  <meta http-equiv="content-type" content="text/php;charset=UTF-8" />
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Membership Admin Dashboard</title>
    <link rel="shortcut icon" href="public/images/favicon.png" type="image/x-icon">
    <link href="public/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/vendor/chartist/css/chartist.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="public/vendor/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="public/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="public/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="public/css/style.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tiny.cloud/1/dfpwqzta0shla64s4zi0rqjezy639oqfj9hnk8bwsqr8lu08/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
  </head>

  <body>
    <div id="preloader">
      <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
      </div>
    </div>
    <div id="main-wrapper">
      <div class="nav-header">
        <a href="index.php" class="brand-logo">
          <img src="public/images/logo.png" class="img-fluid headertop-side">
        </a>
        <div class="nav-control">
          <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
          </div>
        </div>
      </div>
      <div class="chatbox">
        <div class="chatbox-close"></div>
        <div class="custom-tab-1">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="./chats.php">Chat</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="header">
        <div class="header-content">
          <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
              <div class="header-left">
                <div class="dashboard_bar">Dashboard</div>
              </div>
              <ul class="navbar-nav header-right">
                <li class="nav-item dropdown notification_dropdown">
                  <a class="nav-link ai-icon" href="#" role="button" data-bs-toggle="dropdown">
                    <svg width="26" height="28" viewBox="0 0 26 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M9.45251 25.6682C10.0606 27.0357 11.4091 28 13.0006 28C14.5922 28 15.9407 27.0357 16.5488 25.6682C15.4266 25.7231 14.2596 25.76 13.0006 25.76C11.7418 25.76 10.5748 25.7231 9.45251 25.6682Z" fill="#3E4954" />
                      <path d="M25.3531 19.74C23.8769 17.8785 21.3995 14.2195 21.3995 10.64C21.3995 7.09073 19.1192 3.89758 15.7995 2.72382C15.7592 1.21406 14.5183 0 13.0006 0C11.4819 0 10.2421 1.21406 10.2017 2.72382C6.88095 3.89758 4.60064 7.09073 4.60064 10.64C4.60064 14.2207 2.12434 17.8785 0.647062 19.74C0.154273 20.3616 0.00191325 21.1825 0.240515 21.9363C0.473484 22.6721 1.05361 23.2422 1.79282 23.4595C3.08755 23.8415 5.20991 24.2715 8.44676 24.491C9.84785 24.5851 11.3543 24.64 13.0007 24.64C14.646 24.64 16.1524 24.5851 17.5535 24.491C20.7914 24.2715 22.9127 23.8415 24.2085 23.4595C24.9477 23.2422 25.5268 22.6722 25.7597 21.9363C25.9983 21.1825 25.8448 20.3616 25.3531 19.74Z" fill="#3E4954" />
                    </svg>
                    <span class="badge light text-white bg-primary rounded-circle">52</span>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
                      <ul class="timeline">
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Dr sultads Send you Photo</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Resport created successfully</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Reminder : Treatment Time!</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Dr sultads Send you Photo</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Resport created successfully</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="timeline-panel">
                            <div class="media-body">
                              <h6 class="mb-1">Reminder : Treatment Time!</h6>
                              <small class="d-block">29 July 2020 - 02:26 PM</small>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <a class="all-notification" href="notifications.php">See all notifications <i class="ti-arrow-right"></i></a>
                  </div>
                </li>
                <li class="nav-item dropdown header-profile">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
                    <img src="public/images/profile/17.jpg" width="20" alt="" />
                    <div class="header-info">
                      <span class="text-black">George</span>
                      <p class="fs-12 mb-0">User Admin</p>
                    </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end">
                    <a href="app-profile.php" class="dropdown-item ai-icon">
                      <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                      </svg>
                      <span class="ms-2">Profile </span>
                    </a>
                    <a href="page-login.php" class="dropdown-item ai-icon">
                      <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                      </svg>
                      <span class="ms-2">Logout </span>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <div class="deznav">
        <div class="deznav-scroll">
          <ul class="metismenu" id="menu">

            <li class="has-menu">
              <a class="has-arrow ai-icon" href="./index.php" aria-expanded="false">
                <i class="flaticon-381-networking"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <li class="has-menu dropdown-list">
              <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-381-networking"></i>
                <span class="nav-text">Lists</span>
                <ul class="metismenu" id="menu">
                  <li class="has-menu first-list">
                    <a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                      <i class="flaticon-381-networking"></i>
                      <span class="nav-text">Membership Sign List</span>
                    </a>
                  </li>
                  
                  <li class="has-menu">
                    <a class="has-arrow ai-icon" href="./member-lists.php" aria-expanded="false">
                      <i class="flaticon-381-networking"></i>
                      <span class="nav-text">Member Sign List</span>
                    </a>
                  </li>
                  <li class="has-menu">
                    <a class="has-arrow ai-icon" href="./renew-list.php" aria-expanded="false">
                      <i class="flaticon-381-networking"></i>
                      <span class="nav-text">Renew List</span>
                    </a>
                  </li>
                </ul>
              </a>
            </li>
            <li class="has-menu">
              <a class="has-arrow ai-icon" href="./profile.php" aria-expanded="false">
                <i class="flaticon-381-networking"></i>
                <span class="nav-text">Profile</span>
              </a>
            </li>
          </ul>
        </div>
      </div>