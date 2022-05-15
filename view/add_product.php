<!-- The Modal -->
<div class="modal" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">
        
            <!-- Modal Header -->
            <div class="modal-header">
            <h4 class="modal-title">Add new product</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            
            <!-- Modal body -->
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <label for="product_name"><b>Tên sản phẩm</b></label>
                    <input type="text" placeholder="Nhập Tên sản phẩm" name="product_name" id="product_name" required>

                    <label for="category"><b>Danh mục</b></label>
                    <select class="option" name="category">
                        <option value="IP">IP</option>
                        <option value="SS">SS</option>
                        <option value="OP">OP</option>
                    </select>
                    
                    <label for="image"><b>Hình ảnh</b></label>
                    <input type="file" name="imagefile"/>

                    <button type="submit" class="registerbtn" name="submit">Submit</button>
                    
                
                </form>
            </div>
            
            <!-- Modal footer -->
            <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        </div>
        </div>
    </div>