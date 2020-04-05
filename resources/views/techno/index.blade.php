<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Techno Template, Blog</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!-- templatemo 349 techno -->
<!--
Techno Template
http://www.templatemo.com/preview/templatemo_349_techno
-->
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

</head>
<body id="subpage">

<div id="templatemo_wrapper">
	@include('techno.menu')
	@include('techno.header')


    <div id="templatemo_main">

		<div id="content">
        	<div class="post fpost">
            	<img src="images/blog/01.jpg" alt="Image 01" class="image_frame image_fl" />
                <h2><a rel="nofollow" href="http://www.templatemo.com">Free Website Templates</a></h2>
                <div class="meta">by <strong><a href="#">Edward </a></strong> on <strong>March 24, 2048</strong> in <strong><a href="#">Freebie</a>, <a href="#">Template</a></strong> | <strong><a href="#">124 comments</a></strong></div>
                <p>Quisque venenatis lacus vitae erat lacinia non rutrum purus suscipit. Suspendisse ligula metus, ullamcorper pretium rutrum ut, laoreet et erat. Aenean at urna sit amet massa pharetra cursus id vestibulum enim. Cras tempor, libero eget auctor consectetur, nulla lacus euismod nulla, ac fermentum sapien a libero.</p>
                <a href="blog_post.html" class="more float_r">More</a>
                <div class="cleaner"></div>
            </div>

            <div class="post">
            	<img src="images/blog/02.jpg" alt="Image 02" class="image_frame image_fl" />
                <h2>Multimedia Website</h2>
                <div class="meta">by <strong><a href="#">Johny</a></strong> on <strong>March 18, 2048</strong> in <strong><a href="#">Coding</a>, <a href="#">HTML</a></strong> | <strong><a href="#">196 comments</a></strong></div>
                <p>Nulla odio sapien, mollis commodo dictum vitae, mattis eget felis. Etiam malesuada est nec nisl commodo egestas sit amet non mi. Nam a lectus et nisi congue malesuada. Pellentesque velit lacus, venenatis et vehicula ut, consequat ac arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere.</p>
                <a href="blog_post.html" class="more float_r">More</a>
                <div class="cleaner"></div>
            </div>

            <div class="post">
            	<img src="images/blog/03.jpg" alt="Image 03" class="image_frame image_fl" />
                <h2>3D Animations</h2>
                <div class="meta">by <strong><a href="#">Eddy</a></strong> on <strong>March 15, 2048</strong> in <strong><a href="#">3D</a>, <a href="#">Interactive</a></strong> | <strong><a href="#">240 comments</a></strong></div>
                <p> Aenean id sapien vulputate massa tristique pretium. Vestibulum vel metus eget felis auctor aliquam. Ut enim metus, tempus id dignissim vitae, tempor at lectus. Fusce tincidunt vestibulum fringilla. Etiam lobortis nulla id augue placerat blandit. Cras quis quam sapien. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                <a href="blog_post.html" class="more float_r">More</a>
                <div class="cleaner"></div>
            </div>

            <div class="cleaner h40"></div>
             	<div class="pagging">
                    <ul>
                        <li><a href="#">Previous</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            <div class="cleaner"></div>
        </div>

        @include('techno.sidebar')
        <div class="cleaner"></div>
    </div> <!-- end of main -->
</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
@include('techno.footer')
</div> <!-- end of footer wrapper -->
</body>
</html>
