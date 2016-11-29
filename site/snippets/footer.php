</main>
<?php echo js('https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') ?>

<?php echo js('assets/js/libs/highlight.pack.js') ?>
<?php echo js('assets/js/libs/accordion-plain.js') ?>
<?php echo js('assets/js/kdoc.js') ?>
<?php echo js('assets/js/iframeResizer.min.js') ?>
<script type="text/javascript">

			iFrameResize({
				log                     : true,                  // Enable console logging
				enablePublicMethods     : true,                  // Enable methods within iframe hosted page
				resizedCallback         : function(messageData){ // Callback fn when resize is received
					$('p#callback').html(
						'<b>Frame ID:</b> '    + messageData.iframe.id +
						' <b>Height:</b> '     + messageData.height +
						' <b>Width:</b> '      + messageData.width +
						' <b>Event type:</b> ' + messageData.type
					);
				},
				messageCallback         : function(messageData){ // Callback fn when message is received
					$('p#callback').html(
						'<b>Frame ID:</b> '    + messageData.iframe.id +
						' <b>Message:</b> '    + messageData.message
					);
					alert(messageData.message);
				},
				closedCallback         : function(id){ // Callback fn when iFrame is closed
					$('p#callback').html(
						'<b>IFrame (</b>'    + id +
						'<b>) removed from page.</b>'
					);
				}
			});

		</script>
</body>
</html>
