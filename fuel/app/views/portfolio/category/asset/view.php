<h2>Viewing <span class='muted'>#<?php echo $contact->id; ?></span></h2>

<p>
	<strong>Fullname:</strong>
	<?php echo $contact->fullname; ?></p>
<p>
	<strong>Message:</strong>
	<?php echo $contact->message; ?></p>
<p>
	<strong>Email:</strong>
	<?php echo $contact->email; ?></p>
<p>
	<strong>Phone:</strong>
	<?php echo $contact->phone; ?></p>
<p>
	<strong>Available:</strong>
	<?php echo $contact->available; ?></p>

<?php echo Html::anchor('contact/edit/'.$contact->id, 'Edit'); ?> |
<?php echo Html::anchor('contact', 'Back'); ?>

