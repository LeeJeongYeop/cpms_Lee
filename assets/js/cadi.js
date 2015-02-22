window.onload=function(){

				var log=document.getElementById('log');
				if(log!=null){
				log.onsubmit=function(){
					
					if(document.getElementById('id').value=='' || document.getElementById('pw').value==''){
						alert('입력해주세요!')
						return false;
					}
				}
			}
				
				var div=document.createElement('div');
				document.body.appendChild(div);
				div.style.position='absolute';
				div.style.top='30px';
				setInterval(function(){
					var date=new Date();

					div.innerHTML='현재시간: '+date.toLocaleString();
				},1000)
				var signup=document.getElementById('signup');
				if(signup!=null){
				signup.onsubmit=function(){
					var sid=document.getElementById('sid').value;
					var spw=document.getElementById('spw').value;
					var spw1=document.getElementById('spw1').value;
					var sname=document.getElementById('sname').value;
					var sidSpecial=/[^a-zA-Z0-9]/;
					var snameSpecial=/[^a-zA-Zㄱ-ㅎㅏ-ㅣ가-힣]/;
					
					if(sidSpecial.test(sid)){
						alert('아이디는 공백없이 영어 숫자만 가능합니다!');
						return false;
					}
					else if(sid.length<6 || sid.length>13){
						alert('아이디를 6~13 사이로 입력해주세요!');
						return false;
					}
					else if(!joong){
						alert('중복확인 해주세요!');
						return false;
					}
					
					else if(spw.length<6 || spw.length>13){
						alert('비밀번호를 6~13 사이로 입력해주세요!');
						return false;
					}
					else if(sid==spw){
						alert('아이디와 비밀번호는 같으면 안됩니다!');
						return false;
					}
					else if(spw!=spw1){
						alert('비밀번호와 비밀번호확인이 다릅니다!');
						return false;
					}
					else if(snameSpecial.test(sname)){
						alert('이름은 공백없이 한글과 영어만 가능합니다!');
						return false;
					}

					
		
			}
		}
		var bwriteForm=document.getElementById('bwriteForm');
		if(bwriteForm!=null){
		bwriteForm.onsubmit=function () {
						
						var btitle=document.getElementById('btitle').value;
						if(!btitle){
							alert('제목을 입력해주세요!');
							return false;
						}
						else if(!confirm('올리시겠습니까?')){
							return false;
						}
					}
		bwriteForm.onreset=function(){
			if(!confirm('취소하시겠습니까?')){
				return false;
			}
			else{
				location.href('/index.php/abcd/board1/1');
			}
		}
					}


			}
var joong=false;
function joongbok(){
			var iv=document.getElementById('sid').value;
			if(iv){
				window.open('/index.php/abcd/joongbok/'+iv,'','width=100px height=50px')
				joong=true;
			}
			else{
				alert('아이디를 입력해주세요!');
				joong=false;
			}

				
			}
function bSearch(){
	var boardSearch=document.getElementById('bSearch').value.trim();
	if(!boardSearch){
		alert('입력해주세요!');
	}
	else{
		var searchEncode=encodeURIComponent(boardSearch)
	location.href('/index.php/abcd/boardSearch/'+searchEncode+'/1');
	}
}
function boardDelete(bno){
	if(confirm('삭제하시겠습니까?')){
		location.href('/index.php/abcd/boardDelete/'+bno);
	}
}

function boarddat(bno){
	
	var bcontent=encodeURIComponent(document.getElementById('bdat').value);
	location.href('/index.php/abcd/boarddat/'+bno+'/'+bcontent);
}
function bddelete(bdpno,bno){
	location.href('/index.php/abcd/bddelete/'+bno+'/'+bdpno);
}




