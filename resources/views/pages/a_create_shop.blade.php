@extends('layouts.a_main')

@section('a_conten')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Tambah Produk Baru</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-4 control-label">Judul</label>

                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('photos') ? ' has-error' : '' }}">
                                <label for="photos" class="col-md-4 control-label">Foto</label>
                                <div class="col-md-6">
                                  <input id="photos" type="file" class="form-control" name="photos[]" multiple>
                                  @if ($errors->has('photos'))
                                    <span class="help-block">
                                      <strong>{{ $errors->first('photos') }}</strong>
                                    </span>
                                  @endif
                                </div>
                              </div>


                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Deskripsi</label>

                                <div class="col-md-6">
                                    <textarea id="description" class="form-control" name="description" required>{{ old('description') }}</textarea>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                                <label for="price" class="col-md-4 control-label">Harga</label>

                                <div class="col-md-6">
                                    <input id="price" type="number" class="form-control" name="price" value="{{ old('price') }}" required>

                                    @if ($errors->has('price'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('price') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('size') ? ' has-error' : '' }}">
                                <label for="size" class="col-md-4 control-label">Ukuran</label>

                                <div class="col-md-6">
                                    <input id="size" type="text" class="form-control" name="size" value="{{ old('size') }}">

                                    @if ($errors->has('size'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('size') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>



                        <div class="form-group{{ $errors->has('thickness') ? ' has-error' : '' }}">
                            <label for="thickness" class="col-md-4 control-label">Ketebalan</label>

                            <div class="col-md-6">
                                <input id="thickness" type="text" class="form-control" name="thickness" value="{{ old('thickness') }}">

                                @if ($errors->has('thickness'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('thickness') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Kategori</label>

                            <div class="col-md-6">
                                <select id="category" class="form-control" name="category" required>
                                    <option value="">-- Pilih Kategori --</option>
                                    <option value="Plywood" {{ old('category') == 'Plywood' ? ' selected' : '' }}>Plywood</option>
                                    <option value="Platform" {{ old('category') == 'Platform' ? ' selected' : '' }}>Platform</option>
                                    <option value="Veneer" {{ old('category') == 'Veneer' ? ' selected' : '' }}>Veneer</option>
                                    <option value="Finger Joint" {{ old('category') == 'Finger Joint' ? ' selected' : '' }}>Finger Joint</option>
                                    <option value="Layer" {{ old('category') == 'Layer' ? ' selected' : '' }}>Layer</option>
                                    <option value="Doorblank" {{ old('category') == 'Doorblank' ? ' selected' : '' }}>Doorblank</option>
                                    <option value="Blockboard" {{ old('category') == 'Blockboard' ? ' selected' : '' }}>Blockboard</option>
                                </select>



                                @if ($errors->has('category'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tags') ? ' has-error' : '' }}">
                            <label for="tags" class="col-md-4 control-label">Tags</label>

                            <div class="col-md-6">
                                <select id="tags" class="form-control" name="tags[]" multiple>
                                    <option value="Tag 1">Tag 1</option>
                                    <option value="Tag 2">Tag 2</option>
                                    <option value="Tag 3">Tag 3</option>
                                    <option value="Tag 4">Tag 4</option>
                                </select>

                                @if ($errors->has('tags'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tags') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="core">Core:</label>
                            <input type="text" id="core" name="specifications[Short Core &amp; Long Core]" class="form-control">
                            @if ($errors->has('specifications.Short Core & Long Core'))
                              <span class="help-block">
                                <strong>{{ $errors->first('specifications.Short Core & Long Core') }}</strong>
                              </span>
                            @endif
                          </div>
                          <div class="form-group">
                            <label for="face_back">Face &amp; Back:</label>
                            <input type="text" id="face_back" name="specifications[Face &amp; Back]" class="form-control">
                            @if ($errors->has('specifications.Face & Back'))
                              <span class="help-block">
                                <strong>{{ $errors->first('specifications.Face & Back') }}</strong>
                              </span>
                            @endif
                          </div>
                          <div class="form-group">
                            <label for="glue">Glue:</label>
                            <input type="text" id="glue" name="specifications[Glue]" class="form-control">
                            @if ($errors->has('specifications.Glue'))
                              <span class="help-block">
                                <strong>{{ $errors->first('specifications.Glue') }}</strong>
                              </span>
                            @endif
                          </div>
                          <div class="form-group">
                            <label for="grade">Grade:</label>
                            <input type="text" id="grade" name="specifications[Grade]" class="form-control">
                            @if ($errors->has('specifications.Grade'))
                              <span class="help-block">
                                <strong>{{ $errors->first('specifications.Grade') }}</strong>
                              </span>
                            @endif
                          </div>
                          <div class="form-group">
                            <label for="certificate">Certificate:</label>
                            <input type="text" id="certificate" name="specifications[Certificate]" class="form-control">
                            @if ($errors->has('specifications.Certificate'))
                              <span class="help-block">
                                <strong>{{ $errors->first('specifications.Certificate') }}</strong>
                              </span>
                            @endif
                          </div>

                        <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Create Product') }}
                                    </button>
                                </div>
                            </div>
                    </form>

@endsection
