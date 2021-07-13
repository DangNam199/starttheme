<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> garena </title>
    <!-- Plugin -->
    <link rel="stylesheet" href="assets/plugin/bootstrap/bootstrap.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Flickity -->
    <link rel="stylesheet" href="assets/plugin/flickity/flickity.css">
    <!-- Font -->

</head>
<body>
<?php
/**
 * Function help call file SVG from assets/svg
 */
function svg($name, $width = false, $height = false)
{
    $dir  = 'assets/svg/';
    $path = $dir . $name . '.svg';
    if ($name && file_exists($path)) {
        $svg = file_get_contents($path);
        if ($width) {
            $size = '<svg';
            $new_size = '<svg width="' . $width . 'px"';
            $svg = str_replace($size, $new_size, $svg);
        }
        if ($height) {
            $size = '<svg';
            $new_size = '<svg height="' . $height . 'px"';
            $svg = str_replace($size, $new_size, $svg);
        }
        return $svg;
    }
    return '';
}
?>
<header>
    <div class="gnws-header gnws-bg-primary mb-3">
            <div class="container">
                <div class="gnws-header-description row  align-items-center justify-content-between position-relative">
                        <div class="col-auto me-auto gnws-header-description-logo ">
                        <?php echo svg('logo-garenamobile-com-white-2021','185','60') ?>
                    </div>
                         <div class="gnws-header-description-search  col-lg-auto col-md-12 ">
                           <form class="d-flex align-items-center" action="" method="post">
                               <input type="search" class="form-control" placeholder="Tìm kiếm …" value="" name="s" title="Tìm kiếm cho:">
                               <button class=" btn  gnws-bg-primary_darker gnws-bg-hover-secondary">
                                <span>
                                     <?php echo svg('search','','15') ?>
                                </span>
                               </button>
                           </form>
                       </div>
                        <nav class="menu-mobile col-auto">
                            <div class="menu-mobile-close d-block d-lg-none ">
                                <?php echo svg('times-solid','24','24') ?>
                            </div>
                             <ul>
                                 <li class="menu-item-has-children">
                                     <a class="gnws-bg-hover-primary" href="#" title="">Garena Free Fire</a>
                                     <ul>
                                         <li><a  href="#" title="">Soi kèo Ngoại Hạng Anh</a></li>
                                         <li><a  href="#" title="">Soi kèo Ngoại Hạng Anh</a></li>
                                     </ul>
                                 </li>
                                 <li><a class="gnws-bg-hover-primary" href="#" title="">Giới thiệu</a></li>
                                 <li><a class="gnws-bg-hover-primary" href="#" title="">Liên hệ</a></li>
                             </ul>
                        </nav>
                        <div class=" col-auto d-block d-lg-none align-items-center">
                            <div class="header__search d-inline-block me-2">
                                <?php echo svg('search','','18') ?>
                            </div>
                            <div class="header__close me-2">
                                <?php echo svg('times-solid','','18') ?>
                            </div>
                            <div class="header__bars d-inline-block">
                             <?php echo svg('bars-solid','','18') ?>
                            </div>
                        </div>
                        <div class="overlay"></div>
                </div>

            </div>

    </div>

</header>


</body>

</html>
