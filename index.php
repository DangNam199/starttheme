<?php
@include "header.php"
?>
<div class="gnws-main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php
                for($i = 0; $i <= 5; $i++){
                    include 'components/product.php';
                }
                ?>
                <div class="gnws-main-description card shadow-sm px-xl-5 py-xl-4 px-2 py-4">

                    <p>
                        Free Fire – Là tựa game bắn súng sinh tồn số 1 Việt Nam hiện nay với cộng đồng game thủ đông đảo cùng nhiều sự kiện diễn ra liên tục vô cùng hấp dẫn.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>
<?php
@include "footer.php"
?>
