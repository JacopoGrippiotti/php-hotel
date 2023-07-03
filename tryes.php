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

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <?php foreach($hotels as $hotel){?>
             <th><?php echo $hotel['name'];?></th>
            <?php } ?>       
          </tr>
        </thead>
        <tbody>
          <?php 
          $index = 0
          foreach($hotels as $hotel){?>
            <tr>
              <th scope="row"><?php echo  ?></th>
            </tr>
          <?php }?>
        </tbody>
      </table>





      <ul>
        <?php foreach($hotels as $hotel) { 
            foreach($hotel as $key => $element){ ?>
          <li>
              <?php if($key != "parking"){
                echo "$key-$element".'';
                }else{
                    if($element === true){
                        echo "$key-true";
                    }else{
                        echo "$key-false";
                    }
                }?>
          </li>
        <?php } }?>




        <?php foreach($hotels as $hotel){?>
            <tr>
              <th scope="row"><?php echo array_search($hotel,$hotels);?></th>
              <?php foreach($hotels as $hotel){
                foreach($hotel as $key => $value){?>
              <td><?php echo "$key-$value";?></td>
              <?php }}?>
            </tr>
          <?php }?>