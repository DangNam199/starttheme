
<?php
@include "header.php"
?>
<div class="gnws-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="gnws-detail-description card shadow-sm   py-4 mb-4">
                    <div class="gnws-detail-description-content mb-3 py-2">
                        <div class="row align-items-center">
                                  <div class="col-xl-5  col-12 ps-3 mb-md-0 mb-2">
                                  <div class="gnws-detail-description-content-intro">
                                      <img src="assets/images/1ff00a807e550de9ea0167673542030a.png" alt="">
                                      <a class="black-color gnws-hover-primary mx-2" href="#" title="">
                                          Thanh Nga
                                      </a>
                                      <span class="">09:08 AM</span>
                                      <span>-</span>
                                      <span>14/10/2020 </span>
                                  </div>
                              </div>
                                  <div class="col-xl-4  col-6  ps-3">
                                 <div class="gnws-detail-description-content-rating">
                                      <span>
                                      Đánh giá bài viết:
                                      </span>
                                 </div>
                              </div>
                                  <div class="col-xl-3 col-6 text-end pe-3">
                                       <div class="gnws-detail-description-content-share">
                                            <span class="d-none d-md-inline-block">
                                            Chia sẻ:
                                            </span>
                                           <a class="gnws-bg-primary" href="#" title="">
                                               <?php echo svg('facebook-f-brands','15','14') ?>
                                           </a>
                                           <a class="bg-secondary" href="#" title="">
                                               <?php echo svg('twitter-brands','15','14') ?>
                                           </a>
                                           <a class="bg-danger" href="#" title="">
                                               <?php echo svg('pinterest-brands','15','14') ?>
                                           </a>
                                       </div>
                                  </div>

                          </div>

                    </div>
                    <div class="text-center p-4">
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
