
<?php
@include "header.php"
?>
<div class="gnws-detail">
    <div class="gnws-detail-bredcrumb mb-3">
       <div class="container">
           <div class="rank-math-breadcrumb py-2">
               <p>
        <span>
            <span><a href="#" title="">Trang chủ</a>
                » <span class="breadcrumb_last" aria-current="page">
                    Tin tức
                </span>
            </span>
        </span>
               </p>
           </div>
       </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-8">
                <div class="gnws-detail-description card shadow-sm   py-2 mb-4">
                    <h2 class="gnws-detail-description-title px-4  py-2 ">
                        <a class="black-color gnws-hover-primary" href="#" title="">
                            Deserunt reprehenderit veniam vero voluptas aspernatur occaecati
                        </a>
                    </h2>
                    <div class="gnws-detail-description-content mb-3 py-2">

                        <div class="px-4">
                            <?php
                            include 'components/update-time.php';
                            ?>
                        </div>
                    </div>
                    <div class="text-center px-4 py-lg-4 py-2">
                        <img src="assets/images/photo-1611952327309-a739d089f5ad-1024x683.jpeg" alt="">
                    </div>
                    <div class="gnws-detail-description-post pt-3">
                        <div class="d-flex align-items-center justify-content-between px-4 ">
                                <div class="gnws-detail-description-post-content d-flex align-items-center">
                                   <div class="me-1">
                                       <?php echo svg('arrow-left-solid','','10') ?>
                                   </div>
                                   <div>
                                       <a class="black-color gnws-hover-primary" href="#" title="">
                                           Tenetur magnam laudantium atque
                                       </a>
                                   </div>
                                </div>
                                <div class="gnws-detail-description-post-content d-flex align-items-center  flex-row-reverse">
                                   <div >
                                       <?php echo svg('arrow-right-solid','','10') ?>
                                   </div >
                                    <div class="me-1 text-md-start text-end">
                                        <a class="black-color gnws-hover-primary" href="#" title="">
                                            Ut sapiente recusandae sit
                                        </a>
                                    </div>

                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="gnws-detail-posts">
                    <h3 class="gnws-detail-posts-title mb-3 ">
                       Bài viết liên quan
                    </h3>
                    <?php
                    for($i = 0; $i <= 5; $i++){
                        include 'components/product.php';
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
@include "footer.php"
?>
