<?php include('dbconfig.php'); ?>
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
  
  <!-- End layout styles -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="shortcut icon" href="../../../assets/images/favicon.png" />
  <style >
::placeholder {
    text-align : center;
    
}
textarea {
  resize: none;
}
  </style>
</head>
<body>
  <!--  -->
   <!-- Thêm POP UP FORM (Bootstrap MODAL) -->
   <div class="modal fade" id="addmodal_group" tabindex="-1" role="dialog"  data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align:center">Thêm nhóm comment</h5>
                </div>
                <form action="updatecode.php" method="POST">
                    <div class="modal-body">
                    <div class="form-group">
                    <!-- <input type="text" name="update_id" id="update_id"> -->
                        <textarea name="add_comments_group" id="" cols="2" rows="2" style="width:100%; " placeholder="Các comment sẽ được tách bởi dấu xuống dòng"></textarea>
                
                        </div>
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                    <button type="submit" name="updatedata_cm_Group"  style="width: 40%; background-color: #008cffc9;" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-secondary" style="width: 40% ;background-color: #ff00006e;" data-bs-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- Thêm comment riêng lẻ -->
     <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center">
                <h5 class="modal-title" id="exampleModalLabel" style="text-align:center">Thêm comment</h5>
                </div>
                <form action="updatecode.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="update_id" id="update_id">
                        <div class="form-group">
                            <textarea name="add_comments" id="" cols="2" rows="2" style="width:100%; " placeholder="Các comment sẽ được tách bởi dấu xuống dòng"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                    <button type="submit" name="updatedata"  style="width: 40%; background-color: #008cffc9;" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-secondary" style="width: 40% ;background-color: #ff00006e;" data-bs-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
     <!-- Thêm tags -->
     <div class="modal fade" id="add_tagsss" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center">
                <h5 class="modal-title" id="exampleModalLabel" >Thêm tags</h5>
                </div>
                <form action="updatecode.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="insert_id" id="insert_id">
                        <div class="form-group">
                            <textarea name="add_tagssss" id="" cols="2" rows="2" style="width:100%; "></textarea>
                            <!-- <input name="add_tagssss" cols="2" rows="2" type="text" style="width:100%"> -->
                        </div>
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                    <button type="submit" name="insert_tags"  style="width: 40%; background-color: #008cffc9;" class="btn btn-primary">Thêm</button>
                        <button type="button" class="btn btn-secondary" style="width: 40% ;background-color: #ff00006e;" data-bs-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- xóa 1 nhóm comment -->
<div class="modal fade" id="del_data_group" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center">
                <h5 class="modal-title" id="exampleModalLabel" >Xóa Nhóm Comment</h5>
                </div>
                <form action="delete_cmmm.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="del_id_group" id="del_id_group">
                        <div class="form-group">
                           <h4  style="text-align: center;">Bạn có muốn xóa nhóm comment không ? </h4>
                        </div>
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                    <button type="submit" name="deletedata_groups"  style="width: 40%; background-color: #008cffc9;" class="btn btn-primary">Có</button>
                        <button type="button" class="btn btn-secondary" style="width: 40% ;background-color: #ff00006e;" data-bs-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
   
<div class="modal fade" id="delData" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center">
                <h5 class="modal-title" id="exampleModalLabel" >Xóa comment</h5>
                </div>
                <form action="delete_cmmm.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id" id="delete_id">
                        <h4 style="text-align: center;"> Bạn có muốn xóa comment không ?</h4>
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                    <button type="submit" name="deletedata"  style="width: 40%; background-color: #008cffc9;" class="btn btn-primary">Xóa</button>
                        <button type="button" class="btn btn-secondary" style="width: 40% ;background-color: #ff00006e;" data-bs-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- delete form 2 -->
    <div class="modal fade" id="del_tagsssss" tabindex="-1" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: center">
                <h5 class="modal-title" id="exampleModalLabel" >Xóa tags</h5>
                </div>
                <form action="delete_cmmm.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="delete_id_tagsss" id="delete_id_tagsss">
                        <h4 style="text-align: center;"> Bạn có muốn xóa tag không ?</h4>
                    </div>
                    <div class="modal-footer" style="justify-content: space-evenly">
                    <button type="submit" name="deletedatatags"  style="width: 40%; background-color: #008cffc9;" class="btn btn-primary">Xóa</button>
                        <button type="button" class="btn btn-secondary" style="width: 40% ;background-color: #ff00006e;" data-bs-dismiss="modal">Hủy</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
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
              <?php
                $query = "SELECT comment_group.*, comment.* ,tags.*
                            FROM comment_group
                            LEFT JOIN comment ON comment_group.id = comment.id_comment_group
                            LEFT JOIN tags ON comment_group.id = tags.id_tags_group
                            WHERE status != 2
                            ORDER BY comment_group.id ";

$query_run = mysqli_query($conn, $query);
    $result =[];
    foreach ($query_run as $row){
      $item = [];

      $key = $row['id'];
      if(array_key_exists($key, $result)){
          if($row['id_comments'] ){
            if(!array_key_exists($row['id_comments'], $result[$key]['contents'])){
            $result[$key]['contents'][$row['id_comments']]  =  [ 'comment_id' => $row['id_comments'], 'cm_content' => $row['content_cm']];
            }
          }
	      if($row['id_tags'] ){
          if(!array_key_exists( $row['id_tags'], $result[$key]['tagss'])){
		      $result[$key]['tagss'][$row['id_tags']]  =  ['tag_id' => $row['id_tags'], 'tag_content' => $row['content']];
	      }
      }
    }
      else{
        $item['id'] = $row['id'];
        $item['ngaytao'] = $row['ngaytao'];
        if($row['id_comments']) {
	        $item['contents'] = [$row['id_comments']=>[ 'comment_id' => $row['id_comments'], 'cm_content' => $row['content_cm']]];
        } else {
	        $item['contents'] = [];
        }

        if($row['id_tags']) {
	        $item['tagss']  =  [$row['id_tags']=>['tag_id' => $row['id_tags'], 'tag_content' => $row['content']]];
        } else {
          $item['tagss'] = [];
        }
        $result[$key] = $item; 
      }
      }
    // echo "<pre>"; print_r($result);
    // echo "</pre>";
 ?><button type="button"  class="btn  hahaha" style="color:blue" >
<i data-feather="plus-circle"></i>
</button>
                <div class="table-responsive">
                
                <table id="datatableid" class="table table-bordered ">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">comments</th>
                                <th scope="col">ngày tạo </th>
                                <th scope="col"> tags </th>
                                <th scope="col"> Action </th>
                               
                            </tr>
                        </thead>
                    <tbody>
                        <?php
  foreach($result as $item){
    ?>
     <tr>
                              <td> <?php echo $item['id'] ?></td>
                              <td>
                              <?php 
                              $contents = "";
                            
                                foreach($item['contents'] as $key => $value) {
              
                              ?>
                          
                    
                              <div class="ngoai" style="background-color:rgba(99, 136, 99, 0.174); border: solid 1px green; width: 300px;display: flex; margin-bottom: 6px;
                         ">
                          <div class="trong"> 
                         
                               <?php  echo  '<button type="button" id='  . $value['comment_id'] . ' "  class="btn del_data" style="color: blue"><i data-feather="x-circle"></i></button>' . $value['cm_content'] . " " ;
                                      ;
                               ?>
                          </div>
                        </div> 
                        <?php } ?>
                        <button type="button" class="btn addbtn" style="color: blue"> 
                        <i data-feather="plus-circle"></i>
                        </button> 

                      
                        
                             <!-- <button type="button" class="btn btn-success addbtn"> Thêm </button> -->
                           
                              </td>
                                <td> <?php echo date("d/m/Y" ,strtotime($item['ngaytao'] )); ?></td>
                              <td> 
                              <?php
                               $tags = "";
                               foreach($item['tagss'] as $key => $value){
    
                               
                               
                            //    echo "<hr>";
                            //    echo $tags;

                            
                              ?>
                           <div class="ngoai" style="background-color:rgba(99, 136, 99, 0.174); border: solid 1px green; width: 300px;display: flex; margin-bottom: 6px;
                         ">
                          <div class="trong"> 
                         
                               <?php  echo  '<button type="button" id='  . $value['tag_id'] . ' "  class="btn del_tagss" style="color: blue"><i data-feather="x-circle"></i></button>' . $value['tag_content'] . " " ;
                                      ;
                                      ?>
                          </div>
                        </div> 

                        <?php } ?>
                          <button type="button" style="color: blue" class="btn add_tagss"><i data-feather="plus-circle"></i> </button>
                             
                              </td>
                              <td>
                              <button type="button" class="btn del_data_groupss" ><i class="link-icon" style="color: blue"data-feather="trash-2"></i></button>
                              <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="link-icon" style="color: blue"data-feather="file"></i></button>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                    </table>
                </div>
              </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#datatableid').DataTable({
                "pagingType": "full_numbers",
                "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                ],
                responsive: true,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search",
                }
            });

        });
    </script>
    <script>
        $(document).ready(function () {
            $('.hahaha').on('click', function () {

                $('#addmodal_group').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.addbtn').on('click', function () {

                $('#addmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);

            });
        });
    </script>

<script>
        $(document).ready(function () {
            $('.add_tagss').on('click', function () {

                $('#add_tagsss').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#insert_id').val(data[0]);

            });
        });
    </script>


<script>
        $(document).ready(function () {
            $('.hienthi').on('click', function () {

                $('#exampleModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);

            });
        });
</script>
<script>
        $(document).ready(function () {
            $('.del_data_groupss').on('click', function () {

                $('#del_data_group').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#del_id_group').val(data[0]);

            });
        });
    </script>
<script>
        $(document).ready(function () {

            $('.del_data').on('click', function () {

                $('#delData').modal('show');

                var del_id = $(this).attr('id');
               console.log(del_id);


                $('#delete_id').val(del_id);

            });
        });
    </script>

    
<script>
        $(document).ready(function () {

            $('.del_tagss').on('click', function () {

                $('#del_tagsssss').modal('show');

                var del_id_tags = $(this).attr('id');
               console.log(del_id_tags);


                $('#delete_id_tagsss').val(del_id_tags);

            });
        });
    </script>


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
  <!-- <script src="../../../assets/js/data-table.js"></script> -->
	<!-- End custom js for this page -->

</body>
</html>