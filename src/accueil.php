	<div class="form">
		<form id="uploadForm" method="post" enctype="multipart/form-data">
			<input type="hidden" name="action" value="create">
			<div class="mb-3">
				<div class="custom-file">
					<label class="custom-file-label" for="fichier" id="fileNameLabel">Choisir des fichiers</label>
					<input type="file" class="custom-file-input" id="fichier" name="files[]" multiple required onchange='updateFileName()'>
				</div>
			</div>
			<div class="mb-3">
				<label for="destEmail" class="form-label">Email destinataire: <span class="email-count">0</span></label>
				<div class="email-list"></div>

				<button class="email-add">🞦</button>
				<!-- use attribute `multiple` ? -->
				<input type="email" placeholder="example@example.com" value='' class="form-control custom-input" id="destEmail" name="destEmail">
			</div>
			<div class="mb-3">
				<label for="sourceEmail" class="form-label">Votre Email</label>
				<input type="email" value='' class="form-control custom-input" id="sourceEmail" name="sourceEmail" required>
			</div>
			<div>
				<button type="submit" class="btn btn-primary" id="send" name="submit" value="send" disabled>Send</button>
			</div>

		</form>
	</div>