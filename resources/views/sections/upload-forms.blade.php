<div id="section4" class="section" name="section4">
    <div class="text-block-center">
        <div class="form form1">
            <form action="/upload-memories" method="POST" enctype="multipart/form-data">
                <h3>Upload a date</h3>
                {!! $errors->first('memory_image', '<span class="error-msg">:message</span>') !!}
                <input type="file" name="memory_image" id="memory_image" class="input-file" required>
                <label for="memory_image">Choose a file</label>
                <p>Comment: </p>
                <textarea name="memory_comment" rows="3" class="textfield" required></textarea><br>
                {!! $errors->first('memory_comment', '<span class="error-msg">:message</span>') !!}
                <input type="submit" value="Submit" class="button">
            </form>
        </div>
        <div class="form form2">
            <form action="/upload-receipt" method="POST" enctype="multipart/form-data">
                <h3>Upload a receipt</h3>
                {!! $errors->first('receipt_image', '<span class="error-msg">:message</span>') !!}
                <input type="file" name="receipt_image" id="receipt_image" class="input-file" required>
                <label for="receipt_image">Choose a file</label>
                <p>Comment: </p>
                <textarea name="receipt_comment" rows="3" class="textfield" required></textarea><br>
                {!! $errors->first('receipt_comment', '<span class="error-msg">:message</span>') !!}
                <input type="submit" value="Submit" class="button">
            </form>
        </div>
    </div>
</div>