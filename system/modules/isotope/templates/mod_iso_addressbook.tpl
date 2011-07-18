
<!-- indexer::stop -->
<div class="<?php echo $this->class; ?> block"<?php echo $this->cssID; ?><?php if ($this->style): ?> style="<?php echo $this->style; ?>"<?php endif; ?>>
<?php if ($this->headline): ?>

<<?php echo $this->hl; ?>><?php echo $this->headline; ?></<?php echo $this->hl; ?>>
<?php endif; ?>
<?php if(strlen($this->message)): ?>

<p class="<?php echo $this->mtype; ?>"><?php echo $this->message; ?></p>
<?php endif; ?>

<p><a class="add" href="<?php echo $this->addNewAddress; ?>" title="<?php echo $this->addNewAddressLabel; ?>"><?php echo $this->addNewAddressLabel; ?></a></p>

<?php if( count($this->addresses) ): ?>
<?php foreach( $this->addresses as $address ):?>
<div class="<?php echo $address['class']; ?>">
<div class="buttons">
	<a class="edit" href="<?php echo $address['edit_url']; ?>" title="<?php echo $this->editAddressLabel; ?>"><?php echo $this->editAddressLabel; ?></a>
	<a class="delete" href="<?php echo $address['delete_url']; ?>" title="<?php echo $this->deleteAddressLabel; ?>" onclick="return confirm('<?php echo $this->deleteAddressConfirm; ?>')"><?php echo $this->deleteAddressLabel; ?></a>
</div>
<?php echo $address['text']; ?>
</div>
<?php endforeach; ?>
<?php endif; ?>

</div>
<!-- indexer::continue -->