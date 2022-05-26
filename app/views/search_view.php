    <div class="card_container">
        <div class="title">
            <h2 class="text_title" style="background: white; z-index: 3">Пошук</h2>
        </div>

        <pre>
        <?php
        print_r($data);
        ?>
        </pre>

        <div class="list_content">

            <?php
            if (!empty($data)) {
                foreach ($data as $search) {
                    if (count($search->additional) > 1) { ?>
                        <div class="p big" style="margin-bottom: 30px">
                            <div class="card_items">
                                <div class="card_photo">
                                    <img src="<?= IMG_PATH . $search->image ?>" alt="card_bg">
                                </div>
                                <div class="card_body">
                                    <div class="body_top" style="min-height: 28px">
                                        <!-- <span><?= $search->additional[1] ?></span> -->
                                    </div>
                                    <div class="body_bottom">
                                        <p class="number"><?= $search->name ?></p>
                                        <div class="red_line"></div>
                                        <p class="clothes">
                                            Собівартість одної речі <br>
                                        </p>
                                        <p class="price"><?= $search->price ?> $<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
                                                <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z" />
                                            </svg>
                                        </p>
                                        <a href="<?= SITE_URL . $search->link ?>">
                                            Вибрати
                                            <svg width="53" height="11" viewBox="0 0 53 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 5.5H51.5M51.5 5.5L46.5 0.5M51.5 5.5L46.5 10.5" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
            <?php }
                }
            } ?>
            <div class="margin-bottom-30"></div>

            <div class="text-left">
                <?php
                $this->load->library('paginator');
                echo ($this->paginator->get());
                ?>
            </div>



        </div>

    </div><!-- #content .site-content -->

    <?php
    /*
  <!-- <link rel="stylesheet" href="<?=SITE_URL?>style/css/unify/page_search_inner.css"> -->

<!-- 
    PAGE HEADER 
    
    CLASSES:
        .page-header-xs = 20px margins
        .page-header-md = 50px margins
        .page-header-lg = 80px margins
        .page-header-xlg= 130px margins
        .dark           = dark page header

        .shadow-before-1    = shadow 1 header top
        .shadow-after-1     = shadow 1 header bottom
        .shadow-before-2    = shadow 2 header top
        .shadow-after-2     = shadow 2 header bottom
        .shadow-before-3    = shadow 3 header top
        .shadow-after-3     = shadow 3 header bottom
-->
<section class="page-header dark page-header-xs">
    <div class="container">

        <h1><?=$_SESSION['alias']->name?></h1>

    </div>
</section>


<pre>
<?php
	print_r($_SESSION['alias']);
?>
</pre>
<!-- /PAGE HEADER -->

<!--=== Search Block Version 2 ===-->
<div class="search-block-v2">
    <div class="container" style="height: 100vh;">
        <div class="col-md-6 col-md-offset-3">
            <form action="<?=SITE_URL?>search">
                <h2><?=$this->text('Повторити пошук')?></h2>
                <?php if(isset($_SESSION['notify'])) require_once 'admin/notify_view.php'; ?>
                <div class="input-group sidebar-search">
                    <input type="text" name="by" value="<?=$this->data->re_get('by')?>" class="form-control" placeholder="<?=$this->text('Шукати', 0)?>" required>
                    <span class="input-group-btn">
                        <button class="btn btn-inverse" type="submit"><i class="fa fa-search"></i></button>
                    </span>
                </div>
                <div class="input-group">
                    
                </div>
            </form>
        </div>
    </div>    
</div><!--/container-->     
<!--=== End Search Block Version 2 ===-->

<!--=== Search Results ===-->
<div class="container s-results margin-bottom-50">
    <span class="results-number"><?=$this->text('About').' '.$_SESSION['option']->paginator_total.' '.$this->text('results')?></span>

    <?php 
    if(!empty($data)) {
        foreach ($data as $search) {
    ?>
        <div class="inner-results">
            <h3><a href="<?=SITE_URL.$search->link?>"><?=$search->name?></a></h3>
            <ul class="list-inline up-ul">
                <li><?=SITE_URL.$search->link?></li>
                <?php 
                if(is_array($search->additional)) {
                    foreach ($search->additional as $link => $name) {
                        echo("<li><a href=\"".SITE_URL.$link."\">{$name}</a></li>");
                    }
                }
                ?>
            </ul>
            <div class="overflow-h">
                <?php if($search->image) { ?>
                    <img src="<?=IMG_PATH.$search->image?>" alt="<?=$search->name?>" title="<?=$search->name?>">
                <?php } ?>
                <div class="overflow-a">
                    <?php
                    if($search->list != ''){
                        echo("<p>{$search->list}</p>");
                    } else {
                        echo($this->data->getShortText($search->text, 400));
                    }
                    if($search->date > 0) {
                    ?>
                        <ul class="list-inline down-ul">
                            <li><?=date('d.m.Y', $search->date).' By '.$search->author_name?></li>
                            <!-- <li>2,092,675 views</li> -->
                        </ul>
                    <?php } ?>
                </div>       
            </div>    
        </div>

        <hr>
    <?php
        }
    }
    ?>
    
    <div class="margin-bottom-30"></div>

    <div class="text-left">
        <?php
            $this->load->library('paginator');
            echo($this->paginator->get());
        ?>                                              
    </div>
</div><!--/container-->     
<!--=== End Search Results ===-->
*/
    ?>