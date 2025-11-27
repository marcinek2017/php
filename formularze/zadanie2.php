<h2>Wybranie wartości liczbowej</h2>


<p>Ustaw wartość liczbową:</p>


<?php $losowa = rand(1, 100); ?>


<p>1 <input type="range" min="1" max="100" value="<?php echo $losowa; ?>"> 100</p>


<p><?php echo $losowa; ?></p>

