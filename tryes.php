    <ul>
        <?php foreach($hotels as $hotel) { 
            foreach($hotel as $key => $element){ ?>
          <li>
              <?php echo "$key-$element".'';?>
              -
             
          </li>
        <?php }?>
    </ul>


    <ul>
        <?php foreach($hotels as $hotel) { ?>
          <li>
              <?php echo $hotel['name'].'';?>
              -
              <?php echo $hotel['description'].'';?>
              -
                <?php if($hotel['parking'] === true){
                   echo "has parking";
                   } else {
                      echo "no parking";
                   };?>
              -
              <?php echo $hotel['vote'].'';?>
              -
              <?php echo $hotel['distance_to_center'].'';?>
          </li>
        <?php }?>
      </ul>