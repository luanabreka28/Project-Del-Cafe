<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row"
                data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
                <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Detail Hari</h2>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <label class="form-label required ">Jadwal Hari</label>
                            <select class="form-select mb-2" id="category" name="id_list_day">
                                <option value="">Pilih Hari</option>
                                @foreach($list_day as $item)
                                    <option value="{{$item->id}}" {{$list_food->id_list_day == $item->id ? 'selected' : ''}}>{{$item->day}} | {{$item->date}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card card-flush py-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>Waktu Makan</h2>
                            </div>
                            <div class="card-toolbar">
                                <div class="rounded-circle w-15px h-15px" id="product_status"></div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="card-body pt-0">
                                <label class="form-label required ">Jam Mulai</label>
                                <input type="time" name="start" class="form-control mb-2" placeholder="Masukkan Hari" value="{{ $list_food->start }}" />
                                <div class="text-muted fs-7">Tentukan Jam</div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="card-body pt-0">
                                <label class="form-label required ">Jam Berakhir</label>
                                <input type="time" name="end" class="form-control mb-2" placeholder="Masukkan Hari" value="{{ $list_food->end }}" />
                                <div class="text-muted fs-7">Tentukan Jam</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general"
                            role="tab-panel">
                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>General</h2>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-10 fv-row">
                                            <label class="form-label required ">Nama Makanan</label>
                                            <select class="form-select mb-2" id="status" name="name_food">
                                                <option value="" >Pilih Nama Makanan</option>
                                                <option value="Sarapan" {{ $list_food->name_food=="Sarapan" ? 'selected' : '' }}>Sarapan</option>
                                                <option value="Makan Siang" {{ $list_food->name_food=="Makan Siang" ? 'selected' : '' }}>Makan Siang</option>
                                                <option value="Makan Malam" {{ $list_food->name_food=="Makan Malam" ? 'selected' : '' }}>Makan Malam</option>
                                            </select>
                                            <div class="text-muted fs-7">Pilih Waktu Makanan</div>
                                        </div>
                                        <div class="mb-10 fv-row">
                                            <label class="form-label required ">Isi Menu</label>
                                            <input type="text" name="description"
                                                class="form-control mb-2" placeholder="Isi Menu Makanan"
                                                value="{{ $list_food->description }}" />
                                            <div class="text-muted fs-7">*Isi Menu(lauk,sayur,minuman)</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-flush py-4">                                    
                                    <div class="card-body pt-0">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Harga</label>
                                            <input type="text" id="price_product" name="price" class="form-control mb-2"
                                                placeholder="1.000" value="{{ $list_food->price }}" />
                                            <div class="text-muted fs-7">*Tentukan Harga</div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Gambar</label>
                                            <input type="file" name="image" class="form-control mb-2" accept=".jpg,.jpeg,.png" value="{{ $list_food->image }}"/>
                                            <div class="text-muted fs-7">Masukkan Gambar</div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="mb-10 fv-row">
                                            <label class="required form-label">Gambar Background</label>
                                            <input type="file" name="image_background" class="form-control mb-2" accept=".jpg,.jpeg,.png" />
                                            <div class="text-muted fs-7">Masukkan Gambar Backgroynd</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" onclick="load_list(1);" class="btn btn-light me-5">Kembali</button>
                        @if ($list_food->id)
                        <button type="submit" id="kt_ecommerce_add_product_submit"  onclick="handle_upload('#kt_ecommerce_add_product_submit','#kt_ecommerce_add_product_form','{{route('admin.list-food.update',$list_food->id)}}','PATCH');" class="btn btn-primary">
                            <span class="indicator-label">Save Changes</span>
                            <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        @else
                            <button type="submit" id="kt_ecommerce_add_product_submit"  onclick="handle_upload('#kt_ecommerce_add_product_submit','#kt_ecommerce_add_product_form','{{route('admin.list-food.store')}}','POST');" class="btn btn-primary">
                                <span class="indicator-label">Save Changes</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    ribuan('price_product');
</script>
<script>
    ClassicEditor
        .create( document.querySelector( '#description_product' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>