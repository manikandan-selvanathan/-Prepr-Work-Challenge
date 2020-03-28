<div class="footer">    
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; <?php echo date('Y'); ?> </p>
			<?php if ($_SESSION['failedAuth']) { ?>
			<p>
				Login failed: <?=$_SESSION['failedAuth']?>
			</p>
			<?php } ?>
        </div>
    </div> 
</div>

</div> 
</body>
</html>