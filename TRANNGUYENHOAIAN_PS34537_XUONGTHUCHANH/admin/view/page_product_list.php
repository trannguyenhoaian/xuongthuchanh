<div class="p-5">
    <p class="text-center">QUẢN LÝ SẢN PHẨM</p>
    <a href="?mod=product&act=add" class="btn btn-primary">Thêm sản phẩm</a>    
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Mã sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Giá khuyến mãi</th>
                <th>Hình ảnh</th>
                <th>Danh mục</th>
                <th>Số lượng</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dssp as $sp):?>
            <tr>
                <td><?=$sp['MaSanPham']?></td>
                <td><?=$sp['TenSanPham']?></td>
                <td><?=$sp['Gia']?> đ</td>
                <td><?=$sp['GiaKhuyenMai']?> đ</td>
                <td><img src="../content/img/<?=$sp['HinhAnh']?>" width="60px" alt=""></td>
                <td><?=$sp['tendanhmuc']?></td>
                <td><?=$sp['SoLuong']?></td>
                <td><?=$sp['TrangThai']?></td>
                <td>
                    <a href="?mod=product&act=edit&id=<?=$sp['MaSanPham']?>" class="btn btn-success">Sửa</a>
                    <a href="?mod=product&act=delete&id=<?=$sp['MaSanPham']?>" class="btn btn-danger">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</div>