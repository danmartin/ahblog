<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package required+ Foundation
 * @since required+ Foundation 0.1.0
 */
?>
        <!-- START: sidebar.php -->
        <div id="secondary" class="widget-area" role="complementary">

            <?php
$curYir = date("Y");//current year
$signclosed = "<div class=\"storehouse\"><img src=\"" . get_template_directory_uri() . "/images/closed.png\" alt=\"Closed\"></div>";
$signopen = "<div class=\"storehouse\"><img src=\"" . get_template_directory_uri() . "/images/open.png\" alt=\"Closed\"></div>";


$Est =  date('Y-m-d', easter_date($curYir)); // easter 
$MDay = date('Y-m-d', strtotime("may $curYir first monday")); // memorial day
//("may $curYir last monday") will give you the last monday of may 1967
//much better to determine it by a loop
      $eMDay = explode("-",$MDay);
      $year = $eMDay[0];
      $month = $eMDay[1];
      $day = $eMDay[2];

      while($day <= 31){
          $day = $day + 7;
      }
      if($day > 31)
      $day = $day - 7;

      $MDay = $year.'-'.$month.'-'.$day;
$LD = date('Y-m-d', strtotime("september $curYir first monday"));  //labor day
$TH = date('Y-m-d', strtotime("november $curYir first thursday")); // thanks giving 
//("november $curYir last thursday") will give you the last thursday of november 1967
//much better to determine it by a loop
      $eTH = explode("-",$TH);
      $year = $eTH[0];
      $month = $eTH[1];
      $day = $eTH[2];

      while($day <= 30){
          $day = $day + 7;
      }
      if($day > 30)
      //watch out for the days in the month November only have 30
      $day = $day - 7;

      $TH = $year.'-'.$month.'-'.$day;

      $day = date('Y-m-d');
    $holidays = array(
        '$Est',
        '$MDay',
        '$LD',
        '$TH',
        '$curYir-12-25',
        '$curYir-01-01',
        '$curYir-07-04',
    );


if (in_array($day,$holidays)){
echo "$storeclosed";
} // its a holiday!!
    else{
if ($output_status) {
echo "$storeopen";
} else {
echo "$storeclosed";
}
    } 
?>
                  
			<?php if ( ! dynamic_sidebar( 'sidebar-main' ) ) : ?>

				<?php if ( is_user_logged_in() ) : ?>
                <aside class="widget panel radius">
                    <h3 class="widget-title"><?php _e( 'There are no widgets yet!', 'requiredfoundation' ); ?></h3>
                    <p><?php _e('Please add some real widgets, because otherwise your visitors get nothing but whitespace here.', 'requiredfoundation' ); ?></p>
                    <p><a class="button small radius" href="<?php echo admin_url('widgets.php'); ?>"><?php _e( 'Add widgets', 'requiredfoundation' ); ?></a></p>
                </aside>
                <?php endif; ?>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
        <!-- END: sidebar.php -->