<?php //echo '<pre>'. print_r($rentalPromos,true).'</pre>'; ?>
<?php if (!empty($rentalPromos)) { ?>
	<?php foreach($rentalPromos as $rentalPromo) { ?>
		<div>Facility: <?php echo $rentalPromo['Facility']['name']; ?></div>
		<div>With Aircon: <?php echo !empty($rentalPromo['RentalPromo']['aircon']) ? 'Yes' : 'No'; ?></div>
		<div>Cost per <?php echo $rentalPromo['RentalPromo']['aircon_count']; ?> Hour/s: <?php echo $rentalPromo['RentalPromo']['aircon_cost']; ?></div>
		<div>Cost per succeeding <?php echo $rentalPromo['RentalPromo']['aircon_succeeding_count']; ?> Hour/s: <?php echo $rentalPromo['RentalPromo']['aircon_succeeding_cost']; ?></div>
		<strong><hr></strong>
	<?php } ?>
<?php } ?>