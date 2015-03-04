/**************** 정보수정 ****************/
function managerModify(check){
	var pw=check.pw.value;
	var pw_ok=check.pw_ok.value;
	var name=check.name.value;
	var phone=check.phone.value;

	if(pw==""){
		alert("비밀번호를 입력하세요.");
		check.pw.focus();
		return;
	}
	if(pw_ok==""){
		alert("비밀번호 확인을 입력하세요.");
		check.pw_ok.focus();
		return;
	}
	if(name==""){
		alert("이름를 입력하세요.");
		check.name.focus();
		return;
	}
	if(phone==""){
		alert("핸드폰 번호를 입력하세요.");
		check.phone.focus();
		return;
	}
	if(pw!=pw_ok){
		alert("비밀번호가 일치하지 않습니다.");
		check.pw_ok.focus();
		return;
	}

	check.submit();
}
/**************** 회원관리 ****************/
function memberInsert(check){
	var id=check.id.value;
	var pw=check.pw.value;
	var name=check.name.value;
	var phone=check.phone.value;

	if(id==""){
		alert("아이디를 입력하세요.");
		check.id.focus();
		return;
	}
	if(pw==""){
		alert("비밀번호를 입력하세요.");
		check.pw.focus();
		return;
	}
	if(name==""){
		alert("이름를 입력하세요.");
		check.name.focus();
		return;
	}
	if(phone==""){
		alert("핸드폰 번호를 입력하세요.");
		check.phone.focus();
		return;
	}

	check.submit();
}

/**************** jQuery ****************/
$(function(){
	$('#grp').change(function(){
		var grp = $('#grp option:selected').val();
		$.post("/code/memberList",{grp:grp}, function(data){
			$('#managementTable').html(data);
		});
	});
});
