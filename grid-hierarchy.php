
<!-- HEADER -->
<?php require('inc/snippets/_header.php'); ?>


	<!-- gridinator -->
	<div class="gy vh-100 flex-center">
		<div class="grid-box">
			<h2>Hierarchy</h2>
			<h4>grid structure</h4>
		</div>
	</div>
	<!-- END gridinator -->

	<!-- gridinator -->
	<div class="gy-title gy vh-50">
		<div class="grid-box">
			<h3>composition #1</h3>
			<h4>960px container</h4>
			<p>header ( main + aside ) footer</p>
		</div>
	</div>
	<!-- END gridinator -->

	<!-- gridinator -->
	<div class="gy gx gcol-12 contain contain-960">
		<div class="gcol span-12">
				
			<div class="border-bot gy vh-10 gx gcol-12">
				<div class="gcol span-12">
					
					<div class="block">.block
						<div class="block-item">.block-item
						</div>
					</div>

				</div>
			</div>

			<div class="border-bot gy vh-20 gx gcol-12">
				<div class="gcol span-8">

					<div class="block">.block
						<div class="block-item">.block-item
						</div>
					</div>

				</div>
				<div class="gcol span-4">
					
					<div class="block">.block
						<div class="block-item">.block-item
						</div>
					</div>

				</div>
			</div>

			<div class="gy vh-10 gx gcol-12">
				<div class="gcol span-12">

					<div class="block">.block
						<div class="block-item">.block-item
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- END gridinator -->

	<!-- gridinator -->
	<div class="gy-title gy vh-50">
		<div class="grid-box">
			<h3>composition #2</h3>
			<h4>1260px container</h4>
			<p>header ( aside + main [ 4 column] ) footer</p>
		</div>
	</div>
	<!-- END gridinator -->

	<!-- gridinator -->
	<div class="gy gx gcol-12 contain contain-1260">
		<div class="gcol span-12">
			
			<div class="border-bot gy vh-10 gx gcol-12">
				<div class="gcol span-12">
					<div class="block">.block<div class="block-item">.block-item</div></div>
				</div>
			</div>

			<div class="border-bot gy vh-20 gx gcol-12">
				<div class="gcol span-2">
					
					<div class="block">.block<div class="block-item">.block-item</div></div>

				</div>
				<div class="gcol span-10">

					<div class="border-bot gy vh-20 gx gcol-12">
						<div class="gcol span-3">
							<div class="block">.block<div class="block-item">.block-item</div></div>
						</div>
						<div class="gcol span-3">
							<div class="block">.block<div class="block-item">.block-item</div></div>
						</div>
						<div class="gcol span-3">
							<div class="block">.block<div class="block-item">.block-item</div></div>
						</div>
						<div class="gcol span-3">
							<div class="block">.block<div class="block-item">.block-item</div></div>
						</div>
					</div>

				</div>
			</div>

			<div class="gy vh-10 gx gcol-12">
				<div class="gcol span-12">
					<div class="block">.block<div class="block-item">.block-item</div></div>
				</div>
			</div>

		</div>
	</div>
	<!-- END gridinator -->


<!-- FOOTER -->
<?php require('inc/snippets/_footer.php'); ?>
