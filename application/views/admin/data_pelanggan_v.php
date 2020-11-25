<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="col-md-12 col-sm-12" id='product_list'>
      <div class="x_panel">
        <div class="row x_title">
          <div class="col-md-6">
            <h2>Data Pelanggan</h2>
          </div>
          <div class="col-md-6">
            <button class="btn btn-success pull-right" id="add_product" data-toggle='modal' data-target='#inputProduct' onclick="">Tambah Data</button>
          </div>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <div class="row">
            <div class="col-sm-12">
              <div class="card-box table-responsive">
                <table id="datatable-buttons" class="table table-striped jambo_table bulk_action" style="width:100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Produk</th>
                      <th>Tentang Produk</th>
                      <th>Kategori</th>
                      <th>Harga</th>
                      <th>Product Image</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    
                        <tr>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td><img src="" alt="" width="60"></td>
                          <td class=" last">
                            <button id="btn-delete" onClick="" class="">Hapus</button>
                            <button id='edit-button' data-toggle='modal' data-target='#inputProduct' type="button" onclick="" class="btn btn-warning m-0 p-2 text-white">Ubah</button>
                          </td>
                        </tr>
  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- modal tambah data -->
<div class="modal fade" id="inputProduct" tabindex="-1" role="dialog" aria-labelledby="inputProductLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12">
            <div class="x_content">
              <br>
              <form id='formDataProduct' class="form-label-left input_mask" method="POST" action="" enctype="multipart/form-data">
                <input type="hidden" class="form-control" id="product-id" name="product_id" required="required">
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 ">Nama Produk</label>
                  <div class="col-md-9 col-sm-9 ">
                    <input type="text" class="form-control" id="product-name" name="product_name" required="required">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 ">Kategori Produk</label>
                  <div class="col-md-9 col-sm-9 ">
                    <select id="heard" class="form-control" required="" name="product_category">
                      <option value="">Pilih..</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 ">Tentang Produk</label>
                  <div class="col-md-9 col-sm-9 ">
                    <textarea id="product_description" required="required" class="form-control" name="product_description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 ">Harga Produk</label>
                  <div class="col-md-9 col-sm-9 ">
                    <input id="product-price" type="text" class="form-control" name="product_price" required="required">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-form-label col-md-3 col-sm-3 ">Foto Produk</label>
                  <div class="col-md-9 col-sm-9 ">
                    <input type="file" class="form-control" name="product_image" id='product_image' required="required">
                  </div>
                </div>

                <div class="ln_solid"></div>
                <div class="form-group row">
                  <div class="col-md-9 col-sm-9  offset-md-3">
                    <button type="reset" class="btn btn-primary " data-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="reset">Hapus</button>
                    <button id='save-insert' type="submit" class="btn btn-success">Simpan</button>

                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>