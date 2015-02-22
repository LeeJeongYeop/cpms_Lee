
		$(document).ready(function() {
			
			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,agendaWeek,agendaDay'
				},
				lang:'ko',
				height:380,
				selectable: true,
				selectHelper: true,
				insertView: $.post('/index.php/cpms/calendar/calView',function(data){
					
					a=data.split("<br>")
				
					j=0;
					for(var i=0;i<(a.length-1)/4;i++){

						start=(new Date(a[j+2])).toISOString()
						end=(new Date(a[j+3])).toISOString()
						if(start.slice(11,19)=='00:00:00' && end.slice(11,19)=='00:00:00'){
							start=start.slice(0,10)
							end=end.slice(0,10)
						}
						else{
							start=start.slice(0,19)
							end=end.slice(0,19)
						}
						eventData={
							id:a[j],
							title:a[j+1],
							start:start,
							end:end
						}
						$('#calendar').fullCalendar('renderEvent',eventData,true);
						j=j+4;
					}





					

				}),

				select: function(start, end,view) {
					var title = prompt('내용을 입력하세요','');
					var eventData;
					if (title) {
						$.post('/index.php/cpms/calendar/calInsert',{title:title,start:String(start),end:String(end)},function(data){
							eventData = {
								id: data,
								title: title,
								start: start,
								end: end,
								
							};
							
							
							$('#calendar').fullCalendar('renderEvent', eventData, true); 
						})



					// stick? = true
					
				}
				$('#calendar').fullCalendar('unselect');
			},
			editable: true,
			eventLimit: 3,
			
			
			 // allow "more" link when too many events



			 eventDrop:function(event,delta,revertFunc){
			 	end=event.end;
			 	if(event.end==null){
			 		end=event.start;
			 	}

			 	$.post('/index.php/cpms/calendar/calUpdate',{id:event.id,start:String(event.start),end:String(end)})

			 },
			 eventResize:function(event,jsEvent,ui,view){

			 	$.post('/index.php/cpms/calendar/calUpdate',{id:event.id,start:String(event.start),end:String(event.end)})
			 },
			 eventClick:function(event,element){

			 	if(confirm('삭제하시겠습니까?')){
			 		$.post('/index.php/cpms/calendar/calDelete',{id:event.id})
			 		$('#calendar').fullCalendar('removeEvents',event.id);
			 	}
			 }

			});

});