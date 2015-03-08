<?
$udata=$this->session->all_userdata();

?>
<div id="nav">
	<div id="mypage">
		<table align="center">
			<tr>
				<td colspan="2"><?=$udata['uname']?> 님 환영합니다!</td>
			</tr>
			<tr>
				<th>소속: </th>
				<td><?=$udata['ugroup']?>조</td>
			</tr>
			<tr>
				<?
				if($udata['ugroup']==0){
					?>
					<td><input type="button" value="정보수정" onclick="location='/code/managerModify'"></td>
					<td><input type="button" value="출석관리" onclick="location='/code/managementAttend'"></td>
					<?
				}else{
					?>
					<td><input type="button" value="정보수정" onclick="location='/code/modify'"></td>
					<?
				}
				?>
			</tr>
			<tr>
				<?
				if($udata['ugroup']==0){
					?>
					
					<td><input type="button" value="회원관리" onclick="location='/code/memberManagement'"></td>
					
					<?
				}
				?>
				<td><a href="/code/logout"><input type="button" value="로그아웃"></a></td>
			</tr>
		</table>
	</div>
</div>