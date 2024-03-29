<?php

function the_breadcrumb(){
    global $post;
    if(!is_home()){ 
       echo '<a href="'.site_url().'">Головна</a>';
        if(is_single()){ // записи
        echo " / ";
        if(get_post_type() == 'gallery'){
            $term = get_term( 9, 'gallery-category' );
            echo '<a href="'.home_url().'/gallery-category/foto/">'.$term->name.'</a>';
        }else if(get_post_type() == 'events'){
            echo '<a href="'.home_url().'/calendar-events/">Календар заходів</a>';
        }else if(get_post_type() == 'competitions'){
            echo '<a href="'.home_url().'/konkursi/">Конкурси</a>';
        }
        the_category(', ');
        echo " / ";
        the_title();
        }elseif (is_page()) { // страницы
            if ($post->post_parent ) {
                $parent_id  = $post->post_parent;
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                    $parent_id  = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                foreach ($breadcrumbs as $crumb) echo $crumb . ' &amp;raquo; ';
            }
            echo ' / ';
            echo the_title();
        }elseif (is_category()) { // категории
            global $wp_query;
            $obj_cat = $wp_query->get_queried_object();
            $current_cat = $obj_cat->term_id;
            $current_cat = get_category($current_cat);
            $parent_cat = get_category($current_cat->parent);
            if ($current_cat->parent != 0) 
                echo(get_category_parents($parent_cat, TRUE, ' &amp;raquo; '));
            echo ' / ';
            single_cat_title();
        }elseif(is_tax()){
            echo ' / ';
            single_cat_title();
        }elseif (is_search()) { // страницы поиска
            echo 'Результаты поиска для "' . get_search_query() . '"';
        }elseif (is_tag()) { // теги (метки)
            echo single_tag_title('', false);
        }
        elseif (is_day()) { // архивы (по дням)
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> &amp;raquo; ';
            echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> &amp;raquo; ';
            echo get_the_time('d');
        }
        elseif (is_month()) { // архивы (по месяцам)
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> &amp;raquo; ';
            echo get_the_time('F');
        }
        elseif (is_year()) { // архивы (по годам)
            echo get_the_time('Y');
        }
        elseif (is_author()) { // авторы
            global $author;
            $userdata = get_userdata($author);
            echo 'Опубликовал(а) ' . $userdata->display_name;
        } elseif (is_404()) { // если страницы не существует
            echo 'Ошибка 404';
        }
     
        if (get_query_var('paged')) // номер текущей страницы
            // echo ' (' . get_query_var('paged').'-я страница)';
            echo '';
     
    } else { // главная
       $pageNum=(get_query_var('paged')) ? get_query_var('paged') : 1;
       if($pageNum>1)
          echo '<a href="'.site_url().'">Главная</a> &amp;raquo; '.$pageNum.'-я страница';
       else
          echo 'Вы находитесь на главной странице';
    }
    }