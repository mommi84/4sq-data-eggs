      <li>
        <div class="category"></div>
        <div class="details">

          <h4><a href="https://foursquare.com/v/<?=$checkin["venue"]["id"]?>" target="_blank"><?=$checkin["venue"]["name"]?></a></h4>
          <div class="gps"><?=$checkin["venue"]["location"]["lat"].', '.$checkin["venue"]["location"]["lng"]?></div>
          <p class="time"><a href="https://foursquare.com/checkin/<?=$checkin["id"]?>" target="_blank"><?=date('Y-m-d H:i:s', $checkin["createdAt"])?></a></p>

          <?php if(isset($checkin["shout"])): ?>
          <div class="shout"><?=$checkin["shout"]?></div>
          <?php endif; ?>

          <?php if($checkin["photos"]["count"] > 0): ?>
          <div class="photos">
            <?php foreach($checkin["photos"]["items"] as $imgurl): ?>
            <div class="photo_outer"><a href="<?=$imgurl?>" target="_blank" class="photo_inner" style="background-image:url('<?=$imgurl?>')"></a></div>
            <?php endforeach; ?>
          </div>
          <?php endif; ?>

        </div>
        <div style="clear: both;"></div>
      </li>
