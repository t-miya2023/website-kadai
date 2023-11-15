<div class="side-ber">
    <div class="side-ber__box">
        <h2 class="side-ber__heading">カテゴリ</h2>
        <?php  
            $args = array(
                'hide_empty' => 0,
                'title_li' =>'',
                'order' => 'DESC'
            );
            wp_list_categories($args)

        ?>        
    </div>
</div>