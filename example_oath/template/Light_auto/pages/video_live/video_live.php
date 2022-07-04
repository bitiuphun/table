
<!DOCTYPE html>
<!--
Template Name: NobleUI - HTML Bootstrap 5 Admin Dashboard Template
Author: NobleUI
Website: https://www.nobleui.com
Portfolio: https://themeforest.net/user/nobleui/portfolio
Contact: nobleui123@gmail.com
Purchase: https://1.envato.market/nobleui_admin
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
	<meta name="author" content="NobleUI">
	<meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<title>NobleUI - HTML Bootstrap 5 Admin Dashboard Template</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
  <!-- End fonts -->

	<!-- core:css -->
	<link rel="stylesheet" href="../../../assets/vendors/core/core.css">
	<!-- endinject -->

	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css">
	<!-- End plugin css for this page -->

	<!-- inject:css -->
	<link rel="stylesheet" href="../../../assets/fonts/feather-font/css/iconfont.css">
	<link rel="stylesheet" href="../../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
	<!-- endinject -->

  <!-- Layout styles -->  
	<link rel="stylesheet" href="../../../assets/css/demo1/style.css">
    <link rel="stylesheet" href="style_video.css">
  <!-- End layout styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
</head>
<body>
	<div class="main-wrapper">

		<!-- partial:../../partials/_sidebar.html -->
		<nav class="sidebar">
      <div class="sidebar-header">
        <a href="../../dashboard.php" class="sidebar-brand">
          Noble<span>UI</span>
        </a>
        <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
      <div class="sidebar-body">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a class="nav-link"  href="../../pages/users/user-table.php">
              <i class="link-icon" data-feather="user"></i>
              <span class="link-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../pages/comments/table_comment.php" class="nav-link">
              <i class="link-icon" data-feather="message-square"></i>
              <span class="link-title">Comments</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="../../pages/video_live/video_live.php" class="nav-link">
              <i class="link-icon" data-feather="video"></i>
              <span class="link-title">Video/Livestream</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <nav class="settings-sidebar">
      <div class="sidebar-body">
        <a href="#" class="settings-sidebar-toggler">
          <i data-feather="settings"></i>
        </a>
        <h6 class="text-muted mb-2">Sidebar:</h6>
        <div class="mb-3 pb-3 border-bottom">
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
            <label class="form-check-label" for="sidebarLight">
              Light
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
            <label class="form-check-label" for="sidebarDark">
              Dark
            </label>
          </div>
        </div>
        <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Theme:</h6>
          <a class="theme-item active" href="../../../Light_auto/pages/video_live/video_live.php">
            <img src="../../../assets/images/screenshots/light.jpg" alt="light theme">
          </a>
          <h6 class="text-muted mb-2">Dark Theme:</h6>
          <a class="theme-item" href="../../../Dark_auto/pages/video_live/video_live.php">
            <img src="../../../assets/images/screenshots/dark.jpg" alt="light theme">
          </a>
        </div>
      </div>
    </nav>
		<!-- partial -->
	
		<div class="page-wrapper">
				
			<!-- partial:../../partials/_navbar.html -->
			<nav class="navbar">
				<a href="#" class="sidebar-toggler">
					<i data-feather="menu"></i>
				</a>
				<div class="navbar-content">
					<form class="search-form">
						<div class="input-group">
              <div class="input-group-text">
                <i data-feather="search"></i>
              </div>
							<input type="text" class="form-control" id="navbarForm" placeholder="Search here...">
						</div>
					</form>
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="flag-icon flag-icon-us mt-1" title="us"></i> <span class="ms-1 me-1 d-none d-md-inline-block">English</span>
							</a>
							<div class="dropdown-menu" aria-labelledby="languageDropdown">
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-us" title="us" id="us"></i> <span class="ms-1"> English </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-fr" title="fr" id="fr"></i> <span class="ms-1"> French </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-de" title="de" id="de"></i> <span class="ms-1"> German </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-pt" title="pt" id="pt"></i> <span class="ms-1"> Portuguese </span></a>
                <a href="javascript:;" class="dropdown-item py-2"><i class="flag-icon flag-icon-es" title="es" id="es"></i> <span class="ms-1"> Spanish </span></a>
							</div>
            </li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="appsDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="grid"></i>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="appsDropdown">
                <div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p class="mb-0 fw-bold">Web Apps</p>
									<a href="javascript:;" class="text-muted">Edit</a>
								</div>
                <div class="row g-0 p-1">
                  <div class="col-3 text-center">
                    <a href="../../pages/apps/chat.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="message-square" class="icon-lg mb-1"></i><p class="tx-12">Chat</p></a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="../../pages/apps/calendar.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="calendar" class="icon-lg mb-1"></i><p class="tx-12">Calendar</p></a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="../../pages/email/inbox.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="mail" class="icon-lg mb-1"></i><p class="tx-12">Email</p></a>
                  </div>
                  <div class="col-3 text-center">
                    <a href="../../pages/general/profile.html" class="dropdown-item d-flex flex-column align-items-center justify-content-center wd-70 ht-70"><i data-feather="instagram" class="icon-lg mb-1"></i><p class="tx-12">Profile</p></a>
                  </div>
                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="mail"></i>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="messageDropdown">
								<div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p>9 New Messages</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Leonardo Payne</p>
                        <p class="tx-12 text-muted">Project status</p>
                      </div>
                      <p class="tx-12 text-muted">2 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Carl Henson</p>
                        <p class="tx-12 text-muted">Client meeting</p>
                      </div>
                      <p class="tx-12 text-muted">30 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Jensen Combs</p>
                        <p class="tx-12 text-muted">Project updates</p>
                      </div>
                      <p class="tx-12 text-muted">1 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Amiah Burton</p>
                        <p class="tx-12 text-muted">Project deatline</p>
                      </div>
                      <p class="tx-12 text-muted">2 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="d-flex justify-content-between flex-grow-1">
                      <div class="me-4">
                        <p>Yaretzi Mayo</p>
                        <p class="tx-12 text-muted">New record</p>
                      </div>
                      <p class="tx-12 text-muted">5 hrs ago</p>
                    </div>	
                  </a>
                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i data-feather="bell"></i>
								<div class="indicator">
									<div class="circle"></div>
								</div>
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="notificationDropdown">
								<div class="px-3 py-2 d-flex align-items-center justify-content-between border-bottom">
									<p>6 New Notifications</p>
									<a href="javascript:;" class="text-muted">Clear all</a>
								</div>
                <div class="p-1">
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="gift"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>New Order Recieved</p>
											<p class="tx-12 text-muted">30 min ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="alert-circle"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Server Limit Reached!</p>
											<p class="tx-12 text-muted">1 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
                      <img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="userr">
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>New customer registered</p>
											<p class="tx-12 text-muted">2 sec ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="layers"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Apps are ready for update</p>
											<p class="tx-12 text-muted">5 hrs ago</p>
                    </div>	
                  </a>
                  <a href="javascript:;" class="dropdown-item d-flex align-items-center py-2">
                    <div class="wd-30 ht-30 d-flex align-items-center justify-content-center bg-primary rounded-circle me-3">
											<i class="icon-sm text-white" data-feather="download"></i>
                    </div>
                    <div class="flex-grow-1 me-2">
											<p>Download completed</p>
											<p class="tx-12 text-muted">6 hrs ago</p>
                    </div>	
                  </a>
                </div>
								<div class="px-3 py-2 d-flex align-items-center justify-content-center border-top">
									<a href="javascript:;">View all</a>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="wd-30 ht-30 rounded-circle" src="https://via.placeholder.com/30x30" alt="profile">
							</a>
							<div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
								<div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
									<div class="mb-3">
										<img class="wd-80 ht-80 rounded-circle" src="https://via.placeholder.com/80x80" alt="">
									</div>
									<div class="text-center">
										<p class="tx-16 fw-bolder">Amiah Burton</p>
										<p class="tx-12 text-muted">amiahburton@gmail.com</p>
									</div>
								</div>
                <ul class="list-unstyled p-1">
                  <li class="dropdown-item py-2">
                    <a href="../../pages/general/profile.html" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="user"></i>
                      <span>Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="edit"></i>
                      <span>Edit Profile</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="repeat"></i>
                      <span>Switch User</span>
                    </a>
                  </li>
                  <li class="dropdown-item py-2">
                    <a href="javascript:;" class="text-body ms-0">
                      <i class="me-2 icon-md" data-feather="log-out"></i>
                      <span>Log Out</span>
                    </a>
                  </li>
                </ul>
							</div>
						</li>
					</ul>
				</div>
			</nav>
			<!-- partial -->

			<div class="page-content">
				<div class="row">
					<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
              
                <div class="table-responsive">
                  
                  <table id="dataTableExample" class="table">
                  <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#insert_modal"><i class="link-icon" style="color: blue"data-feather="plus-circle"></i>
                  <thead>
                      <tr>
                        <th>#</th>
                        <th>Link</th>
                        <th>Options</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>1</th>
                        <td>  </td>
                        <td>
                        <div class="ngoai" style="background-color:rgba(99, 136, 99, 0.174); border: solid 1px green; width: 300px;display: flex;
                          justify-content: center">
                          <div class="trong"> 
                              <label class="label_time" style="margin: 6px 0">Thời gian bắt đầu: ------------------------</label>
                          </div>
                        </div>

                        <div class="ngoai" style="margin-top: 4px; background-color:rgba(99, 136, 99, 0.174); border: solid 1px green; width: 300px;display: flex;
                          justify-content: center">
                          <div class="trong"> 
                              <label class="label_time" style="margin: 6px 0">Thời gian ngừng: ------------------------</label>
                          </div>
                        </div>

                        <div class="ngoai" style="margin-top: 4px; background-color:rgba(99, 136, 99, 0.174); border: solid 1px green; width: 300px;display: flex;
                          justify-content: center">
                          <div class="trong"> 
                              <label class="label_time" style="margin: 6px 0">Nhóm comment: ------------------------</label>
                          </div>
                        </div>

                        </td>
                        <td><button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="link-icon" style="color: blue"data-feather="trash-2"></i>
                            <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="link-icon" style="color: blue"data-feather="edit"></i>  
                        </td>
                      </tr>

                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
					</div>
				</div>

			</div>

 <!-- Modal thêm -->
 <div class="modal fade" id="insert_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-lg ">
                    <div class="modal-content" >
                      <div class="modal-header" style="justify-content:center;">
                        <h5 class="modal-title" id="staticBackdropLabel">New Project</h5>
                      </div>
                      <div class="modal-body">
                        <div class="link_modal">
                          <h4>Link</h4>
                          <input type="search"   cols="40"  rows="5"   style="border-radius: 5px;outline: none; width: 300px; margin-top: 15px;">
                        </div>
                        <div class="time_link mt-5 ">
                          <div class="time_start">
                            <label class="form-check-label" for="flexCheckDefault">
                              Thời gian bắt đầu comment
                            </label>
                            <input type="datetime-local" placeholder>
                          </div>
                          <div class="time_end" style=" margin: 0 0 0 32px;">
                            <label class="form-check-label" for="flexCheckDefault">
                              Thời gian ngừng comment
                            </label>
                            <input type="datetime-local" placeholder>
                          </div>
                        </div>
                        <div class="time_link mt-5 ">
                          <div class="content_group">
                            <label class="form-check-label" for="flexCheckDefault">
                              Nhóm comment
                            </label>
                            <div class="dropdown mt-3">
                              <a class="btn btn-secondary dropdown-toggle dropdown_comment" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                #1(AMA CEO, AMA 001)
                              </a>
                            
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                              </ul>
                            </div>
                            <!-- check box -->
                            <div class="form-check mt-4">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                              <label class="form-check-label" for="flexCheckDefault">
                                Comment lần nữa sau khi live
                              </label>
                            </div>
                            <div class="form-check mt-4">
                              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                              <label class="form-check-label" for="flexCheckChecked">
                                Comment theo thứ tự
                              </label>
                            </div>
                          </div>
                          <div class="time_content">
                            <label class="form-check-label" for="flexCheckDefault">
                              Comment cách nhau ... giây
                            </label>
                            <div class="time__comment mt-2">
                              <div class="time__comment_item">
                                <button class="btn_time btn btn-primary ">-</button>
                                <h5 class="title">9</h5>
                                <button class="btn_time btn btn-primary " >+</button>
                              </div>
                            </div>
                            <label class="form-check-label mt-3" for="flexCheckDefault">
                              Mỗi comment chỉ dùng ... lần
                            </label>
                            <div class="time__comment mt-2">
                              <div class="time__comment_item">
                                <button class="btn_time btn btn-primary ">-</button>
                                <h5 class="title">9</h5>
                                <button class="btn_time btn btn-primary " >+</button>
                              </div>
                            </div>
                          </div>
                        </div>
                          
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn_footer">Ok</button>
                        <button type="button" class="btn btn-secondary btn_footer" style="background-color: #ff00006e;" data-bs-dismiss="modal">Hủy</button>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal 2 xóa-->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-body">
                    <h5 class="modal-title" id="exampleModalLabel" style="text-align: center">Bạn có muốn xóa việc <br> comment Video/livestream <br> #1 ?</h5>
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                        <button type="button" style="width: 40%; background-color: #008cffc9;"class="btn btn-primary">Ok</button>
                        <button type="button" style="width: 40% ;background-color: #ff00006e;" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- Modal 3 edit-->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg ">
    <div class="modal-content">
      <div class="modal-header" style="justify-content:center;">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Project #1</h5>
      </div>
      <div class="modal-body">
        <div class="link_modal">
          <h4>Link</h4>
          <input type="search" style="border-radius: 5px;outline: none; width: 300px; margin-top: 15px;">
        </div>
        <div class="time_link mt-5 ">
          <div class="time_start">
            <label class="form-check-label" for="flexCheckDefault">
              Thời gian bắt đầu comment
            </label>
            <input type="datetime-local" placeholder>
          </div>
          <div class="time_end" style=" margin: 0 0 0 32px;">
            <label class="form-check-label" for="flexCheckDefault">
              Thời gian ngừng comment
            </label>
            <input type="datetime-local" placeholder>
          </div>
        </div>
        <div class="time_link mt-5 ">
          <div class="content_group">
            <label class="form-check-label" for="flexCheckDefault">
              Nhóm comment
            </label>
            <div class="dropdown mt-3">
              <a class="btn btn-secondary dropdown-toggle dropdown_comment" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                #1(AMA CEO, AMA 001)
              </a>
            
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </div>
            <!-- check box -->
            <div class="form-check mt-4">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                Comment lần nữa sau khi live
              </label>
            </div>
            <div class="form-check mt-4">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
              <label class="form-check-label" for="flexCheckChecked">
                Comment theo thứ tự
              </label>
            </div>
          </div>
          <div class="time_content">
            <label class="form-check-label" for="flexCheckDefault">
              Comment cách nhau ... giây
            </label>
            <div class="time__comment mt-2">
              <div class="time__comment_item">
                <button class="btn_time btn btn-primary ">-</button>
                <h5 class="title">9</h5>
                <button class="btn_time btn btn-primary " >+</button>
              </div>
            </div>
            <label class="form-check-label mt-3" for="flexCheckDefault">
              Mỗi comment chỉ dùng ... lần
            </label>
            <div class="time__comment mt-2">
              <div class="time__comment_item">
                <button class="btn_time btn btn-primary ">-</button>
                <h5 class="title">9</h5>
                <button class="btn_time btn btn-primary " >+</button>
              </div>
            </div>
          </div>
        </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn_footer">Ok</button>
        <button type="button" class="btn btn-secondary btn_footer" style="background-color: #ff00006e;" data-bs-dismiss="modal">Hủy</button>
        
      </div>
    </div>
  </div>
</div>
			<!-- partial:../../partials/_footer.html -->
			<footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between px-4 py-3 border-top small">
				<p class="text-muted mb-1 mb-md-0">Copyright © 2022 <a href="https://www.nobleui.com" target="_blank">NobleUI</a>.</p>
				<p class="text-muted">Handcrafted With <i class="mb-1 text-primary ms-1 icon-sm" data-feather="heart"></i></p>
			</footer>
			<!-- partial -->
	
		</div>
	</div>

	<!-- core:js -->
	<script src="../../../assets/vendors/core/core.js"></script>
	<!-- endinject -->

	<!-- Plugin js for this page -->
  <script src="../../../assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../../assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js"></script>
	<!-- End plugin js for this page -->

	<!-- inject:js -->
	<script src="../../../assets/vendors/feather-icons/feather.min.js"></script>
	<script src="../../../assets/js/template.js"></script>
	<!-- endinject -->

	<!-- Custom js for this page -->
  <script src="../../../assets/js/data-table.js"></script>
	<!-- End custom js for this page -->

</body>
</html>