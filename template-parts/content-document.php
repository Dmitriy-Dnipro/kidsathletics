<?php 
    /*Template Name: Документы*/
    get_header();
?>

<style>
    .document_page__banner {
        background-image: url("<?php echo get_template_directory_uri();?>/images/page_document/banner_document-page.jpg");
    }
</style>

<section class="page_banner document_page__banner">
    <div class="container">
        <h2>
            <?php the_title();?>
        </h2>
    </div>
    <div class="home_banner__line">
        <div class="banner_line red"></div>
        <div class="banner_line blue"></div>
        <div class="banner_line green"></div>
        <div class="banner_line yellow"></div>
    </div>
</section>

<section class="document_page">
    <div class="container">
        <div class="event_breadcrumbs">
            <?php the_breadcrumb(); ?>
        </div>
        <h3 class="title document_page__title">Документи</h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>

        <div class="document_box">
            <?php 
                $document = get_field("document", $post_id);
                foreach($document as $doc){?>

            <div class="document_item">
                <a href="<?php echo $doc['document_file']['url'];?>" target="_blank"><p><?php echo $doc['document_name'];?></p></a>
                <div class="item_document">
                    <div class="item_icon">
                        <a href="<?php echo $doc['document_file']['url'];?>"
                            download><img src="<?php echo get_template_directory_uri();?>/images/page_document/download.png"
                                alt="pdf"></a>
                    </div>

                </div>
            </div>
            <?}?>

        </div>
    </div>

</section>


<?php 
    get_footer();
?>