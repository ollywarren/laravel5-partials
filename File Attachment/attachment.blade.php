<div class="form-group {{ $errors->has('attachment') ? ' has-error' : '' }}">

    <label class="btn btn-primary btn-file btn-sm">Click to Select
        {!! Form::file('attachment', ['style' => 'display: none;']) !!}
    </label>

    <input type="text" id="file_info" name="file-info" class="form-control" placeholder="Select a File" readonly>

    <input type="submit" name="attach_file" value="Attach" class="btn btn-sm btn-success">

    @if ($errors->has('attachment'))
        <span class="help-block">
        <strong>{{ $errors->first('attachment') }}</strong>
    </span>
    @endif
</div>

