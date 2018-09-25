<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:92:"C:\phpStudy\PHPTutorial\WWW\adsweb\public/../application/index\view\qualification\quali.html";i:1537404461;s:69:"C:\phpStudy\PHPTutorial\WWW\adsweb\application\index\view\layout.html";i:1533263254;s:76:"C:\phpStudy\PHPTutorial\WWW\adsweb\application\index\view\public\header.html";i:1534068558;s:76:"C:\phpStudy\PHPTutorial\WWW\adsweb\application\index\view\public\footer.html";i:1534002831;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>广告大师</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/static/admin/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/static/admin/css/bootstrap-responsive.min.css" />
  <link rel="stylesheet" href="/static/admin/css/fullcalendar.css" />
  <link rel="stylesheet" href="/static/admin/css/matrix-style.css" />
  <link rel="stylesheet" href="/static/admin/css/matrix-media.css" />
  <link rel="stylesheet" href="/static/admin/css/my.css">
  <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="/static/admin/css/jquery.gritter.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
  <script src="/static/admin/js/jquery-3.3.1.min.js"></script>
</head>
<body>

  <!--Header-part-->
  <div id="header">
    <h1><a href="dashboard.html">广告大师</a></h1>
  </div>
  <!--close-Header-part-->


  <!--top-Header-menu-->
  <div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav">
      <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">你好</span><b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="icon-user"></i> 个人信息</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="icon-check"></i> 我的广告</a></li>
          <li class="divider"></li>
          <li><a href="login.html"><i class="icon-key"></i> 退出</a></li>
        </ul>
      </li>
      <!-- <li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">消息</span> <span class="label label-important">5</span></a>
      </li>
      <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
      <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li> -->
    </ul>
  </div>
  <!--close-top-Header-menu-->
  <!--start-top-serch-->
  <div id="search">
    <input type="text" placeholder="Search here..."/>
    <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
  </div>
  <!--close-top-serch-->
  <!--sidebar-menu-->
  <div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
      <li class="<?php echo getAction() == 'index' ? 'active' : ' ' ?>"><a href="<?php echo url('index/index/index'); ?>"><i class="icon icon-home"></i> <span>仪表盘</span></a> </li>
      <li class="<?php echo getAction() == 'qualification' ? 'active' : ' ' ?>"><a href="<?php echo url('index/seller/qualification'); ?>"><i class="icon icon-home"></i> <span>商家认证</span></a> </li>
      <li class="<?php echo getAction() == 'add' ? 'active' : ' ' ?>"> <a href="<?php echo url('index/leaflet/add'); ?>"><i class="icon icon-signal"></i> <span>发布广告</span></a> </li>
      <li class="<?php echo getAction() == 'cashback' ? 'active' : ' ' ?>"> <a href="widgets.html"><i class="icon icon-inbox"></i> <span>小票返现</span></a> </li>
      <li class="<?php echo getAction() == 'index' ? 'active' : ' ' ?>"><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
      <li class="<?php echo getAction() == 'index' ? 'active' : ' ' ?>"><a href="grid.html"><i class="icon icon-fullscreen"></i> <span>Full width</span></a></li>
      <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
        <ul>
          <li><a href="form-common.html">Basic Form</a></li>
          <li><a href="form-validation.html">Form with Validation</a></li>
          <li><a href="form-wizard.html">Form with Wizard</a></li>
        </ul>
      </li>
      <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
      <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
      <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">5</span></a>
        <ul>
          <li><a href="index2.html">Dashboard2</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="calendar.html">Calendar</a></li>
          <li><a href="invoice.html">Invoice</a></li>
          <li><a href="chat.html">Chat option</a></li>
        </ul>
      </li>
      <li class="submenu"> <a href="#"><i class="icon icon-info-sign"></i> <span>Error</span> <span class="label label-important">4</span></a>
        <ul>
          <li><a href="error403.html">Error 403</a></li>
          <li><a href="error404.html">Error 404</a></li>
          <li><a href="error405.html">Error 405</a></li>
          <li><a href="error500.html">Error 500</a></li>
        </ul>
      </li>
      <li class="content"> <span>Monthly Bandwidth Transfer</span>
        <div class="progress progress-mini progress-danger active progress-striped">
          <div style="width: 77%;" class="bar"></div>
        </div>
        <span class="percent">77%</span>
        <div class="stat">21419.94 / 14000 MB</div>
      </li>
      <li class="content"> <span>Disk Space Usage</span>
        <div class="progress progress-mini active progress-striped">
          <div style="width: 87%;" class="bar"></div>
        </div>
        <span class="percent">87%</span>
        <div class="stat">604.44 / 4000 MB</div>
      </li>
    </ul>
  </div>
  <!--sidebar-menu-->

	<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> 
      <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> 首页</a> 
      <a href="#" class="tip-bottom">商家认证</a> 
    </div>
    <h1>认证</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>基本信息填写</h5>
          </div>
          <div class="widget-content nopadding">
            <form action="index/seller/qualification" method="post" class="form-horizontal" enctype="multipart/form-data">
              <div class="control-group">
                <label class="control-label">商家名称：</label>
                <div class="controls">
                  <input type="text" name="seller" class="span11"/>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">地址：</label>
                <div class="controls">
                  <input type="text" name="addr" class="span11" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">营业执照：</label>
                <div class="controls">
                  <input type="file" name="licensepic" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">营业执照编号：</label>
                <div class="controls">
                  <input type="text" name="licensenum" class="span11" placeholder="license" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">身份证：</label>
                <div class="controls">
                  <input type="file" name="idcardpic" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">身份证号：</label>
                <div class="controls">
                  <input type="text" name="idcardnum" class="span11" placeholder="idcard" />
                </div>
              </div>
              <div class="form-actions">
                <button type="submit" class="btn btn-success">保存</button>
                <button type="reset" class="btn btn-danger">重置</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
</div>
<!--Footer-part-->

<div class="row-fluid">
<div id="footer" class="span12"> 2018 &copy; 广告大师. 版权所有 efan</a> </div>
</div>

<!--end-Footer-part-->

<script src="/static/admin/js/excanvas.min.js"></script> 
<script src="/static/admin/js/jquery.min.js"></script>
<script src="/static/admin/js/jquery.ui.custom.js"></script> 
<script src="/static/admin/js/bootstrap.min.js"></script> 
<script src="/static/admin/js/jquery.flot.min.js"></script> 
<script src="/static/admin/js/jquery.flot.resize.min.js"></script> 
<script src="/static/admin/js/jquery.peity.min.js"></script> 
<script src="/static/admin/js/fullcalendar.min.js"></script> 
<script src="/static/admin/js/matrix.js"></script> 
<script src="/static/admin/js/matrix.dashboard.js"></script> 
<!-- <script src="/static/admin/js/jquery.gritter.min.js"></script>  -->
<script src="/static/admin/js/matrix.interface.js"></script> 
<script src="/static/admin/js/matrix.chat.js"></script> 
<script src="/static/admin/js/jquery.validate.js"></script> 
<script src="/static/admin/js/matrix.form_validation.js"></script> 
<script src="/static/admin/js/jquery.wizard.js"></script> 
<script src="/static/admin/js/jquery.uniform.js"></script> 
<script src="/static/admin/js/select2.min.js"></script> 
<script src="/static/admin/js/matrix.popover.js"></script> 
<script src="/static/admin/js/jquery.dataTables.min.js"></script> 
<script src="/static/admin/js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
            resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
        }
      }

// resets the menu selection upon entry to this page:
function resetMenu() {
 document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
