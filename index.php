<?php
@include "header.php"
?>
<div class="gnws-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="gnws-main-description card shadow-sm px-lg-4 px-3 pt-3 pb-4 mb-3">

                    <p>
                        Free Fire – Là tựa game bắn súng sinh tồn số 1 Việt Nam hiện nay với cộng đồng game thủ đông đảo cùng nhiều sự kiện diễn ra liên tục vô cùng hấp dẫn.
                    </p>
                </div>
                <?php
                for($i = 0; $i <= 5; $i++){
                    include 'components/product.php';
                }
                ?>

            </div>
        </div>

    </div>
</div>
<?php
@include "footer.php"
?>
