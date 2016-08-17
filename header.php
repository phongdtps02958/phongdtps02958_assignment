<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<table Border="1" width="100%" bgcolor="FFFFFF" background=""cellpadding="5" cellspacing="5">
<H1 align="center"><font color="#000000">BÁN SÁCH ONLINE</p></H1>
<p align="right"><?php include('thongbao.php');?></p>
          <tr>
                    <td> <b> <A Href="index.php"><font color="#0189C7">Trang chủ</A></b></td>
				    <td><?php if(!Empty($_SESSION['user_id'])) echo '<b><A Href="timkiem.php?act=to"><font color=#0189C7>Tìm kiếm</A></b>'; else echo '<b><A Href="index.php"><font color=#0189C7>Tìm kiếm</A></b>';?></td>
					<td> <b><A Href="huong dan.php"><font color="#0189C7">Hướng dẫn</A></b></td>
					<td> <b><A Href="gioithieu.html"><font color="#0189C7">Giới thiệu</A></b></td>
			 </tr>
</table>
