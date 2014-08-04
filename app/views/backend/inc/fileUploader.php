<?php
?>


<script type="text/javascript" src="/packages/damnUploader/jquery.damnUploader.min.js"></script>
<script src="/packages/damnUploader/interafce.js"></script>
<script src="/packages/damnUploader/uploader-setup.js"></script>


<div class="well well-lg auto-tip" id="drop-box">
	<div class="form-group">
		<input type="file" class="form-control auto-tip" id="file-input" name="my-file" data-title="You can select one or more files by system menu" data-original-title="" title="" multiple="">
	</div>
	<div class="checkbox">
		<label> <input type="checkbox" id="previews-checker" checked="checked"> Generate previews </label> <br> <label>
			<input type="checkbox" id="autostart-checker"> Autostart </label>
	</div>
	<button id="send-btn" type="button" class="btn btn-primary btn-std pull-right">Send</button>
	<button id="clear-btn" type="button" class="btn btn-danger btn-std pull-right">Clear</button>
</div>


<div class="row">
	<h3>Upload queue</h3>
	<table class="table">
		<thead>
		<tr>
			<th>Preview</th>
			<th>Original filename</th>
			<th>Size</th>
			<th>Status</th>
			<th></th>
		</tr>
		</thead>
		<tbody id="upload-rows"></tbody>
	</table>
</div>





