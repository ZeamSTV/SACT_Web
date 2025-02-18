<div id="product-menu-container" class="sidebar medium-3 small-12 large-3" style="padding-left: 30px;">
    <div class="sidebar-inner">
        <ul class="sidebar-wrapper">
            <aside id="product-menu" class="widget widget_product_menu">
                <span class="widget-title"><span>Danh mục sản phẩm</span></span>
                <div class="divider small"></div>
                <div class="menu-product-list">
                    <ul id="product-menu-list" class="menu">
                        <?php if ($cat_main && count($cat_main) > 0) {
                            foreach ($cat_main as $key => $v) {
                                $d->reset();
                                $sql = "SELECT ten_$lang, tenkhongdau_vi FROM #_product WHERE hienthi=1 AND id_cat=" . $v['id'] . " ORDER BY stt ASC, id DESC";
                                $d->query($sql);
                                $cat_main1 = $d->result_array();
                        ?>
                        <li class="menu-item has-submenu">
                            <a href="<?= $v['tenkhongdau_vi'] ?>"><?= $v['ten_vi'] ?></a>
                            <?php if ($cat_main1 && count($cat_main1) > 0) { ?>
                            <ul class="submenu">
                                <?php foreach ($cat_main1 as $key1 => $v1) { ?>
                                <li class="submenu-item"><a href="<?= $v1['tenkhongdau_vi'] ?>"><?= $v1['ten_vi'] ?></a></li>
                                <?php } ?>
                            </ul>
                            <?php } ?>
                        </li>
                        <?php }} ?>
                    </ul>
                </div>
            </aside>
        </ul>
    </div>
</div>
<style>
   /* Sidebar Menu */
.sidebar {
    position: relative;
}
.sidebar-inner{
   width: 300px;
}

.menu .has-submenu {
    position: relative;
}

.menu .has-submenu > .submenu {
    display: none;
    position: absolute;
    left: 0;
    top: 100%;
    background: #fff;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    min-width: 220px;
    padding: 10px 0;
    z-index: 1000;
}

.menu .has-submenu:hover > .submenu {
    display: block;
}

.menu .submenu .submenu-item {
    padding: 8px 15px;
    transition: background 0.3s ease-in-out;
}

.menu .submenu .submenu-item:hover {
    background: #f4f4f4;
}

/* Thêm hiệu ứng mượt mà */
.submenu {
    opacity: 0;
    transform: translateY(-10px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.menu .has-submenu:hover > .submenu {
    opacity: 1;
    transform: translateY(0);
}

</style>
<script>
   document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".menu .has-submenu").forEach(function (item) {
        item.addEventListener("mouseenter", function () {
            let submenu = this.querySelector(".submenu");
            if (submenu) {
                submenu.style.display = "block";
                submenu.style.opacity = "0";
                submenu.style.transform = "translateY(-10px)";
                setTimeout(() => {
                    submenu.style.opacity = "1";
                    submenu.style.transform = "translateY(0)";
                }, 10);
            }
        });

        item.addEventListener("mouseleave", function () {
            let submenu = this.querySelector(".submenu");
            if (submenu) {
                submenu.style.opacity = "0";
                submenu.style.transform = "translateY(-10px)";
                setTimeout(() => {
                    submenu.style.display = "none";
                }, 300);
            }
        });
    });
});

</script>