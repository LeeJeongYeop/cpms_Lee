<div class="contents">
	<div id="grpSelect">
		<h3>회원 조회</h3>
		<form action="/code/memberInsert" method="post">
			<span>조선택(등록) :</span>	
			<select name="grp" id="grp">
				<option value="1">1조</option>
				<option value="2">2조</option>
				<option value="3">3조</option>
				<option value="4">4조</option>
				<option value="5">5조</option>
				<option value="6">6조</option>
				<option value="7">7조</option>
			</select>
		</div>
		<div id="managementTable">
		</div>
		<div id="memberInsert">
		<hr>
			<h3>회원 등록</h3>
			<table id="memberInsertTable">
				<tr>
					<th>아이디</th>
					<td><input type="text" id="id" name="id"></td>
					<th>비밀번호</th>
					<td><input type="text" id="pw" name="pw"></td>
					<th>이름</th>
					<td><input type="text" id="name" name="name"></td>
					<th>핸드폰번호</th>
					<td><input type="text" id="phone" name="phone"></td>
				</tr>
				<tr>
					<td>대학교</td>
					<td><input type="text" id="uni" name="uni"></td>
					<td>권한</td>
					<td><input type="text" id="auth" name="auth"></td>
				</tr>
			</table>
			<div>
				<input type="button" value="등록" onclick="memberInsert(this.form)">
				<input type="reset" value="취소">
			</div>
		</form>
	</div>
</div>