<?php
    /*Template Name:  Календарь мероприятия*/

    get_header();
?>

<style>

    .active-link.filter_item {
        background: #168CF8;
        border: 2px solid #168CF8;
        color: #fff;
    }

    .filter_item {
        cursor: pointer;
    }

    .active_li{
        color: #168CF8;
    }
</style>

<div class="container">
    <div class="event_breadcrumbs">
        <?php the_breadcrumb(); ?>
    </div>
</div>

<section class="calendar_events">
    <div class="container">
        <h3 class="title">Оберіть дату заходу</h3>
        <div class="line_box">
            <div class="line red"></div>
            <div class="line blue"></div>
            <div class="line green"></div>
            <div class="line yellow"></div>
        </div>
        <div class="date">
            <div class="column_date">
                <h5 class="day_test"></h5>
                <h4 class="year_event"></h4>
                <p>в цей день заплановано проведення <span></span></p>
            </div>
        </div>
    </div>
</section>

<section class="coming_events coming_calendar">
    <div class="container">
        <div class="calendar_event-filter">
            <h3 class="title">Територіальна класифікація шкіл</h3>
              <div class="line_box">
                <div class="line red"></div>
                <div class="line blue"></div>
                <div class="line green"></div>
                <div class="line yellow"></div>
            </div>
            <div class="calendar_event-filterBox">
             <?php 
                 $filterCategory = array( 'post_type' => 'events', 'numberposts' => -1, 'order' => 'ASC');
                 $filter = get_posts($filterCategory);

                 $areaArr = array();
                 $cityAreaArr = array();
                 $regionAreaArr = array();

                 foreach( $filter as $f){
                     $regionCat = get_field("events_filter_region", $f->ID);
                     $regionAreaCat = get_field("events_filter_area", $f->ID);
                     $cityCat = get_field("events_filter_city", $f->ID);
                     $areaCity = get_field("events_filter_area_city", $f->ID);
                     $cityAreaCat = get_field("events_filter_city_area", $f->ID);

                     $cityAreaArr[] = $cityAreaCat;
                     $areaArr[] = $areaCity;
                     $regionAreaArr[] = $regionAreaCat;
                 }
                 $resultCityArea = array_unique($cityAreaArr);
                 $resultAreaCity = array_unique($areaArr);
                 $resultRegionArea = array_unique($regionAreaArr);
             ?>
                <div class="filter_region filter_item active-link filter-column" data-item="Дн-ська">
                    <p>Дн-ська обл.</p>
                </div>
                <div class="filter_city filter_item filter-column" data-item="м. Днiпро">
                    <p>м.Дніпро</p>
                </div>
                <div class="filter-region_city filter_item">
                    <ul class="filter_menu">
                        <li class="filter_show_submenu">
                            міста обл.
                            <ul class="filter_sub_menu">
                            <?php 
                                foreach( $resultAreaCity as $rAreaCity){
                                   if( $rAreaCity !== '' &&  !empty($rAreaCity)){?>
                                   <li data-item="<?php echo $rAreaCity;?>"><?php echo $rAreaCity;?></li>
                                <?}?>
                            <?}?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="filter-area-region filter_item">
                <ul class="filter_menu">
                        <li class="filter_show_submenu">
                            райони обл.
                            <ul class="filter_sub_menu">
                            <?php 
                                foreach( $resultRegionArea as $rRegionArea){
                                   if( $rRegionArea !== '' &&  !empty($rRegionArea)){?>
                                   <li data-item="<?php echo $rRegionArea;?>"><?php echo $rRegionArea;?></li>
                                <?}?>
                            <?}?>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="filter-area filter_item">
                    <ul class="filter_menu" >
                        <li class="filter_show_submenu">
                            райони м.Дніпро
                            <ul class="filter_sub_menu">
                             <?php 
                                foreach($resultCityArea as $rCityArea){
                                   if($rCityArea !== ''){?>
                                   <li data-item="<?php echo $rCityArea;?>"><?php echo $rCityArea;?></li>
                                <?}?>
                            <?}?>
                                    
                            </ul>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="calendar_event-title title">Найближчі Заходи</h3>
    </div>
    <div class="container">
        <div class="date-content">
            <div class="row date-slider"></div>
        </div>
    
    <div class="filter_content">
        <div class="row filter-result"></div>
    </div>

    </div>

</section>
<!-- Создаем JSON для JS -->
<?php
        $calendarArray = array( 'post_type' => 'events', 'numberposts' => -1, 'order' => 'DESC');
        $cal = get_posts($calendarArray);
        $array = array();
            foreach($cal as $c){
                $eventDate = get_field("events_date", $c->ID);
                $arrDate = explode('/', $eventDate);
                $convertDate = $arrDate[1].'/'.$arrDate[0].'/'.$arrDate[2];
                $cartTitle = get_field("preview_evets_title", $c->ID);
                $cartSchool = get_field("events_school", $c->ID);
                $stringSchool = mb_substr($cartSchool, 0, 70);
                $len = mb_strlen($stringSchool);

                $cartTime = get_field("events_time", $c->ID);
                $cartLocation = get_field("events_location", $c->ID);
                $cartHref = get_the_permalink($c->ID);

                $cartImage = get_field("events_image", $c->ID);
                $filter_1 = get_field("events_filter_region", $c->ID);
                $filter_2 = get_field("events_filter_city", $c->ID);
                $filter_3 = get_field("events_filter_area", $c->ID);
                $filter_4 = get_field("events_filter_city_area", $c->ID);
                $filter_5 = get_field("events_filter_area_city", $c->ID);

                if($len >= 70 ){
                  $subString = $stringSchool.'...';
                }else{
                  $subString =  $stringSchool;
                }
                

                $array[] = [
                    "date"      => $convertDate,
                    "frontDate" => $eventDate,
                    "title"     => $cartTitle,
                    "school"    => $subString,
                    "time"      => $cartTime,
                    'location'  => $cartLocation,
                    'link'      => $cartHref,
                    'image'     => $cartImage['url'],
                    'filter-1'  => $filter_1,
                    'filter-2'  => $filter_2,
                    'filter-3'  => $filter_3,
                    'filter-4'  => $filter_4,
                    'filter-5'  => $filter_5
        
                ];
                $arrJson = json_encode($array);
                //set the filename
                $filename = 'api/feed-events.json';

                //open or create the file
                $handle = fopen($filename,'w+');

                //write the data into the file
                fwrite($handle,$arrJson);

                //close the file
                fclose($handle);
     } 
    ?>


<?php 
    get_footer();
?>