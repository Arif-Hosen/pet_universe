@extends('layouts.admin')

@section('stylesheet')
<link rel="stylesheet" href="{{ asset('assets/admin/plugins/select2/css/select2.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Manage product</h2>
                    </header>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                                <a href="{{ route('product.list') }}" class="brn btn-success btn-sm">Slider list</a>
                            </div>
                        </div>
                        @if (session()->has('status'))
                        {!! session()->get('status') !!}
                        @endif

                        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $product->id }}">

                            <div class="row">



                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Category / Sub Category<span class="text-danger">*</span></label>
                                        <select name="subcategory_id" id="subcategory_id" required class="form-control @error('subcategory_id') is-invalid @enderror">
                                            <option value="">Choose a category Status</option>
                                            @foreach ($categorys as $e)
                                            @php
                                                    $subcat = DB::table('sub_categories')->where('category_id', $e->id)->get();
                                                @endphp

                                                <option style="color: blue;font-weight: 600" disabled="" value="{{ $e->id }}"
                                        @if (old('category_id') == $e->category_name) selected @endif>
                                        {{ ucfirst($e->category_name) }}</option>



                                            @foreach($subcat as $e)
                                                <option value="{{ $e->id }}" @if(old('subcategory_id->id', $product->subcategory->subcategory_name) == $e->subcategory_name) selected @endif>{{ ucfirst($e->subcategory_name) }}</option>
                                            @endforeach
                                            @endforeach
                                        </select>
                                        @error('subcategory_id')
                                        <strong class="text-danger">{{ $errors->first('subcategory_id') }}</strong>
                                        @enderror
                                    </div>
                                </div>




                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Child Category<span
                                                class="text-danger">*</span></label>
                                        <select name="childcategory_id" id="childcategory_id"
                                                class="form-control @error('childcategory_id') is-invalid @enderror">
                                            <option value="{{ old('childcategory_id', $product->childcategory_id) }}">Choose a category Status</option>
                                                @foreach($childcategory as $e)
                                                <option value=" {{ $e->id }}" @if(old('childcategory_id') ==
                                                $e->childcategory_name) selected @endif>{{
                                                ucfirst($e->childcategory_name) }}
                                            </option>
                                            @endforeach

                                        </select>
                                        @error('childcategory_id')
                                        <strong class="text-danger">{{ $errors->first('childcategory_id') }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Name</label>
                                        <input type="text" name="name" placeholder="Slider name"
                                               value="{{ old('name', $product->name) }}"
                                               class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                        <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Product Code</label>
                                        <input type="text" name="code" placeholder="Product Code"
                                               value="{{ old('code', $product->code) }}"
                                               class="form-control @error('code') is-invalid @enderror">
                                        @error('code')
                                        <strong class="text-danger">{{ $errors->first('code') }}</strong>
                                        @enderror
                                    </div>
                                </div>

                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Select Brand<span class="text-danger">*</span></label>
                                        <select name="brand_id" required class="form-control @error('brand_id') is-invalid @enderror">
                                            <option value="">Choose a category Status</option>
                                            @foreach($brand as $e)
                                                <option value="{{ $e->id }}" @if(old('brand_id->id', $product->brand->brand_name?? "") == $e->brand_name?? "") selected @endif>{{ ucfirst($e->brand_name?? "") }}</option>
                                            @endforeach
                                        </select>
                                        @error('brand_id')
                                        <strong class="text-danger">{{ $errors->first('brand_id') }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Pickuppoint<span class="text-danger">*</span></label>
                                        <select name="pickuppoint_id" required class="form-control @error('pickuppoint_id') is-invalid @enderror">
                                            <option value="">Choose a category Status</option>
                                            @foreach($pickuppoint as $e)
                                                <option value="{{ $e->id }}" @if(old('pickuppoint_id->id', $product->pickuppoint->pickup_point_name) == $e->pickup_point_name) selected @endif>{{ ucfirst($e->pickup_point_name) }}</option>
                                            @endforeach
                                        </select>
                                        @error('pickuppoint_id')
                                        <strong class="text-danger">{{ $errors->first('pickuppoint_id') }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Unit</label>
                                        <input type="text" name="unit" placeholder="Product unit"
                                               value="{{ old('unit', $product->unit) }}"
                                               class="form-control @error('unit') is-invalid @enderror">
                                        @error('unit')
                                        <strong class="text-danger">{{ $errors->first('unit') }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                {{-- @php
                                $products->tag_name = explode(',', $request->input('tag_name'));
                                @endphp --}}
                                {{--
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Tag</label>
                                        <select multiple="multiple" name="tag_name[]" placeholder="Product tag_name"
                                                value="{{ old('tag_name', $product->tag_name) }}"
                                                class="form-control select2 @error('tag_name') is-invalid @enderror">
                                        </select>
                                        @error('tag_name')
                                        <strong class="text-danger">{{ $errors->first('tag_name') }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                --}}


                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Tag</label>
                                        <select multiple="multiple" name="tag_name[]" placeholder="Product tag name"
                                                class="form-control select2 @error('tag_name[]') is-invalid @enderror">
                                            @foreach($selectedTags as $tag)
                                            <option value="{{ $tag }}" @if(in_array($tag, $selectedTags)) selected
                                                    @endif>{{ $tag }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('tag_name[]')
                                        <strong class="text-danger">{{ $errors->first('tag_name[]') }}</strong>
                                        @enderror
                                    </div>
                                </div>


                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Stock Quantity</label>
                                        <input type="text" name="stock_quantity"
                                               placeholder="Product stock_quantity"
                                               value="{{ old('stock_quantity', $product->stock_quantity) }}"
                                               class="form-control @error('stock_quantity') is-invalid @enderror">
                                        @error('stock_quantity')
                                        <strong class="text-danger">{{ $errors->first('stock_quantity') }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                {{--  <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Warehuse<span class="text-danger">*</span></label>
                                        <select name="warehuse" id="warehuse"
                                                class="form-control @error('warehuse') is-invalid @enderror">
                                            <option value="{{ old('warehuse', $product->warehuse) }}">Choose a category Status</option>
                                                @foreach ($warehuses as $e) <option value="{{ $e->id }}" @if(old('warehuse') == $e->warehouse_name) selected @endif>{{ ucfirst($e->warehouse_name) }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('warehuse')
                                        <strong class="text-danger">{{ $errors->first('warehuse') }}</strong>
                                        @enderror
                                    </div>
                                </div>  --}}

                            </div>


                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Size</label>
                                        <input type="text" name="size" placeholder="Product size"
                                               value="{{ old('size', $product->size) }}"
                                               class="form-control @error('size') is-invalid @enderror">
                                        @error('size')
                                        <strong class="text-danger">{{ $errors->first('size') }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Color</label>
                                        <select multiple="multiple" name="color[]" placeholder="Product color"
                                                class="form-control select2 @error('color[]') is-invalid @enderror">
                                            @foreach($selectedColors as $color)
                                            <option value="{{ $color }}" @if(in_array($color, $selectedColors)) selected
                                                    @endif>{{ $color }}
                                            </option>
                                            @endforeach
                                        </select>
                                        @error('color[]')
                                        <strong class="text-danger">{{ $errors->first('color[]') }}</strong>
                                        @enderror
                                    </div>
                                </div>


                            </div>


                            <div class="row">
                                <div class="col-sm-6 mt-2">
                                    <div class="form-group">
                                        <label class="control-label">Video Embed</label>
                                        <input type="text" name="video" placeholder="Product video"
                                               value="{{ old('video', $product->video) }}"
                                               class="form-control @error('video') is-invalid @enderror">
                                        @error('video')
                                        <strong class="text-danger">{{ $errors->first('video') }}</strong>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="control-label">Image <label
                                                class="text-danger">*</label></label>
                                        <input type="file" name="image" placeholder="Slider image"
                                               value="{{ old('image', $product->image) }}"
                                               class="form-control @error('image') is-invalid @enderror">
                                        @error('image')
                                        <strong class="text-danger">{{ $errors->first('image') }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Purchase Price</label>
                                        <input type="text" name="purchase_price"
                                               placeholder="Product purchase_price"
                                               value="{{ old('purchase_price', $product->purchase_price) }}"
                                               class="form-control @error('purchase_price') is-invalid @enderror">
                                        @error('purchase_price')
                                        <strong class="text-danger">{{ $errors->first('purchase_price') }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Selling Price</label>
                                        <input type="text" name="selling_price"
                                               placeholder="Product selling_price"
                                               value="{{ old('selling_price', $product->selling_price) }}"
                                               class="form-control @error('selling_price') is-invalid @enderror">
                                        @error('selling_price')
                                        <strong class="text-danger">{{ $errors->first('selling_price') }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Discount Price</label>
                                        <input type="text" name="discount_price"
                                               placeholder="Product discount_price"
                                               value="{{ old('discount_price', $product->discount_price) }}"
                                               class="form-control @error('discount_price') is-invalid @enderror">
                                        @error('discount_price')
                                        <strong class="text-danger">{{ $errors->first('discount_price') }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Featured<span
                                                class="text-danger">*</span></label>
                                        <select name="featured" required
                                                class="form-control @error('featured') is-invalid @enderror">
                                            <option value="">Choose a featured</option>
                                            @foreach (\App\Models\Product::$featuredArrays as $statys)
                                            <option value="{{ $statys }}"
                                                    @if (old(
                                            'featured', $product->featured) == $statys) selected @endif>
                                            {{ ucfirst($statys) }}</option>
                                            @endforeach
                                        </select>
                                        @error('featured')
                                        <strong class="text-danger">{{ $errors->first('featured') }}</strong>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Todays Deal<span
                                                class="text-danger">*</span></label>
                                        <select name="today_deal" required
                                                class="form-control @error('today_deal') is-invalid @enderror">
                                            <option value="">Choose a today_deal</option>
                                            @foreach (\App\Models\Product::$todayDealArrays as $statys)
                                            <option value="{{ $statys }}"
                                                    @if (old(
                                            'today_deal', $product->today_deal) == $statys) selected @endif>
                                            {{ ucfirst($statys) }}</option>
                                            @endforeach
                                        </select>
                                        @error('today_deal')
                                        <strong class="text-danger">{{ $errors->first('today_deal') }}</strong>
                                        @enderror
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Status<span class="text-danger">*</span></label>
                                        <select name="status" required
                                                class="form-control @error('status') is-invalid @enderror">
                                            <option value="">Choose a status</option>
                                            @foreach (\App\Models\Product::$statusArrays as $statys)
                                            <option value="{{ $statys }}"
                                                    @if (old(
                                            'status', $product->status) == $statys) selected @endif>
                                            {{ ucfirst($statys) }}</option>
                                            @endforeach
                                        </select>
                                        @error('status')
                                        <strong class="text-danger">{{ $errors->first('status') }}</strong>
                                        @enderror
                                    </div>
                                </div>


                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Set to Banner<span
                                                class="text-danger">*</span></label>
                                        <select name="set_to_banner" required
                                                class="form-control @error('set_to_banner') is-invalid @enderror">
                                            <option value="">Choose a set_to_banner</option>
                                            @foreach (\App\Models\Product::$setToBannerArrays as $statys)
                                            <option value="{{ $statys }}"
                                                    @if (old(
                                            'set_to_banner', $product->set_to_banner) == $statys) selected @endif>
                                            {{ ucfirst($statys) }}</option>
                                            @endforeach
                                        </select>
                                        @error('set_to_banner')
                                        <strong class="text-danger">{{ $errors->first('set_to_banner') }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea name="description"
                                                  class="form-control @error('description') is-invalid @enderror"
                                                  rows="5">{{ old('description', $product->description) }}</textarea>
                                        @error('description')
                                        <strong class="text-danger">{{ $errors->first('description') }}</strong>
                                        @enderror
                                    </div>
                                </div>
                            </div>




                            @foreach($product_file as $val)
                  <div class="col-md-12 mb-2">
                    <a href="{{ route('product.file.delete', ['productId'=>$product->id, 'id'=>$val->id]) }}" class="btn btn-danger">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                        <path
                          d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                        <path fill-rule="evenodd"
                              d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                      </svg>
                    </a>
                    <a href="{{ asset($val->file) }}" target="_blank" class="btn btn-success" title="{{ $val->type. ' _ ' .$val->size  }}">Download</a>
                    <span>{{ $val->description }}</span>
                  </div>
                @endforeach


                <div id="attributes">
                  <div class="row child">
                    <div class="col-md 3">
                      <div class="form-group">
                        <label for="image_upload">File Upload <span class="text-danger">*</span></label>
                        <input type="file"  alt="" name="image_upload[]" id="image_upload"
                               class="form-control @error("image_upload") is-invalid @enderror">
                        @error("image_upload")
                        <strong class="text-danger">{{ $errors->first("image_upload") }}</strong>
                        @enderror
                      </div>
                    </div>


                    <div class="col-md 3">
                      <div class="form-group">
                        <label for="image_type" class="imageType">File type <span
                            class="text-danger">*</span></label>
                        <input type="text" name="image_type[]" id="image_type"
                               class="form-control type @error("image_type") is-invalid @enderror">
                        @error("image_type")
                        <strong class="text-danger">{{ $errors->first("image_type") }}</strong>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md 3">
                      <div class="form-group">
                        <label for="image_filename">File Description<span class="text-danger">*</span></label>
                        <input type="text" name="image_filename[]" id="image_filename"
                               class="form-control filename @error("image_filename") is-invalid @enderror">
                        @error("image_filename")
                        <strong class="text-danger">{{ $errors->first("image_filename") }}</strong>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md 2">
                      <div class="form-group">
                        <label for="image_size">Size <span class="text-danger">*</span></label>
                        <input type="text" name="image_size[]" id="image_size"
                               class="form-control size @error("image_size") is-invalid @enderror">
                        @error("image_size")
                        <strong class="text-danger">{{ $errors->first("image_size") }}</strong>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="form-group" style="margin-top:25px!important;display: flex">
                        <a class="btn btn-danger text-light hidden clear-file" id="clear-file" style="padding: 4px 2px; margin-right: 2px">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path
                              d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                            <path fill-rule="evenodd"
                                  d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                          </svg>
                        </a>
                        <a class="btn btn-secondary text-light add"><strong>+</strong> Add</a>
                      </div>
                    </div>
                  </div>
                </div>





                            <div class="row mt-4">
                                <div class="col-sm-12 text-right">
                                    <button class="btn btn-danger btn-sm" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets/admin/plugins/select2/js/select2.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.select2').select2({
            tags: true,
        })
    })
</script>

<script>


    $("#subcategory_id").change(function () {
        var id = $(this).val();
        $.ajax({
            url: "{{ url('/get-child-category/') }}/" + id,
            type: 'get',
            success: function (data) {
                $('select[name="childcategory_id"]').empty();
                $.each(data, function (key, data) {
                    $('select[name="childcategory_id"]').append('<option value="' + data
                        .id + '">' + data.childcategory_name + '</option>');

                });
            }
        });
    });
</script>



<script>
    $(document).ready(function () {

      $('.clear-file').click(function () {
        $('#image_upload').val('').change()
        $('#image_filename').val('')
        $('#image_type').val('')
        $('#image_size').val('')
        $('#clear-file').addClass('hidden')
      })

      //    multiple row crate

      /* Variables */
      var row = $(".attr");

      function addRow() {
        row.clone(true, true).appendTo("#attributes");
      }

      function removeRow(button) {
        button.closest("div.attr").remove();
      }

      $('#attributes .attr:first-child').find('.remove').hide();

      /* Doc ready */
      $(".add").on('click', function () {
        let content = `<div class="row child" >
            <div class="col-md 3">
                <div class="form-group">
                    <label for="image_upload">File Upload <span class="text-danger">*</span></label>
                    <input type="file"  alt="" name="image_upload[]"
                         class="form-control">
                  </div>
              </div>
              <div class="col-md 3">
                  <div class="form-group">
                      <label for="image_type">File type <span class="text-danger">*</span></label>
                      <input type="text" name="image_type[]"
                             class="form-control type">
                  </div>
              </div>
              <div class="col-md 3">
                  <div class="form-group">
                      <label for="image_filename">File Description<span class="text-danger">*</span></label>
                      <input type="text" name="image_filename[]"
                             class="form-control filename">
                  </div>
              </div>
              <div class="col-md 2">
                  <div class="form-group">
                      <label for="image_size">Size <span class="text-danger">*</span></label>
                      <input type="text" name="image_size[]"
                             class="form-control size">
                  </div>
              </div>
              <div class="col-md-1">
                  <div class="form-group" style="margin-top:30px!important;">
                      <label for="image_size" ></label>
                  <span  class="btn btn-danger child-remove"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg></span>
                  </div>
              </div>
          </div>`;
        $('#attributes').append(content)
      });


      $(document).on('click', '.child-remove', function () {
        $(this).closest('.child').remove()
      });

      $(document).on('change', 'input[type="file"]', function (e) {
        if (e.target.id === 'image_upload') {
          $('#clear-file').removeClass('hidden')
        }
        const filename = $(this)[0].files.length ? $(this)[0].files[0].name : "";
        var file_name_array = filename.split(".");
        var ext = file_name_array[file_name_array.length - 1];
        const size = Math.round($(this)[0].files.length ? ($(this)[0].files[0].size / 1024) : 0);
        $(this).closest('.child').find('.type').val('.' + ext)
        $(this).closest('.child').find('.type').attr('readonly', 'true')
        $(this).closest('.child').find('.filename').val(filename.split('.').slice(0, -1).join('.'))
        $(this).closest('.child').find('.size').val(size + ' KB')
        $(this).closest('.child').find('.size').attr('readonly', 'true')
      })
    });
  </script>
@endsection
